-- SQL Server HAVING Clause

-- Summary:
-- HAVING clause ka use GROUP BY ke saath hota hai taake groups ko 
-- filter kiya ja sake based on conditions.


-- Introduction

-- HAVING clause un groups par condition lagata hai jo GROUP BY se banaye gaye hote hain.

--SELECT
    ---select_list
--FROM
    --table_name
--GROUP BY
    --group_list
--HAVING
    --conditions;


-- GROUP BY → Rows ko groups mein divide karta hai.

-- HAVING → Groups par condition lagata hai.

-- Sirf wo groups result mein aate hain jinke liye condition TRUE hoti hai.

-- Important: HAVING clause GROUP BY ke baad execute hota hai, is liye aap
-- HAVING mein column alias use nahi kar sakte jo SELECT list mein bana ho.



--Wrong Example:

--SELECT
--    col1,
--    COUNT(col2) total
--FROM table
--GROUP BY col1
--HAVING total > 5;  -- ❌ Error



--Correct Example:

--SELECT
--    col1,
--    COUNT(col2) total
--FROM table
--GROUP BY col1
--HAVING COUNT(col2) > 5; -- ✅


--Examples
--1) HAVING with COUNT()

--Find customers who placed at least 2 orders per year:

SELECT
    customer_id,
    YEAR(order_date) order_year,
    COUNT(order_id) order_count
FROM
    sales.orders
GROUP BY
    customer_id,
    YEAR(order_date)
HAVING
    COUNT(order_id) >= 2
ORDER BY
    order_year




--2) HAVING with SUM()

--Find sales orders with net value > 20,000:

SELECT
    order_id,
    SUM(quantity * list_price * (1 - discount)) net_value
FROM
    sales.order_items
GROUP BY
    order_id
HAVING
    SUM(quantity * list_price * (1 - discount)) > 20000
ORDER BY
    net_value;



--3) HAVING with MAX() and MIN()

--Find categories with max price > 4,000 OR min price < 500:

SELECT
    category_id,
    MAX(list_price) max_list_price,
    MIN(list_price) min_list_price
FROM
    production.products
GROUP BY
    category_id
HAVING
    MAX(list_price) > 4000 OR MIN(list_price) < 500;


--GROUP BY → customer aur year ke basis par groups banata hai.

--HAVING → Sirf un groups ko rakhta hai jinke orders ≥ 2 hain.


--4) HAVING with AVG()

--Find categories with average price between 500 and 1000:

SELECT
    category_id,
    AVG(list_price) avg_list_price
FROM
    production.products
GROUP BY
    category_id
HAVING
    AVG(list_price) BETWEEN 500 AND 1000;



--| WHERE                                                      | HAVING                                          |
--| ---------------------------------------------------------- | ----------------------------------------------- |
--| Rows ko filter karta hai **GROUP BY** se pehle             | Groups ko filter karta hai **GROUP BY** ke baad |
--| Aggregate functions use nahi ho sakte (unless in subquery) | Aggregate functions use ho sakte hain           |



-- 🔹 HAVING Clause kya hai?

-- Jab hum GROUP BY lagate hain, toh rows groups me divide ho jaati hain.

-- Agar hume in groups ko filter karna ho (jaise aggregate function ke base par condition lagani ho), toh hum WHERE nahi use kar sakte.

-- Uske liye HAVING clause use hota hai.

-- 👉 Rule:

-- WHERE → rows filter karta hai (GROUP BY se pehle).

-- HAVING → groups filter karta hai (GROUP BY ke baad).

-- 🔹 Example 1:

-- Customer jisne ek saal me 2 ya usse zyada orders diye:

SELECT
    customer_id,
    YEAR(order_date) as order_year,
    COUNT(order_id) as order_count
FROM sales.orders
GROUP BY customer_id, YEAR(order_date)
HAVING COUNT(order_id) >= 2
ORDER BY customer_id;


-- 📌 Yaha:

-- Pehle GROUP BY se customer+year ke group ban gaye.

-- Fir HAVING COUNT(order_id) >= 2 sirf un groups ko rakha jisme 2 ya usse zyada orders the.

-- 🔹 Example 2:

-- Un orders ko dikhana jinka total value 20,000 se zyada ho:

SELECT
    order_id,
    SUM(quantity * list_price * (1 - discount)) as net_value
FROM sales.order_items
GROUP BY order_id
HAVING SUM(quantity * list_price * (1 - discount)) > 20000
ORDER BY net_value DESC;

-- 🔹 Example 3:

-- Un product categories ko dikhana jinka average price 500–1000 ke beech ho:

SELECT
    category_id,
    AVG(list_price) as avg_price
FROM production.products
GROUP BY category_id
HAVING AVG(list_price) BETWEEN 500 AND 1000;

-- ⚠️ Important Note:

-- Tum HAVING clause me alias use nahi kar sakte (jaise HAVING avg_price > 500) → error aayega.

-- Hamesha aggregate function likhna hoga (HAVING AVG(list_price) > 500).

-- 🔥 Ab ek tricky practice question:

-- Har staff ka total sales nikalna hai, lekin sirf un staff ko dikhana hai jinki sales 100,000 se zyada hai.