import pandas as pd

data = pd.read_csv(r'sales_data.csv')
# print(data)

new_file = {}

new_file['totalSale'] = list(data['Units Sold'] * data['Price per Unit'])

Category_wise_total_sales = list(
  (data.groupby('Category')['Units Sold'].sum()) * (data.groupby('Category')['Price per Unit'].sum())
  ) 

new_file['Category_wise_total_sales'] = pd.DataFrame(Category_wise_total_sales)

# print(Category_wise_total_sales)

pd.DataFrame(new_file).to_excel('Sales Data Summary Tool.xlsx', index=False)

# Category_wise_total_sales = data.groupby('Category')
# print('....',Category_wise_total_sales)