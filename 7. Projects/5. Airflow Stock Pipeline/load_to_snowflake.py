import snowflake.connector
from snowflake.connector.pandas_tools import write_pandas
import os
import pandas as pd
from dotenv import load_dotenv

# Load environment variables
load_dotenv()

def load_to_snowflake(df):
    conn = snowflake.connector.connect(
        user=os.getenv("SNOWFLAKE_USER"),
        password=os.getenv("SNOWFLAKE_PASSWORD"),
        account=os.getenv("SNOWFLAKE_ACCOUNT"),
        warehouse=os.getenv("SNOWFLAKE_WAREHOUSE"),
        database=os.getenv("SNOWFLAKE_DATABASE"),
        schema=os.getenv("SNOWFLAKE_SCHEMA")
    )

    df.columns = [col.strip().upper() for col in df.columns]

    if 'DATE' in df.columns:
        df = df.rename(columns={'DATE': 'TRADE_DATE'})

    df['TRADE_DATE'] = pd.to_datetime(df['TRADE_DATE'], errors='coerce')
    float_cols = ['OPEN','HIGH','LOW','CLOSE','VOLUME','CLOSE_CHANGE','CLOSE_PCT_CHANGE']
    for col in float_cols:
        if col in df.columns:
            df[col] = pd.to_numeric(df[col], errors='coerce')

    cs = conn.cursor()
    try:
        cs.execute("""
        CREATE TABLE IF NOT EXISTS STOCK_PRICES (
            "TRADE_DATE" DATE,
            "OPEN" FLOAT,
            "HIGH" FLOAT,
            "LOW" FLOAT,
            "CLOSE" FLOAT,
            "VOLUME" FLOAT,
            "SYMBOL" STRING,
            "CLOSE_CHANGE" FLOAT,
            "CLOSE_PCT_CHANGE" FLOAT
        )
        """)

        success, nchunks, nrows, _ = write_pandas(conn, df, "STOCK_PRICES")

        if success:
            print(f"Data loaded successfully! {nrows} rows inserted.")
        else:
            print("write_pandas returned failure.")
    except Exception as e:
        print(f"Snowflake load failed: {e}")
    finally:
        cs.close()
        conn.close()


# Load CSV and run the loader
df = pd.read_csv('./stock_data_20251021012451.csv', low_memory=False)
load_to_snowflake(df)
