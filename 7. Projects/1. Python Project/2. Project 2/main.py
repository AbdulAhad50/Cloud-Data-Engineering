# import pandas as pd

# data = pd.read_csv(r'C:\Users\Administrator\Desktop\Cloud Data Engineering\7. Projects\1. Python Project\2. Project 2\sales_data.csv')

# # print(data.describe())

# SalesDataSummaryTool = {}


# SalesDataSummaryTool['total_sales'] = list(data['Units Sold']  * data['Price per Unit'])
# GroupbySales = pd.DataFrame(data.groupby('Category')['Units Sold'].sum() * data.groupby('Category')['Price per Unit'].sum()) 

# topSellingProduct = data.groupby('Product')['Units Sold'].sum().idxmax()
# averageDaySale =  data.groupby('Date')['Units Sold'].sum() * data.groupby('Category')['Price per Unit'].sum().mean()

# dataAnalyze = pd.DataFrame(SalesDataSummaryTool)
# dataAnalyze.to_excel('SalesDataSummaryTool.xlsx',index=False)

# print(averageDaySale)



import pandas as pd

# Step 1: Load CSV file
data = pd.read_csv(r'C:\Users\Administrator\Desktop\Cloud Data Engineering\7. Projects\1. Python Project\2. Project 2\sales_data.csv')

# Step 2: Calculate total sales per row
data['Total Sale'] = data['Units Sold'] * data['Price per Unit']

# Step 3: Category-wise total sales
category_sales = data.groupby('Category')['Total Sale'].sum()

# Step 4: Top selling product by units sold
top_selling_product = data.groupby('Product')['Units Sold'].sum().idxmax()

# Step 5: Daily average sale (in terms of amount)
average_day_sale = data.groupby('Date')['Total Sale'].sum().mean()

# Step 6: Create summary dictionary
SalesDataSummaryTool = {
    'Category Sales': category_sales.to_dict(),
    'Top Selling Product': top_selling_product,
    'Average Daily Sale': average_day_sale
}

# Step 7: Save detailed data to Excel
data.to_excel('SalesDataSummaryTool.xlsx', index=False)

# Step 8: Print summary
print("Sales Data Summary:")
print(SalesDataSummaryTool)
