# Updating Colunms

import pandas as pd

data = {
  "Name": ['Abdul', 'Fahad', 'Huzaifa', 'Wakeel', 'Subhan', 'Arqam', 'Ubaid', 'Hanzala'],
  "Age": ['19', '24', '28', '34', '21', '19', '20', '19'],
  "Salary": [200000, 50000, 70000, 40000, 80000, 100000, 100000, 100000],
  "Performance": ['90', '50', '60', '30', '80', '95', '90', '90'],
}


df = pd.DataFrame(data)
print(df)

# .loc 
# df.loc[row_index,column_name, updating_value]
df.loc[1,'Salary'] = 90000
print(df)