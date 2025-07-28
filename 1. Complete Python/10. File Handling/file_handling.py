
#! 🔹 1. Introduction to File Handling
#? 1. File handling Python mein allow karta hai ke hum text ya binary files ke sath read, write, update aur delete operations perform karein.

#? 2. Python ka built-in open() function file ko open karta hai aur file object return karta hai.'''

#? 3. Syntax: file = open("filename", "mode")



#! 🔹 2. File Modes (Bahut Important 🔥)

'''
| Mode  | Full Form    | Use Case                  | Description                      |
| ----- | ------------ | ------------------------- | -------------------------------- |
|  'r'  | Read         | File read karni ho        | Agar file nahi hai, error dega   |
|  'w'  | Write        | File write karni ho       | Purani file overwrite karega     |
|  'a'  | Append       | File mein end se likhna   | Naye content ko add karega       |
|  'x'  | Create       | Nayi file create karni ho | Agar file pehle se hai tou error |
|  'b'  | Binary       | Binary file read/write    | e.g., images, PDFs               |
|  't'  | Text         | Text file (default)       | Human-readable                   |
|  '+'  | Read + Write | Dono operation chahiyen   | e.g., `r+`, `w+`, `a+`           |
'''


#! 🔹 3. Read Modes Detailed
#? ✅ 'r' Mode (Read Only)

file = open("data.txt", "r")
content = file.read()
print(content)
file.close()

#* Roman Urdu: Agar file exist nahi karti, error ayega.

#? ✅ 'rb' Mode (Read Binary)

file = open("image.png", "rb")
bytes_data = file.read()
# print(bytes_data)
file.close()
#* Roman Urdu: Image, audio, video files ke liye use hota hai.

#! 🔹 4. Write Modes Detailed
#? ✅ 'w' Mode (Write)

file = open("data.txt", "w")
file.write("Hello World")
file.close()
#* Roman Urdu: Agar file exist karti hai tou saara content overwrite karega.


#? ✅ 'wb' Mode (Write Binary)


file = open("binaryfile.bin", "wb")
file.write(b"01010101")
file.close()




#! 🔹 5. Append Modes Detailed
#? ✅ 'a' Mode (Append)


file = open("data.txt", "a")
file.write("\nNew Line Added")
file.close()
#* Roman Urdu: Purani file mein naye data ko add karega bina delete kiye.

#? ✅ 'ab' Mode (Append Binary)

file = open("binaryfile.bin", "ab")
file.write(b"\n010101")
file.close()


#! 🔹 6. Read + Write Modes
#? ✅ 'r+' Mode

file = open("data.txt", "r+")
print(file.read())
file.write("\nNew Line Added")
file.close()

#* Roman Urdu: Pehle read karega, phir write bhi kar sakta hai.


#? ✅ 'w+' Mode

file = open("data.txt", "w+")
file.write("New Content")
file.seek(4)
# print(file.read())
file.close()
#* Roman Urdu: Purani file delete karega, phir read/write dono karega.



#? ✅ 'a+' Mode

file = open("data.txt", "a+")
file.write("\nAppended Content")
file.seek(0)
print(file.read())
file.close()

#* Roman Urdu: Append karega aur read bhi allow karega.



#! 🔹 8. Context Manager (with)

with open("data.txt", "r") as file:
    print(file.read())
    
#* Roman Urdu: with block khatam hone pe file automatically close ho jati hai.

#! 🔹 10. Extra Concepts
#? ✅ seek() and tell()


file = open("data.txt", "r")
print(file.tell())     # 0
data = file.read(5)
print(data)
print(file.tell())     # 5
file.seek(0)
file.close()



#! 🔹 11. Binary File Handling Example

# Copy binary file
with open("image.png", "rb") as f1, open("copy.png", "wb") as f2:
    f2.write(f1.read())


'''🔹 12. Best Practices ✅
Hamesha with statement use karo

File exist karti hai ya nahi — check karo (os.path.exists)

Binary mode sirf non-text files ke liye

Har file close karna ya with use karna zaroori hai

Large files ke liye readline() ya read(size) use karo


'''