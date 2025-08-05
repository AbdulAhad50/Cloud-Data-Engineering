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

# if You Want Remove Data from Real Dataset use inplace=True
# df.drop(columns=['Performance'],inplace=True)
# print(df)


# if You Want Not Remove Data from Real Dataset use inplace=False
duplicate_data = df.drop(columns=['Performance'],inplace=False)
print(duplicate_data)

# Remove Multiple columns
remove_multiple_columns = df.drop(columns=['Performance','Age'],inplace=False)
print(duplicate_data)