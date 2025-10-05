--! SQL Server BETWEEN Operator – Summary
-- Syntax:
-- column BETWEEN start_value AND end_value


-- TRUE hota hai agar column ki value start_value se greater/equal ho aur end_value se less/equal ho.

-- Equivalent hai:

-- column >= start_value AND column <= end_value


-- Agar condition ko negate karna ho to NOT BETWEEN use karte hain:

-- column NOT BETWEEN start_value AND end_value

-- 📊 Examples
-- 1) BETWEEN with Numbers
SELECT product_id, product_name, list_price
FROM production.products
WHERE list_price BETWEEN 149.99 AND 199.99
ORDER BY list_price;


-- ➡ Yaha list_price 149.99 se lekar 199.99 ke beech ke products milenge.

-- 2) NOT BETWEEN with Numbers

SELECT product_id, product_name, list_price
FROM production.products
WHERE list_price NOT BETWEEN 149.99 AND 199.99
ORDER BY list_price;


-- ➡ Yaha wo products milenge jinka price is range ke bahar hai.

-- 3) BETWEEN with Dates
SELECT order_id, customer_id, order_date, order_status
FROM sales.orders
WHERE order_date BETWEEN '20170115' AND '20170117'
ORDER BY order_date;


-- ➡ Sirf wo orders milenge jo 2017-01-15 se 2017-01-17 ke beech place huye hain.

-- ⚠️ Dates ke liye safest format 'YYYYMMDD' hota hai SQL Server mein.

-- 🚀 Real-world Practice Queries

-- Find customers whose birthdays are between '1990-01-01' and '2000-12-31'.

-- Get all orders placed between '2021-05-01' and '2021-05-31'.

-- List all products whose price is between 500 and 1000.

-- Show employees whose hire_date is not between '2010-01-01' and '2020-01-01'.


SELECT * from sales.customers

SELECT order_date from sales.orders
WHERE order_date BETWEEN '20180501' AND '20160531'


ORDER BY order_date DESC


