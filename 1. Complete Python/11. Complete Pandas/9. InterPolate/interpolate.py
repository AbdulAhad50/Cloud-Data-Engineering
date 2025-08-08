import pandas as pd

data = {
  "Name": ['Abdul', None, 'Huzaifa', 'Wakeel', 'Subhan', 'Arqam', 'Ubaid', 'Hanzala'],
  "Age": [10, None, 30, 40, None, 60, 70, None],
  "Salary": [200000, None, 70000, 40000, 80000, 100000, 100000, 100000],
  "Performance": ['90',None , '60', '30', '80', '95', '90', '90'],
}


df = pd.DataFrame(data)
print(df)
print('-'*50)

df['Age'] = df['Age'].interpolate(method='linear')
print(df)


'''
1- Work With Series 
2- Numeric Data With Trends 
3- avoid dropping rows
'''


