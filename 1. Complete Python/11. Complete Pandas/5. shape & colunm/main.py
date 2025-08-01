"""
if your data is big and you want to find how many rows & and colunm in your dataset & you want to check colunm name 
Use this property : shape & colunms

"""

import pandas as pd

data = pd.read_excel(r'C:\Users\Administrator\Desktop\Cloud Data Engineering\1. Complete Python\11. Complete Pandas\SampleSuperstore.xlsx')

print(data.shape)
# print(data.columns)

for data in data.columns:
  print(data)



# import pandas as pd

a = [1, 7, 2]

myvar = pd.Series(a)

print(myvar)