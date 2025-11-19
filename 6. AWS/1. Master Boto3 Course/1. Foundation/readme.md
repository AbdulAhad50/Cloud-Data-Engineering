
# 🚀 **DAY 1 — BOTO3 FOUNDATIONS (Zero to Start)**#Is day ka goal yeh hai ke tum samajh lo:

### ✔ Boto3 kya hota hai

### ✔ Client vs Resource difference

### ✔ AWS credentials kis tarah set hotay hain

### ✔ Boto3 install kaise hota hai

### ✔ Tumhara pehla Boto3 script (List S3 Buckets)

Ye foundation tumhein pure Boto3 journey mein help karegi.

---

# 🟦 **1. Boto3 Kya Hoti Hai? (Simple Roman Urdu Explanation)**

**Boto3 AWS ka Python SDK hota hai.**
Iska matlab:

➡ Python code likh kar tum AWS services ko control kar sakte ho.

Example:

* S3 bucket banani ho → Boto3 se
* File upload/download karni ho → Boto3 se
* EC2 instance start/stop karna ho → Boto3 se
* DynamoDB me data daalna ho → Boto3 se
* Glue jobs run karni ho → Boto3 se

Yani **AWS console kholne ki zaroorat hi nahi — sab Python se automate ho jata hai.**

---

# 🟦 **2. Client vs Resource (MOST IMPORTANT CONCEPT)**

Boto3 do tarah se services ko access karta hai:

## **A) Client — Low Level (Exact AWS API style)**

* Zyada detailed
* Har small step tumhein handle karna hota hai
* Zyada control deta hai

Example:

```python
s3_client = boto3.client("s3")
```

## **B) Resource — High Level (Easy & Pythonic)**

* Easy interface
* Less code
* Beginner-friendly

Example:

```python
s3_resource = boto3.resource("s3")
```

### **Simple Example Difference**

Client:

```python
s3_client.upload_file("local.txt", "mybucket", "file.txt")
```

Resource:

```python
s3 = boto3.resource("s3")
s3.Bucket("mybucket").upload_file("local.txt", "file.txt")
```

👉 **Resource easy hota hai**,
👉 **Client detailed & powerful hota hai**
Hum dono seekhenge.

---

# 🟦 **3. AWS Credentials Setup**

Boto3 ko AWS se connect karne ke liye 2 cheezen chahiye:

### 1) **Access Key ID**

### 2) **Secret Access Key**

Yeh tum IAM user me generate karte ho.

Phir command likhte ho:

```
aws configure
```

Aur enter karo:

```
AWS Access Key ID: <KEY>
AWS Secret Access Key: <SECRET>
Default region: ap-south-1
Output: json
```

Bas — Boto3 ready ho jata hai.

---

# 🟦 **4. Boto3 Install**

Simply:

```
pip install boto3
```

Ya virtual environment mein:

```
pip install boto3
```

Done.

---

# 🟦 **5. Tumhara Pehla Script — LIST S3 BUCKETS**

Let’s write **your first real Boto3 code** 🎉

### **Example: client version**

```python
import boto3

s3 = boto3.client("s3")

response = s3.list_buckets()

for bucket in response["Buckets"]:
    print(bucket["Name"])
```

### **Example: resource version**

```python
import boto3

s3 = boto3.resource("s3")

for bucket in s3.buckets.all():
    print(bucket.name)
```

---

# 🎉 **DAY 1 COMPLETE**

Agar tum yeh 5 cheezen samajh gaye → Boto3 ki foundation tayyar hai.

---
