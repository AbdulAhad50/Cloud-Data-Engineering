--! 🔑 Subquery Basics

-- Subquery = ek query jo kisi doosri query ke andar hoti hai.

-- Outer query = main query.

-- Inner query = subquery.

-- Parentheses () ke andar likhna mandatory hai.


--? 📌 Subquery kahan use hota hai?

--? WHERE clause → records filter karne ke liye

SELECT order_id, order_date, customer_id
FROM sales.orders
WHERE customer_id IN (
    SELECT customer_id
    FROM sales.customers
    WHERE city = 'New York'
);



--2. As an Expression (SELECT list) → ek naya column banane ke liye

SELECT order_id,
       order_date,
       (SELECT MAX(list_price)
        FROM sales.order_items i
        WHERE i.order_id = o.order_id) AS max_list_price
FROM sales.orders o;


-- 👉 Har order ka sabse mehenga product price dikhayega.


SELECT MAX(list_price)
        FROM sales.order_items i
        INNER JOIN sales.orders o
        on i.order_id = o.order_id




--3. IN / NOT IN → ek set ke andar record check karne ke liye

SELECT product_name
FROM production.products
WHERE category_id IN (
    SELECT category_id
    FROM production.categories
    WHERE category_name IN ('Mountain Bikes','Road Bikes')
);


-- 👉 Sirf Mountain & Road Bikes products laayega.


--4. EXISTS / NOT EXISTS → existence check karne ke liye

SELECT c.customer_id, c.first_name, c.last_name
FROM sales.customers c
WHERE EXISTS (
    SELECT 1
    FROM sales.orders o
    WHERE o.customer_id = c.customer_id
    AND YEAR(o.order_date) = 2017
);




-- 👉 Sirf un customers ko laayega jinhone 2017 me order kiya tha.



-- ANY / ALL

-- ANY → agar kisi bhi ek value ke sath condition true ho

-- ALL → agar sabhi values ke sath condition true ho

-- Example:

-- ANY: kisi bhi brand ki avg price se badi hai
SELECT product_name, list_price
FROM production.products
WHERE list_price >= ANY (
    SELECT AVG(list_price)
    FROM production.products
    GROUP BY brand_id
);

-- ALL: sabhi brands ki avg price se badi ho
SELECT product_name, list_price
FROM production.products
WHERE list_price >= ALL (
    SELECT AVG(list_price)
    FROM production.products
    GROUP BY brand_id
);



-- FROM clause me (Derived Table)

SELECT AVG(order_count) AS avg_order_count
FROM (
    SELECT staff_id, COUNT(order_id) AS order_count
    FROM sales.orders
    GROUP BY staff_id
) t;


-- 👉 Pehle staff-wise orders nikale, fir unka average count nikala.

-- 🚀 Quick Summary

-- IN / EXISTS → presence check.

-- ANY / ALL → comparison multiple values ke against.

-- Expression subquery → ek single calculated value.

-- FROM subquery → ek virtual table bana kar use karna.