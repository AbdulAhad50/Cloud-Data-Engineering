import pandas as pd
import yfinance as yf
import snowflake.connector
from snowflake.connector.pandas_tools import write_pandas
import requests
from datetime import datetime
import os


# Snowflake credentials
snowflake_creds = {
    "user": "ABDULAHAD",
    "password": "Makhan50@123456789",
    "account": "NZBLLEJ-ZM86882",
    "warehouse": "COMPUTE_WH",
    "database": "SP_500_STOCK_DATA",
    "schema": "PUBLIC",
    "role": "ACCOUNTADMIN"

}

def load_csv_to_snowflake(filename, snowflake_creds):
    """
    Simplified version that copies file to current directory first
    """
    conn = None
    cursor = None
    try:
        # Copy file to current directory to avoid path issues
        import shutil
        current_dir_file = os.path.basename(filename)
        if not os.path.exists(current_dir_file):
            shutil.copy2(filename, current_dir_file)
            print(f"Copied {filename} to {current_dir_file}")
        
        conn = snowflake.connector.connect(**{
            k: v for k, v in snowflake_creds.items() 
            if v is not None
        })
        cursor = conn.cursor()

        print("Connected to Snowflake.")

        cursor.execute("USE DATABASE SP_500_STOCK_DATA;")
        print("USE DATABASE SP_500_STOCK_DATA")

        # cursor.execute("DROP TABLE SP500_PRICES;")
        print("DROP TABLE SP500_PRICES;")

        # cursor.execute("CREATE SCHEMA IF NOT EXISTS staging;")
        # print("CREATE SCHEMA IF NOT EXISTS staging;")

        # cursor.execute("USE SCHEMA staging;")
        # print("USE SCHEMA staging;")

        # Create table
        cursor.execute("""
        CREATE OR REPLACE TABLE SP500_PRICES (
            DATE DATE,
            OPEN FLOAT,
            HIGH FLOAT,
            LOW FLOAT,
            CLOSE FLOAT,
            VOLUME FLOAT,
            SYMBOL STRING,
            CLOSE_CHANGE FLOAT,
            CLOSE_PCT_CHANGE FLOAT
        );
        """)
        print("Table SP500_PRICES is ready.")
    

        # Create temporary stage
        cursor.execute("CREATE OR REPLACE STAGE my_stage;")
        print("Temporary stage created.")

        # Use simple filename in current directory
        put_cmd = f"PUT 'file:///C:/Users/Administrator/Desktop/Cloud Data Engineering/7. Projects/5. Airflow Stock Pipeline/stock_data_20251021012451.csv' @my_stage AUTO_COMPRESS=TRUE;"
        print(f"Executing: {put_cmd}")
        cursor.execute(put_cmd)
        print(f"Uploaded {current_dir_file} to stage.")

        # Copy data
        copy_cmd = f"""
        COPY INTO SP500_PRICES
        FROM @my_stage/{current_dir_file}.gz
        FILE_FORMAT = (TYPE = 'CSV' FIELD_OPTIONALLY_ENCLOSED_BY='"' SKIP_HEADER = 1)
        ON_ERROR = 'CONTINUE';
        """

        cursor.execute(copy_cmd)
        print("Data copied into SP500_PRICES.")

        # Verify
        cursor.execute("SELECT COUNT(*) FROM SP500_PRICES;")
        result = cursor.fetchone()

        print(f"Total rows loaded: {result[0]}")

    except Exception as e:
        print(f"Snowflake load failed: {e}")
        import traceback
        print(f"Detailed error: {traceback.format_exc()}")

    finally:
        if cursor:
            cursor.close()
        if conn:
            conn.close()
        print("Connection closed.")

if __name__ == "__main__":
    load_csv_to_snowflake('./stock_data_20251021012451.csv',snowflake_creds)

    # Transform, save & upload
    