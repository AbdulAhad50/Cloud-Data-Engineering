# ☁️ Cloud Data Loading: AWS S3 → Snowflake

This project demonstrates **how to load data from AWS S3 into Snowflake** using external stages, file formats, and the `COPY INTO` command.  
The example uses **Tesla stock data (TSLA.csv)** stored in an S3 bucket and loads it into a Snowflake table named `TESLA_STOCKS`.

---

## 🚀 Overview

Data engineers often need to move large datasets from **cloud storage (like S3)** to **data warehouses (like Snowflake)** for analysis and reporting.  
This project shows a **step-by-step implementation** of that process.

---

## 🧩 Prerequisites

Before running the script, ensure you have:

- A valid **Snowflake account**
- Access to **AWS S3 bucket** containing the `TSLA.csv` file
- Your **AWS Access Key** and **Secret Key**

---

## 🏗️ Step-by-Step Process

### 1️⃣ Create and Use a Database

```sql
USE DATABASE SNOW_SQL;
```

This sets your working database in Snowflake.

---

### 2️⃣ Create the Target Table

```sql
CREATE OR REPLACE TABLE TESLA_STOCKS(
    date DATE,
    open_value DOUBLE,
    high_vlaue DOUBLE,
    low_value DOUBLE,
    close_vlaue DOUBLE,
    adj_close_value DOUBLE,
    volume BIGINT
);
```

This creates a table schema matching the structure of your CSV data.

---

### 3️⃣ Verify Empty Table

```sql
SELECT * FROM TESLA_STOCKS;
```

Confirm that the table is empty before loading data.

---

### 4️⃣ Create an External Stage for AWS S3

```sql
CREATE OR REPLACE STAGE BULK_COPY_TESLA_STOCKS
URL = 's3://snowflake-cloud-data-loading/TSLA.csv'
CREDENTIALS = (AWS_KEY_ID='YOUR_AWS_KEY', AWS_SECRET_KEY='YOUR_AWS_SECRET');
```

The **stage** points Snowflake to your S3 data location and uses AWS credentials for secure access.

---

### 5️⃣ List Files in Stage

```sql
LIST @BULK_COPY_TESLA_STOCKS;
```

Lists all files available in the stage to confirm Snowflake can access your S3 bucket.

---

### 6️⃣ Copy Data from Stage to Snowflake Table

```sql
COPY INTO TESLA_STOCKS
    FROM @BULK_COPY_TESLA_STOCKS
    FILE_FORMAT = (TYPE = 'CSV', FIELD_DELIMITER=',', SKIP_HEADER=1)
    ON_ERROR = 'skip_file';
```

The `COPY INTO` command loads data into the Snowflake table using the CSV file format.
`ON_ERROR = 'skip_file'` ensures that problematic files are ignored without stopping the entire load.

---

### 7️⃣ Verify the Loaded Data

```sql
SELECT * FROM TESLA_STOCKS;
```

Your table should now display the Tesla stock records successfully loaded from S3.

---

## 🧠 Key Concepts Covered

| Concept             | Description                                                      |
| ------------------- | ---------------------------------------------------------------- |
| **Database**        | Logical collection of schemas, tables, and other objects         |
| **Stage**           | A pointer to an external data source (S3, Azure, GCP)            |
| **File Format**     | Defines how data files are structured (CSV, JSON, Parquet, etc.) |
| **COPY INTO**       | Command to load data from a stage into a Snowflake table         |
| **AWS Credentials** | Secure authentication for accessing private S3 buckets           |

---

## 📊 Example Use Case

- Loading **financial data** (e.g., Tesla stock prices) from AWS S3.
- Automating **ETL (Extract, Transform, Load)** pipelines into Snowflake.
- Enabling **data analytics** and **business intelligence** dashboards.

---

## ⚙️ Troubleshooting

| Issue                   | Possible Cause          | Solution                                     |
| ----------------------- | ----------------------- | -------------------------------------------- |
| `SQL compilation error` | Incorrect syntax        | Double-check your SQL structure              |
| `Cannot access stage`   | Invalid AWS credentials | Recheck `AWS_KEY_ID` and `AWS_SECRET_KEY`    |
| `No data loaded`        | Incorrect file path     | Ensure the S3 path and file name are correct |

---

## 📚 References

- [Snowflake Documentation: COPY INTO Command](https://docs.snowflake.com/en/sql-reference/sql/copy-into-table)
- [Snowflake Stages](https://docs.snowflake.com/en/user-guide/data-load-local-file-system-create-stage)
- [AWS S3 Documentation](https://docs.aws.amazon.com/AmazonS3/latest/userguide/Welcome.html)

---

## 🧑‍💻 Author

**Ahad Khan**
Cloud Data Engineering Enthusiast
📍 _Snowflake x AWS Integration Project_

---

### ⭐ If you found this helpful, consider giving it a star!
