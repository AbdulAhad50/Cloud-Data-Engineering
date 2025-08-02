-- 🟢 Section 1: SQL Server SELECT Statement – Asaan Lafzon Mein
-- 🔹 1. SELECT Statement ka Maqsad
-- SELECT ka kaam hota hai:
-- "Table ke andar mojood data ko retrieve karna (nikalna)"

-- Socho aap ke paas eik Excel sheet hai jisme records hain — SQL mein us sheet ko table kehte hain, aur us sheet ke rows ko records aur columns ko fields kehte hain.

-- 🔹 2. Syntax samjho:

-- SELECT column1, column2
-- FROM schema_name.table_name;
-- Breakdown:

-- SELECT — aapko konsa column chahiye

-- FROM — kis table se chahiye

-- schema_name — logical group (e.g., sales, production)

-- table_name — actual table ka naam (e.g., customers)

--------------------------------------------------------------------------------------------------------------

-- 🔹 3. Example #1: Specific Columns ko Retrieve karna

SELECT first_name, last_name
FROM sales.customers
ORDER BY first_name

-- ➡️ Ye query sales schema ke customers table se sirf first_name aur last_name columns ka data dikhayegi.

-----------------------------------------------------------------------------------------------------------

--🔹 4. Example #2: Sabhi Columns ka Data Retrieve Karna

SELECT * FROM sales.customers;

-- ➡️ * ka matlab hota hai “sabhi columns”.

-- ⚠️ Note:
-- Production environment mein SELECT * avoid karo:

-- Extra data transfer hoga

--Agar table mein naye columns add ho gaye to unexpected behavior ho sakta hai

----------------------------------------------------------------------------------------------------------------

-- 🔹 5. WHERE Clause – Row Filtering

SELECT *
FROM sales.customers
WHERE state = 'CA'
ORDER BY customer_id , first_name

-- ➡️ Sirf un customers ka data milega jo California (CA) mein rehte hain.

-- Execution Order:
-- FROM → WHERE → SELECT

----------------------------------------------------------------------------------------------------------------

-- 🔹 6. ORDER BY Clause – Sorting

SELECT *
FROM sales.customers
WHERE state = 'CA'
ORDER BY first_name;
-- ➡️ Output ko first_name ke hisaab se ascending order mein sort karega.



-- 🔹 7. GROUP BY Clause – Grouping Rows

SELECT city, COUNT(*)
FROM sales.customers
WHERE state = 'CA'
GROUP BY city
ORDER BY city;

--GROUP BY city

-- ➡️ California ke har city mein kitne customers hain, ye count dikhayega.




-- 🔹 8. HAVING Clause – Group Filtering

SELECT city, COUNT(*)
FROM sales.customers
--WHERE state = 'CA'
GROUP BY city
HAVING COUNT(*) > 10
ORDER BY city;
-- ➡️ Sirf wo cities show hongi jahan 10 se zyada customers hain.

-- 📌 Important Difference:

-- WHERE → individual rows filter karta hai

-- HAVING → groups filter karta hai
