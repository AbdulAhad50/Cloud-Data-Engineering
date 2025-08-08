import pandas as pd 

data = pd.read_excel(r'C:\Users\Administrator\Desktop\Cloud Data Engineering\7. Projects\1. Python Project\1. Project 1\student_marks_data.xlsx')
print(data)
total_marks = 400

obtained_marks = data['Math'] + data['Science'] + data['English'] + data['Computer']
percentage = obtained_marks * 100 / total_marks
Pass_or_Fail = []

for result in (percentage > 50 ):
  if result:
    Pass_or_Fail.append('Pass')
  else:
    Pass_or_Fail.append('Fail')

fail_pass_student = pd.DataFrame(Pass_or_Fail)

student_file = {
  'dATA':[]
}

df = pd.DataFrame(student_file)
average = pd.DataFrame(list(data.describe().mean()))
print(average)

df['total_marks'] = total_marks
df['obtained_marks'] = obtained_marks
df['percentage'] = percentage
df['fail_pass_student'] = fail_pass_student
df['average'] = pd.DataFrame([data['Math'].sum() / 10, data['Science'].sum() / 10, data['English'].sum() / 10, data['Computer'].sum() / 10])

df.to_excel('student_file.xlsx', index=False)




