Bhai, tumhari requirement samajh gaya ✅
Tum chahte ho ek **SQL Questions + Queries ka set (20+)** jo **basic se advance tak har important feature cover kare**.
Main tumhe ek ordered list bana kar deta hoon jisme:

* **Basic → Intermediate → Advance** flow hoga
* Har question ke sath **query ka example** hoga
* Saare SQL ke important concepts (DDL, DML, Joins, Subqueries, CTE, Window Functions, Triggers, Stored Procedures, Transactions, Indexing, Performance) cover karenge

---

# 📘 SQL Questions with Queries (Basic → Advanced)

---

### **1. Create Table (DDL Basics)**

👉 Question: Ek `Employees` table banao jisme `id, name, department, salary` ho.

```sql
CREATE TABLE Employees (
    id INT PRIMARY KEY,
    name VARCHAR(100),
    department VARCHAR(50),
    salary DECIMAL(10,2)
);
```

---

### **2. Insert Data (DML Basics)**

👉 Question: Employees table me 3 records insert karo.

```sql
INSERT INTO Employees (id, name, department, salary)
VALUES
(1, 'Ali', 'IT', 50000),
(2, 'Sara', 'HR', 40000),
(3, 'Ahmed', 'Finance', 60000);
```

---

### **3. Simple Select**

👉 Question: Saare employees ke naam aur salary dikhayo.

```sql
SELECT name, salary FROM Employees;
```

---

### **4. Filtering with WHERE**

👉 Question: Sirf IT department ke employees show karo.

```sql
SELECT * FROM Employees WHERE department = 'IT';
```

---

### **5. Sorting with ORDER BY**

👉 Question: Employees ko salary ke descending order me dikhayo.

```sql
SELECT * FROM Employees ORDER BY salary DESC;
```

---

### **6. Aggregate Functions**

👉 Question: Sabse zyada salary aur average salary nikalo.

```sql
SELECT MAX(salary) AS MaxSalary, AVG(salary) AS AvgSalary FROM Employees;
```

---

### **7. GROUP BY**

👉 Question: Har department ki average salary nikalo.

```sql
SELECT department, AVG(salary) AS AvgSalary
FROM Employees
GROUP BY department;
```

---

### **8. HAVING Clause**

👉 Question: Sirf un departments ko dikhayo jinki average salary 45000 se zyada hai.

```sql
SELECT department, AVG(salary) AS AvgSalary
FROM Employees
GROUP BY department
HAVING AVG(salary) > 45000;
```

---

### **9. UPDATE Query**

👉 Question: Ali ki salary 55000 kar do.

```sql
UPDATE Employees
SET salary = 55000
WHERE name = 'Ali';
```

---

### **10. DELETE Query**

👉 Question: Sara ko Employees table se delete karo.

```sql
DELETE FROM Employees WHERE name = 'Sara';
```

---

### **11. INNER JOIN**

👉 Question: Employees aur Departments table join karo.

```sql
SELECT e.name, d.dept_name
FROM Employees e
INNER JOIN Departments d ON e.department = d.dept_id;
```

---

### **12. LEFT JOIN**

👉 Question: Saare employees aur unke departments (agar exist na kare to NULL).

```sql
SELECT e.name, d.dept_name
FROM Employees e
LEFT JOIN Departments d ON e.department = d.dept_id;
```

---

### **13. Subquery**

👉 Question: Un employees ke naam show karo jinki salary average salary se zyada hai.

```sql
SELECT name
FROM Employees
WHERE salary > (SELECT AVG(salary) FROM Employees);
```

---

### **14. CTE (Common Table Expression)**

👉 Question: Ek CTE banao jo 50000 se zyada salary wale employees return kare.

```sql
WITH HighSalary AS (
    SELECT * FROM Employees WHERE salary > 50000
)
SELECT * FROM HighSalary;
```

---

### **15. Window Function (ROW_NUMBER)**

👉 Question: Salary ke basis pe employees ko rank karo.

```sql
SELECT name, salary,
       ROW_NUMBER() OVER (ORDER BY salary DESC) AS RankSalary
FROM Employees;
```

---

### **16. Window Function (PARTITION BY)**

👉 Question: Har department me salary ke hisaab se rank dikhayo.

```sql
SELECT name, department, salary,
       RANK() OVER (PARTITION BY department ORDER BY salary DESC) AS DeptRank
FROM Employees;
```

---

### **17. Stored Procedure**

👉 Question: Ek procedure banao jo department ki total salary return kare.

```sql
CREATE PROCEDURE GetDeptSalary(@dept VARCHAR(50))
AS
BEGIN
    SELECT SUM(salary) AS TotalSalary
    FROM Employees
    WHERE department = @dept;
END;
```

---

### **18. Trigger**

👉 Question: Jab Employees table me insert ho to ek log table me record add ho.

```sql
CREATE TRIGGER trg_after_insert
ON Employees
AFTER INSERT
AS
BEGIN
    INSERT INTO EmployeeLog (emp_id, log_time)
    SELECT id, GETDATE() FROM inserted;
END;
```

---

### **19. Transaction**

👉 Question: Ek transaction likho jo salary update kare, aur agar error aaye to rollback ho.

```sql
BEGIN TRANSACTION;

UPDATE Employees SET salary = salary + 5000 WHERE department = 'IT';

IF @@ERROR <> 0
    ROLLBACK TRANSACTION;
ELSE
    COMMIT TRANSACTION;
```

---

### **20. Indexing**

👉 Question: Employees ke department column par index banao.

```sql
CREATE INDEX idx_department ON Employees(department);
```

---

### **21. Recursive CTE**

👉 Question: Employee-Manager hierarchy show karo.

```sql
WITH EmployeeHierarchy AS (
    SELECT id, name, manager_id
    FROM Employees
    WHERE manager_id IS NULL
    UNION ALL
    SELECT e.id, e.name, e.manager_id
    FROM Employees e
    INNER JOIN EmployeeHierarchy eh ON e.manager_id = eh.id
)
SELECT * FROM EmployeeHierarchy;
```

---

Ye **21 questions + queries** tumhe **Basic se Advance SQL** tak poora cover kar dete hain ✅

---

Bhai, chaho to main isko **MCQ + Practice Assignment** format me bhi bana sakta hoon jahan tum answer do aur main check karun (logic building ke liye).

👉 Tum chahte ho main **20 aur alag practice questions (without answer)** banaun taake tum solve karo?
