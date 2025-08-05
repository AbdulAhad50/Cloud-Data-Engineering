import pandas as pd #! imports pandas using alias


try:
 df = pd.read_csv(r'C:\Users\Administrator\Desktop\Cloud Data Engineering\1. Complete Python\11. Complete Pandas\sales_data_sample.csv')
 print(df)
except(UnicodeDecodeError) as e:
 print('File Throw Encoding Error UnicodeDecodeError')






#? if you load the csv file using pandas python will raise this error
#! ❌ Error Message: UnicodeDecodeError: 'utf-8' codec can't decode byte ... 


#? 🧠 Iska Matlab (Simple Roman Urdu mein):
#! Python jab CSV file read karta hai, to wo soch raha hai ke file UTF-8 format mein likhi gayi hai.
#! Lekin file ke andar kuch aise characters hain jo UTF-8 mein valid nahi hain, is liye Python confuse ho gaya aur error de diya.


#?  Yeh Error Kyun Aata Hai?
#* Tumhari file UTF-8 encoding mein nahi hai

#* File kisi aur encoding mein likhi gayi hai (jaise latin1, cp1252, ISO-8859-1)

#* File mein special ya unknown characters hain (e.g., £, é, –)


#? ✅ Solution (Asaan Tarike):
#? 1️⃣ Encoding specify karo read_csv() ke andar


# df = pd.read_csv(r'C:\Users\Administrator\Desktop\Cloud Data Engineering\1. Complete Python\11. Complete Pandas\sales_data_sample.csv') ❌


print(f'\n\nUse encoding property in read_csv method\n\nSuccessFully Run')

df = pd.read_csv(r'C:\Users\Administrator\Desktop\Cloud Data Engineering\1. Complete Python\11. Complete Pandas\sales_data_sample.csv', encoding='latin1') # ✅


print(df)

#! How to Read Excel file

print('\n\nRead Excel File')
df_xlsx = pd.read_excel(r'C:\Users\Administrator\Desktop\Cloud Data Engineering\1. Complete Python\11. Complete Pandas\SampleSuperstore.xlsx') # ✅

#? if you load excel file it is possible python raise this error: 
#! ModuleNotFoundError: No module named 'xlrd'

#? How to solve this error?
#! paste this command in terminal:
#* -> pip install xlrd

print(df_xlsx)


#! How to Read Json file



print('\n\nRead Json File')

df_json = pd.read_json(r'C:\Users\Administrator\Desktop\Cloud Data Engineering\1. Complete Python\11. Complete Pandas\sample_Data.json') # ✅

print(df_json)