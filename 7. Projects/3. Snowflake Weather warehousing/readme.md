# ☁️ Snowflake Weather & Yelp Data Warehouse (ODS → DWH Pipeline)

## 📘 Overview

This project demonstrates a **complete Snowflake Data Warehousing pipeline** that ingests **raw weather and Yelp business data**, processes it through **staging and ODS layers**, and loads it into a **Dimensional Data Warehouse (DWH)** schema.

The goal is to showcase how data engineers design and implement **ETL/ELT pipelines** using **Snowflake**, focusing on:

* Building multi-layer architecture (Staging → ODS → DWH)
* Handling **CSV and JSON** data ingestion
* Designing **dimension and fact tables**
* Implementing **data transformations** using SQL

---

## 🏗️ Architecture Layers

| Layer                            | Description                                                                                |
| -------------------------------- | ------------------------------------------------------------------------------------------ |
| **Raw Data**                     | Contains unprocessed data from external sources like S3 (CSV/JSON files).                  |
| **Staging Layer**                | Temporary storage in Snowflake for raw files. Used for validation and structure alignment. |
| **ODS (Operational Data Store)** | Cleansed, structured layer where source data is standardized for downstream use.           |
| **DWH (Data Warehouse)**         | Optimized for analytics. Contains **Dimension** and **Fact** tables for reporting and BI.  |

---

## 🧩 Data Flow

```
Snowsql CLI
   ↓
Staging (raw_csv_to_stage.sql, raw_json_to_stage.sql)
   ↓
ODS (transformation from staging)
   ↓
DWH (ods_data_to_dwh.sql)
```

---

## 📂 Project Files

### 1. **raw_csv_to_stage.sql**

**Purpose:**
Loads raw weather data (Temperature & Precipitation) from CSV files into Snowflake staging tables.

**Key Steps:**

* Creates database: `data_design`
* Creates schema: `staging`
* Defines `csv_format` for consistent file parsing
* Creates stage: `csv_stage`
* Loads data into:

  * `lv_temperature`
  * `lv_precipitation`

**Sample Output Tables:**

| Table              | Description                      |
| ------------------ | -------------------------------- |
| `lv_temperature`   | Stores daily temperature metrics |
| `lv_precipitation` | Stores daily rainfall data       |

---

### 2. **raw_json_to_stage.sql**

**Purpose:**
Loads **Yelp dataset JSON files** into staging tables for transformation.

**Key Steps:**

* Defines `jsonformat` (for `strip_outer_array = true`)
* Creates Snowflake stage `json_stage`
* Creates variant-based tables for semi-structured data:

  * `yelp_academic_dataset_business`
  * `yelp_academic_dataset_checkin`
  * `yelp_academic_dataset_review`
  * `yelp_academic_dataset_user`
  * `yelp_academic_dataset_covid_features`
  * `yelp_academic_dataset_tip`
* Loads each dataset using `COPY INTO` from staged JSON files.

**Sample Extraction Query:**

```sql
SELECT
  recordjson:"business_id"::STRING AS business_id,
  recordjson:"name"::STRING AS name,
  recordjson:"city"::STRING AS city,
  recordjson:"stars"::FLOAT AS stars
FROM yelp_academic_dataset_business
LIMIT 10;
```

---

### 3. **ods_data_to_dwh.sql**

**Purpose:**
Implements the **transformation and loading** logic from ODS → DWH.
Creates **Dimension** and **Fact** tables following the **Star Schema model**.

**Steps:**

#### 🔹 Create DWH Schema

```sql
CREATE SCHEMA DWHH;
USE SCHEMA DWHH;
```

#### 🔹 Dimension Tables

| Table               | Description                                            |
| ------------------- | ------------------------------------------------------ |
| `DIM_CUSTOMER`      | Customer details such as name, stars, and review count |
| `DIM_TEMPERATURE`   | Weather-related temperature data                       |
| `DIM_PRECIPITATION` | Weather precipitation data                             |
| `DIM_BUSINESS`      | Business and geography details                         |

