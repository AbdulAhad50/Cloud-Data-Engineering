import pandas as pd

df = pd.read_excel('SampleSuperstore.xlsx')

print('\nStarting 5 rows\n')
head = df.head() #! only show starting 5 rows
print(head)

print('\n\nStarting 10 rows\n')
head_with_n_rows = df.head(10) #! show starting 10 rows
print(head_with_n_rows)


print('\nLast 5 rows\n')
tail = df.tail() #! only show last 5 rows
print(tail)

print('\n\nLast 10 rows\n')
tail_with_n_rows = df.tail(10) #! show last 10 rows
print(tail_with_n_rows)
