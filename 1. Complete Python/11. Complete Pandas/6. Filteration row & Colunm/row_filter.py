import pandas as pd

data = {
  'Name' : ['Abdul Ahad', 'Ahmed', 'Ali'],
  'Age' : [19,40,30],
  'Salary' : [100000, 40000, 50000]
}


df = pd.DataFrame(data)

salary = df[(df['Salary'] < 50000) | (df['Age'] < 30)]
print(salary)
 