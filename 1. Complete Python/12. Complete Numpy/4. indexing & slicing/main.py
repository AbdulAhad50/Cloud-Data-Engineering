
#! indexing in numpy array 

import numpy as np
arrayData = np.array([1,2,3,4,5])
arrayData2 = np.array([[1,2,3,4,5],[6,7,8,9,10]]) 

print(arrayData2) # 1d array indexing arrayData[column index]
print(arrayData2[0,3]) #2d array indexing arrayData[row index, column index]


#! slicing


# slicing -> [start, stop, step]
# [1,2,3,4,5]
print('Slicing', arrayData[1:])
print('Slicing', arrayData[0:4]) 
print('Slicing', arrayData[0:4:2]) 
print('Slicing', arrayData[:4:2]) 
print('Slicing', arrayData[-5:-2:2])