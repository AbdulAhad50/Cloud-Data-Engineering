SELECT *
FROM production.products
ORDER BY product_id
OFFSET 10 ROWS
FETCH NEXT 10 ROWS ONLY


SELECT * FROM sales.customers
ORDER BY customer_id,first_name
OFFSET 10 ROWS
FETCH NEXT 10 ROW ONLY


SELECT TOP 30 * FROM sales.customers
ORDER BY  LEN(first_name)


--! Q1. Tumhe sales.customers table se customers ki list banani hai:

--? State = 'CA' wale customers hi hone chahiye.

--? Unko city ke hisaab se ascending order mein sort karo.

--? Sirf pehle 5 customers hi dikhane hain.

--? 👉 Query likho (decide karo tum OFFSET FETCH use karoge ya TOP).

SELECT * FROM sales.customers
WHERE state = 'CA'
ORDER BY city
OFFSET 0 ROWS
FETCH NEXT 5 ROWS ONLY

SELECT * FROM sales.customers
WHERE state = 'CA'
ORDER BY city
OFFSET 5 ROWS
FETCH NEXT 5 ROWS ONLY