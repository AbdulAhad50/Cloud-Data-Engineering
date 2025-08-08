import pandas as pd

data = {
  "Name": ['Abdul', None, 'Huzaifa', 'Wakeel', 'Subhan', 'Arqam', 'Ubaid', 'Hanzala'],
  "Age": [10, None, 30, 40, None, 60, 70, None],
  "Salary": [200000, None, 70000, 40000, 80000, 100000, 100000, 100000],
  "Performance": ['90',None , '60', '30', '80', '95', '90', '90'],
}


df = pd.DataFrame(data)

# df.sort_values(by='Age', ascending=True, inplace=True)
print(df)

# If Sorting in multiple Columns Base
df.sort_values(by=['Age', 'Performance'], ascending=[True, True], inplace=True)
print(df)
