import pandas as pd

data = {
  'Name' : ['Abdul Ahad', 'Ahmed', 'Ali'],
  'Age' : [19,40,30],
  'Salary' : [100000, 40000, 50000]
}


df = pd.DataFrame(data)
# print(df)


# find or filter a column
name = df['Name'] #if you find single column pandas return a series
print(name,'\n')

# Multiple Column Select

multiple_cl = df[['Name', 'Salary']] #if you find single column pandas return a series
print(multiple_cl)
print('-' * 50, '\n')


# Filter a row