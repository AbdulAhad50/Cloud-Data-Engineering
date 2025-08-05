import pandas as pd

# data = pd.read_excel(r'C:\Users\Administrator\Desktop\Cloud Data Engineering\1. Complete Python\11. Complete Pandas\SampleSuperstore.xlsx')

# print('Displaying the info of dataSet\n')
# # print(data.info())

data2 = {
  "Name" : ['Jhon', 'Albert', 'Doe', ],
  "Age" : ['29','30','33'],
  "city" : ['NewYork', '', 'NewYork'],
}

data = {
  "Name" : ['Jhon', 'Albert', 'Doe', ],
  "Age" : [data2['Name'][0] + ' ' + data2['Age'][0], data2['Name'][1] + ' ' + data2['Age'][1], data2['Name'][2] + ' ' + data2['Age'][2]],
  "city" : ['NewYork', '', 'NewYork'],
}

dt = pd.DataFrame(data)
dt.to_excel('example.xlsx', index=False)
print(dt)
print(dt.info())

