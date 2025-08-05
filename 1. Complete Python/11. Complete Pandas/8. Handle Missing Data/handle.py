# How to detect missing data

import pandas as pd

data = {
  "Name": ['Abdul', None, 'Huzaifa', 'Wakeel', 'Subhan', 'Arqam', 'Ubaid', 'Hanzala'],
  "Age": ['19', None, '28', '34', '21', '19', '20', '19'],
  "Salary": [200000, None, 70000, 40000, 80000, 100000, 100000, 100000],
  "Performance": ['90','' , '60', '30', '80', '95', '90', '90'],
}


df = pd.DataFrame(data)
print(df)


df.dropna(inplace=True)
print(df)


# if you use axis=0 this property is use for drop missing row & axis=1 remove column