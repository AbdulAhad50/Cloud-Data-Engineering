
#! r mode 
'''
🔹 1. 'r' – Read Mode
✅ Purpose: File ko sirf read karna
🔒 Restriction: File already exist honi chahiye
🔁 File pointer: Start (0) position se
🧠 Example:
'''


with open('demo.txt', 'r') as file:
  # file.write('This file Create a First Time')
  print(file.read())


'''
📌 Notes:
Agar file exist nahi karti, FileNotFoundError aayega.

Sirf text files ke liye use hota hai.

Read-only hai — write allowed nahi.

Roman Urdu: Ye mode file se data nikalne ke liye use hota hai. File agar nahi mili tou error dega.'''



'''
🔹 2. 'w' – Write Mode
✅ Purpose: File mein naya data likhna
💣 Danger: File agar pehle se exist karti ho, purana data delete ho jata hai
🆕 Behavior: File exist na ho tou nayi banata hai
'''

with open('demo.txt', 'w') as file:
  file.write('This file Create a First Time')
  print(file.read())


'''
📌 Notes:
File overwrite hoti hai.

File agar nahi ho tou create ho jati hai.

Sirf write — read allowed nahi.

Roman Urdu: Ye mode purani file hata ke nayi file banata hai aur usmein likhta hai. File ka data chala jata hai.'''


'''🔹 3. 'a' – Append Mode
✅ Purpose: File ke end mein data add karna
🆓 Safety: Purana data delete nahi hota
➕ Behavior: File nahi ho tou create kar deta hai
🧠 Example:'''


file = open("data.txt", "a")
file.write("\nNew Line")
file.close()

'''
📌 Notes:
Data hamesha end mein add hota hai.

File automatically create ho jati hai agar exist nahi karti.

Roman Urdu: Is mode mein data file ke akhir mein chipak jata hai, purana data safe rehta hai.'''


'''🔹 4. 'x' – Exclusive Creation Mode
✅ Purpose: Sirf nayi file banana
🚫 Restriction: File agar pehle se ho, error dega
🔐 Security: Prevents overwriting
🧠 Example:'''


file = open("newfile.txt", "x")
file.write("Only if not exists")
file.close()


'''📌 Notes:
Agar file pehle se hai, FileExistsError throw karta hai.

Useful for secure file creation.

Roman Urdu: Ye mode tab use karo jab file nayi ho aur overwrite bilkul nahi chahiye.'''


'''
🔹 5. 'b' – Binary Mode (as suffix)
✅ Purpose: Binary data (images, videos, PDFs) read/write
❌ Not for: Text data
🧠 Example:
'''

file = open("image.png", "rb")
binary_data = file.read()
file.close()


'''
📌 Notes:
b hamesha r/w/x/a ke sath lagta hai (rb, wb, etc.)

File ke content ko bytes ke form mein treat karta hai.

Roman Urdu: Jab aapko image ya koi non-text file read/write karni ho tou binary mode use karo.'''


'''
🔹 6. 't' – Text Mode (Default)
✅ Purpose: Text read/write
🔄 Default Mode: Agar kuch na likho, default t hota hai
🧠 Example:
'''

file = open("data.txt", "rt")  # Same as "r"

'''📌 Notes:
Text mode mein strings deal hoti hain.

Line endings \n ko handle karta hai automatically.

Roman Urdu: Ye default hota hai jab aap text file read/write karte ho. Text properly dikhata hai.'''


'''🔹 7. '+' – Read + Write Combined Mode
Ye mode kisi aur mode ke sath use hota hai: r+, w+, a+.'''

# 🔸 .'r+' – Read & Write (file must exist)

file = open("data.txt", "r+")
print(file.read())
file.write("\nNew Text")
file.close()

'''
  Roman Urdu: File ko read bhi karta hai aur phir likh bhi sakta hai. Lekin file already exist honi chahiye.
'''




'''🔸 
'w+' – Write & Read (overwrite old content)
'''
file = open("data.txt", "w+")
file.write("Start fresh")
file.seek(0)
print(file.read())
file.close()

# Roman Urdu: File ko reset karta hai, read aur write dono allow karta hai. Purana data chala jata hai.


'''
🔸 'a+' – Append & Read (read + end mein likhna)
'''
file = open("data.txt", "a+")
file.write("\nAdded")
file.seek(0)
print(file.read())
file.close()

# Roman Urdu: File ke end mein data chipkata hai, read bhi kar sakte ho. Safe hai purane data ke liye.

#? 🔚 Summary Table

'''
| Mode   | Read | Write | Create | Overwrite | Append | Notes                |
| ------ | ---- | ----- | ------ | --------- | ------ | -------------------- |
| `'r'`  | ✅    | ❌     | ❌      | ❌   | ❌     | File must exist      |
| `'w'`  | ❌    | ✅     | ✅      | ✅   | ❌     | Overwrites existing  |
| `'a'`  | ❌    | ✅     | ✅      | ❌   | ✅     | Appends to end       |
| `'x'`  | ❌    | ✅     | ✅      | ❌   | ❌     | Error if file exists |
| `'r+'` | ✅    | ✅     | ❌      | ❌   | ❌     | Read then write      |
| `'w+'` | ✅    | ✅     | ✅      | ✅   | ❌     | Clears file          |
| `'a+'` | ✅    | ✅     | ✅      | ❌   | ✅     | Append + Read        |
| `'b'`  | —     | —       | —       | —         | —      |  Use with `r/w/a/x`   |
| `'t'`  | —     | —       | —      | —         | —      | Default mode         |'''
