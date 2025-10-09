````markdown
# ❄️ Snowflake Data Loading using SnowSQL

## 📘 Project Overview
This project demonstrates how to **create a database, table, file format, and stage in Snowflake**, and then **load CSV data** into a table using the **SnowSQL CLI**.  
It provides a complete end-to-end example of Snowflake data ingestion from a local file system.

---

## 🧱 Steps Overview

### 1️⃣ Create a Database
We start by creating a new database in Snowflake:
```sql
CREATE DATABASE SNOW_SQL;
````

### 2️⃣ Use the Database

Select the newly created database as the active one:

```sql
USE DATABASE SNOW_SQL;
```

### 3️⃣ Create a Table

Define a simple table structure to store customer details:

```sql
CREATE TABLE CUSTOMER_DETAILS (
    first_name STRING,
    last_name STRING,
    address STRING,
    city STRING,
    state STRING
);
```

You can verify the table creation with:

```sql
SELECT * FROM CUSTOMER_DETAILS;
```

---

## 📁 File Format Setup

Define a **file format** to describe the structure of your CSV file.
Here, we use a **pipe (`|`)** delimiter and skip the header row:

```sql
CREATE OR REPLACE FILE FORMAT FILE_FORMAT_CLI
    TYPE = 'CSV'
    FIELD_DELIMITER = '|'
    SKIP_HEADER = 1;
```

---

## 📦 Stage Creation

A **stage** is a Snowflake object used to store data files before loading them into tables.

```sql
CREATE OR REPLACE STAGE SNOW_SQL_CLI_STAGE
    FILE_FORMAT = FILE_FORMAT_CLI;
```

You can verify stage details with:

```sql
DESC STAGE SNOW_SQL_CLI_STAGE;
```

---

## 💾 Upload Data File

Use the **PUT** command in SnowSQL to upload your local CSV file to the Snowflake stage.

> ⚠️ Note: The file path must be **local to your computer** and **accessible** by SnowSQL.

```sql
PUT 'file:///C:/Users/Administrator/Desktop/Cloud Data Engineering/7. Projects/2. Snowflake Data Loading/snowflake-data-ingestion/data/customer_detail.csv'
    @SNOW_SQL_CLI_STAGE
    AUTO_COMPRESS = TRUE;
```

* `AUTO_COMPRESS = TRUE` ensures the file is automatically compressed before uploading.
* Uploaded files are visible in the stage and ready for loading.

---

## 📥 Load Data into Table

Now, load the staged data into your `CUSTOMER_DETAILS` table:

```sql
COPY INTO CUSTOMER_DETAILS
    FROM @SNOW_SQL_CLI_STAGE
    FILE_FORMAT = (FORMAT_NAME = FILE_FORMAT_CLI)
    ON_ERROR = 'skip_file';
```

### 🧠 Explanation:

* **`@SNOW_SQL_CLI_STAGE`** → The stage where the CSV file was uploaded.
* **`FILE_FORMAT_CLI`** → Defines how the file should be read.
* **`ON_ERROR = 'skip_file'`** → Skips any problematic files during loading.

---

## ✅ Verify Data Load

Once the copy command succeeds, verify your data:

```sql
SELECT * FROM CUSTOMER_DETAILS;
```

You should now see all customer records loaded from your CSV file!

---

## 📊 Folder Structure Example

```
📁 snowflake-data-ingestion/
│
├── data/
│   └── customer_detail.csv
│
├── snow_sql_script.sql
└── README.md
```

---

## 🧰 Tools Used

| Tool          | Purpose                           |
| ------------- | --------------------------------- |
| **Snowflake** | Cloud data warehouse              |
| **SnowSQL**   | Command-line client for Snowflake |
| **CSV File**  | Data source file for ingestion    |


---

## 🚀 Summary

You have successfully:

1. Created a Snowflake database and table
2. Defined a file format
3. Created a stage for temporary data storage
4. Uploaded your data using the SnowSQL `PUT` command
5. Loaded the data into your Snowflake table using `COPY INTO`

---

## 👨‍💻 Author

**Abdul Ahad**
📅 *Cloud Data Engineering Project*
💼 Snowflake | SQL | Data Ingestion | CLI Automation

---

⭐ *If you found this helpful, consider starring this repository!*

```
