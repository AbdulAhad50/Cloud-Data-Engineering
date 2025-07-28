'''✅ Chapter 3 – Strings
Strings text data ko store karta hai. Python mein string immutable hoti hai.'''

# String Methods:

name = "Ahad"
print(name.upper())     # AHAD
print(name.lower())     # ahad
print(name[0:2])        # Ah
'''✅ Chapter 3 – Practice Set
String slice karna.'''
f = name[2:-1]

print(f)


'''String methods (like replace(), strip(), find()) use karna.'''

print(name.find('d'))
print(name.replace('d', ' '))
print(name.replace('d', ' ').strip())
'''Escape characters ka use \n, \t.'''
print('Hi i am \n\'A.Ahad \t \\')