**Example:**

```sql
CREATE OR REPLACE TABLE DIM_CUSTOMER (
  customer_id STRING PRIMARY KEY,
  name STRING,
  average_stars DOUBLE,
  fans NUMBER,
  review_count NUMBER
);
```

#### 🔹 Fact Table

| Table  | Description                                                                             |
| ------ | --------------------------------------------------------------------------------------- |
| `FACT` | Central fact table linking business, customer, and weather information via foreign keys |

**Example:**

```sql
CREATE OR REPLACE TABLE FACT (
  fact_id STRING PRIMARY KEY,
  business_id STRING REFERENCES DIM_BUSINESS(business_id),
  customer_id STRING REFERENCES DIM_CUSTOMER(customer_id),
  date DATE REFERENCES DIM_TEMPERATURE(date),
  stars DOUBLE
);
```

**Data Population Example:**

```sql
INSERT INTO FACT
SELECT
  r."review_id",
  r."business_id",
  r."user_id",
  r."date",
  r."stars"
FROM data_design.ODS."REVIEW" AS r;
```

---

## 🧠 Concepts Covered

### 🏢 1. ODS (Operational Data Store)

* Acts as a **transitional layer** between staging and the data warehouse.
* Data in ODS is **cleansed, deduplicated, and standardized**.
* It ensures consistency across multiple data sources before analytical modeling.

### 🌤️ 2. Weather Data Integration

* Daily **temperature** and **precipitation** data are loaded from CSVs.
* Stored as **DIM_TEMPERATURE** and **DIM_PRECIPITATION** for correlation with business data.

### 🧾 3. Yelp Business & Review Data

* JSON datasets are ingested and normalized.
* Enables **business performance analysis** under different weather conditions.

### 🧮 4. Star Schema Modeling

* Designed for **efficient querying and analytics**.
* Dimensions: `CUSTOMER`, `BUSINESS`, `TEMPERATURE`, `PRECIPITATION`
* Fact: `FACT` (links all dimensions)

---

## ⚙️ Prerequisites

Before running the SQL scripts:

* A **Snowflake account** with access to create database, schema, and stages.
* A **Snowflake Warehouse** (e.g., `my_wh`).
* **Data files** uploaded to the stage paths mentioned in scripts:

  * CSV: `/USW00093134-LOS_ANGELES_DOWNTOWN_USC-precipitation-inch.csv.gz`
  * JSON: `/yelp_academic_dataset_business.json.gz`, etc.

---

## 🚀 Execution Order

1. **raw_csv_to_stage.sql** → load weather data
2. **raw_json_to_stage.sql** → load Yelp datasets
3. **ods_data_to_dwh.sql** → transform and load into DWH

---

## 📊 Example Analytics Queries

```sql
-- 1. Average review stars by city and temperature
SELECT
    b.city,
    t.max_temp,
    AVG(f.stars) AS avg_stars
FROM FACT f
JOIN DIM_BUSINESS b ON f.business_id = b.business_id
JOIN DIM_TEMPERATURE t ON f.date = t.date
GROUP BY b.city, t.max_temp
ORDER BY avg_stars DESC;

-- 2. Total reviews per precipitation level
SELECT
    p.precipitation,
    COUNT(f.fact_id) AS total_reviews
FROM FACT f
JOIN DIM_PRECIPITATION p ON f.date = p.date
GROUP BY p.precipitation;
```

---

## 🧰 Technologies Used

* **Snowflake Cloud Data Warehouse**
* **SQL (DDL, DML, DQL)**
* **Snowsql CLI**
* **CSV and JSON File Formats**
* **Dimensional Modeling (Star Schema)**

---

## 👨‍💻 Author

**Ahad Khan**
*Cloud Data Engineering | Snowflake | Next.js | AI Integration*

---