--! 💡 Scenario Questions


--? Q1. Tumhe sare California customers chahiye unke last_name ke descending order mein. Query likho.
SELECT * FROM sales.customers
WHERE state = 'CA'
ORDER BY last_name DESC


--? Q2. Tumhe report banani hai jisme customers ko city ke hisaab se aur city ke andar unke first_name ascending order mein arrange kiya gaya ho. Query likho. 
SELECT * FROM sales.customers
ORDER BY city , first_name ASC

--? Q3. Tumhe sabse lamba first_name wale top 5 customers chahiye. Query likho.
SELECT TOP 5 * FROM sales.customers
ORDER BY LEN(first_name) DESC


--? Q4. Tumhe customers ki list state ke hisaab se sort karke dikhani hai, lekin result mein state show nahi karna. Query likho.

SELECT first_name,last_name,email FROM sales.customers
ORDER BY state