import pandas as pd

data = {
  "Name" : ['Jhon', 'Albert', 'Doe'],
  "Age" : ['34', '20', '45'],
  "city" : ['NewYork', 'washington dc', 'NewYork'],
}


dt = pd.DataFrame(data)
print(dt)

# dt.to_csv('Output.csv')
# dt.to_csv('Output.csv',index=False) #! if you want to remove indexing so you will pass this parameter in to_csv method: index=False


#? if you want to save data in excel file 
# dt.to_excel('Output.xlsx',index=False) 

#? if you want to save data in json file 
dt.to_json('Output.json',index=False) 