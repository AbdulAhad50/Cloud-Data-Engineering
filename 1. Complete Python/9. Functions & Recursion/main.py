'''✅ Chapter 8 – Functions & Recursion
1. Functions
Reusable block of code.'''


def greet(name):
    return f"Hello {name}"

print(greet("Ahad"))

'''2. Recursion
Function ka apne aap ko call karna.'''

def factorial(n):
    if n == 1:
        return 1
    
    # data = f'{n} * {factorial(n - 1)}'
    # print(data)
    return n * factorial(n - 1)

print(factorial(5))
''' Chapter 8 – Practice Set
Function likhna jo even/odd check kare.'''



'''Recursive factorial ya fibonacci.'''

'''Default aur keyword arguments.'''