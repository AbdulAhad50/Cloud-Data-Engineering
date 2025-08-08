import pandas as pd


data = {
  "Name": ['Abdul', 'Ahmed', 'Huzaifa', 'Wakeel', 'Subhan', 'Arqam', 'Ubaid', 'Hanzala'],
  "Age": [19, 20, 28, 34, 21, 19, 20, 19],
  "Salary": [200000, 50000, 70000, 40000, 80000, 100000, 100000, 100000],
  "Performance": ['90',None , '60', '30', '80', '95', '90', '90'],
}


df = pd.DataFrame(data)
groupedBy = df.groupby(['Age','Name'])['Salary'].sum()
print(groupedBy)