import numpy as np

data = np.zeros(3)
print(data)


#! one method

ones = np.ones((2,3))
print(ones)  


# specific value of number

filledArray = np.full((2,3),8)
print(filledArray)  


# creating a sequence of number using arrange method


# arrang(start, stop, step)
arrangeOfRange = np.arange(0,11,2)
print(arrangeOfRange)



# creating identity of metrices 

# using eye(n) method

identity = np.eye(3)
print(identity)

