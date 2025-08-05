# Adding Colunms

import pandas as pd

data = {
  "Name": ['Abdul', 'Fahad', 'Huzaifa', 'Wakeel', 'Subhan', 'Arqam', 'Ubaid', 'Hanzala'],
  "Age": ['19', '24', '28', '34', '21', '19', '20', '19'],
  "Salary": [200000, 50000, 70000, 40000, 80000, 100000, 100000, 100000],
  "Performance": ['90', '50', '60', '30', '80', '95', '90', '90'],
}


df = pd.DataFrame(data)
print(df)

#! Adding Colunm starigth forward way
df['Bonus'] = df['Salary'] * 0.1
print(df)

#! Using Insert Method
df.insert(0, 'Employee ID', [1001,1002,1003,1004,1005,1006,1007,1008])
print(df)
