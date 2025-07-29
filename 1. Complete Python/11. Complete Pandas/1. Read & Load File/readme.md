# 📊 Reading Files with Pandas (CSV, Excel, JSON)

This Python script demonstrates how to read different types of data files using the Pandas library. It also includes common errors and their easy solutions, especially related to encoding and dependencies.

---

## 📦 Requirements

Make sure the following libraries are installed:

```bash
pip install pandas
pip install xlrd  # Required for reading Excel files
```

---

## 🗂️ Overview: File Reading in Pandas

### ✅ Reading a CSV File

```python
import pandas as pd

try:
    df = pd.read_csv(r'path_to_your_file.csv')
    print(df)
except(UnicodeDecodeError):
    print('File Throw Encoding Error UnicodeDecodeError')
```

#### ❌ Common Error:

```
UnicodeDecodeError: 'utf-8' codec can't decode byte ...
```

#### 💡 Why This Happens:

- By default, Python tries to read CSV files as UTF-8.
- If the file is in a different encoding (e.g., `latin1`, `cp1252`, `ISO-8859-1`) or contains special characters (e.g., £, é, –), it causes a `UnicodeDecodeError`.

#### ✅ Solution:

Explicitly specify the encoding:

```python
df = pd.read_csv(r'path_to_your_file.csv', encoding='latin1')
```

---

### ✅ Reading an Excel File

```python
df_xlsx = pd.read_excel(r'path_to_your_file.xlsx')
```

#### ❌ Common Error:

```
ModuleNotFoundError: No module named 'xlrd'
```

#### ✅ Solution:

Install the required package:

```bash
pip install xlrd
```

---

### ✅ Reading a JSON File

```python
df_json = pd.read_json(r'path_to_your_file.json')
print(df_json)
```

---

## 📁 File Path Tips

- Use **raw string syntax** like `r'C:\path\to\file.csv'` to avoid escape character issues on Windows.
- Ensure your files exist at the specified locations.

---

## 📌 Summary

| File Type | Function Used     | Common Issue                | Solution                 |
| --------- | ----------------- | --------------------------- | ------------------------ |
| CSV       | `pd.read_csv()`   | `UnicodeDecodeError`        | Use `encoding='latin1'`  |
| Excel     | `pd.read_excel()` | `ModuleNotFoundError: xlrd` | Install `xlrd`           |
| JSON      | `pd.read_json()`  | Rare                        | Usually works by default |

---

## ✅ Output Example

Once all files are read successfully, they will be printed to the console for inspection.

---

## 📍 Author

Written as part of a Cloud Data Engineering course.

```

---

Let me know if you want this customized for GitHub (with badges, logo, etc.) or converted into a `.md` file you can download.
```
