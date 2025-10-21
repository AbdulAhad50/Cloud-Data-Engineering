import pandas as pd
import yfinance as yf
import time
import requests
from io import StringIO
from datetime import datetime


SP500_URL = 'https://en.wikipedia.org/wiki/List_of_S%26P_500_companies'

def get_sp500_tickers():
    headers = {"User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64)"}
    response = requests.get(SP500_URL, headers=headers)
    if response.status_code != 200:
        raise Exception(f"Failed to fetch data: {response.status_code}")
    tables = pd.read_html(StringIO(response.text))
    return tables[0]['Symbol'].tolist()


def fetch_yfinance_data(symbols, start_date, end_date, interval='1d'):
    results = {}
    for symbol in symbols:
        try:
            df = yf.download(
                tickers=symbol,
                start=start_date,
                end=end_date,
                interval=interval,
                progress=False,
                ignore_tz=True
            )
            if not df.empty:
                results[symbol] = df
            time.sleep(1)
        except Exception as e:
            print(f"{symbol} fetch error: {e}")
    return results



def transform_data(df, symbol):
    df = df.reset_index()
    df["symbol"] = symbol
    df['close_change'] = df['Close'].diff().fillna(0)
    df['close_pct_change'] = df['Close'].pct_change().fillna(0) * 100
    return df[['Date', 'Open', 'High', 'Low', 'Close', 'Volume', 'symbol', 'close_change', 'close_pct_change']]


if __name__ == "__main__":
    tickers = get_sp500_tickers()[0:]
    stock_data = fetch_yfinance_data(
        symbols=tickers,
        start_date="2024-01-01",
        end_date="2024-01-31",
        interval="1d"
    )

    current_time = datetime.now().strftime("%Y%m%d%H%M%S")
    print(current_time)

    all_data = []
    for symbol, df in stock_data.items():
        transformed = transform_data(df, symbol)
        all_data.append(transformed)

    print(len(all_data))
    
    final_df = pd.concat(all_data)
    final_df.to_csv(F'stock_data_{current_time}.csv',index=False)
