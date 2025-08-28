# how to check shape size & type means which type of data are store in the array
import numpy as np

#! 1. Check shape

shape1 = np.array([4.8,5.0,6.2]) # 1d array
print(shape1.shape)

shape2 = np.array([[4,5,6],[2,35,5]]) # 2d array
print('\n',shape2.shape)

shape3 = np.array([[[4,5.0],[3,'5'],[6,8],[4,5]],[[4,5],[3,5],[6,8],[4,5]]]) # 3d array
print('\n',shape3.shape)



# check size of numpy array

print(shape1.size)
print(shape2.size)
print(shape3.size)



# check the dimension of numpy array using ndim method

print('shape1 = ', shape1.ndim)
print('shape2 = ', shape2.ndim)
print('shape3 = ', shape3.ndim)


# how to check the data type of numpy array

print('data type of numpy array -> ', shape3.dtype)


# type conversion of numpy array using -> astype method

n_array = shape1.astype(int)
print(shape1)
print(n_array)


