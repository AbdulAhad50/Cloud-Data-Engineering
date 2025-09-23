import numpy as np
arrayData = np.array([1,2,3,4,5])


# fancy indexing means select multiple elements at ones
print(arrayData[[1,3,0]])


shape2 = np.array([[4,5,6],[2,35,5]]) # 2d array

print('\nshape2',shape2[[0][0]][[0,1]],[[1][0]])

shape3 = np.array([[[4,5.0],[3,'5'],[6,8],[4,5]],[[4,5],[3,5],[6,8],[4,5]]]) # 3d array
print('\n',shape3.shape)