# How to detect missing data

import pandas as pd

data = {
  "Name": ['Abdul', None, 'Huzaifa', 'Wakeel', 'Subhan', 'Arqam', 'Ubaid', 'Hanzala'],
  "Age": [19, None, 28, 34, 21, 19, 20, 19],
  "Salary": [200000, None, 70000, 40000, 80000, 100000, 100000, 100000],
  "Performance": ['90',None , '60', '30', '80', '95', '90', '90'],
}
                                                                  

df = pd.DataFrame(data)
print(df)

# df.fillna(0,inplace=True)
# print(df)


df['Salary'].fillna(df['Salary'].mean(), inplace=True)
df['Age'].fillna(df['Age'].mean(), inplace=True)
print(df)
