--Introduction to SQL Server GROUP BY clause
--GROUP BY clause ka kaam hai query ki rows ko groups mein arrange karna. 
--Groups un columns ki values k combination par bante hain jo aap 
--GROUP BY clause mein specify karte ho.


SELECT
    customer_id,
    YEAR(order_date) order_year
FROM
    sales.orders
WHERE
    customer_id IN (1, 2)
ORDER BY
    customer_id;



-----------------------------------------------------------


SELECT
    customer_id,
    YEAR(order_date) order_year
FROM
    sales.orders
WHERE
    customer_id IN (1, 2)
GROUP BY
    customer_id,
    YEAR(order_date)
ORDER BY
    customer_id;



--Ye query rows ko customer_id aur order_year k 
--combination k mutabiq groups mein divide karti hai.



SELECT
    customer_id,
    YEAR(order_date) order_year,
    COUNT(order_id) order_placed
FROM
    sales.orders
WHERE
    customer_id IN (1, 2)
GROUP BY
    customer_id,
    YEAR(order_date)
ORDER BY
    customer_id; 



-- Important Rule:
-- Agar aap GROUP BY use kar rahe ho to SELECT list mein jo 
-- column aggregate function ka hissa nahi hai, wo
-- GROUP BY clause mein hona chahiye, warna error aayega.







-- 🔎 GROUP BY Clause in SQL Server
-- 📌 Definition:

-- GROUP BY rows ko ek saath group karta hai based on one or more columns.

-- Fir hum aggregate functions (COUNT, SUM, AVG, MIN, MAX) lagakar har group ka summary result nikalte hain.

-- 🧮 Syntax
-- SELECT
--     column_name1,
--     aggregate_function(column_name2)
-- FROM
--     table_name
-- GROUP BY
--     column_name1;

-- 📖 Example 1 – Simple GROUP BY
SELECT
    city,
    COUNT(customer_id) AS total_customers
FROM
    sales.customers
GROUP BY
    city
ORDER BY
    city;


-- 🟢 Ye query har city ke customers count karegi.

-- 📖 Example 2 – GROUP BY with Multiple Columns
SELECT
    state,
    city,
    COUNT(customer_id) AS total_customers
FROM
    sales.customers
GROUP BY
    state, city
ORDER BY
    state, city;


-- 🟢 Yahan state + city ka combination group banayega.

-- 📖 Example 3 – Using MIN & MAX
SELECT
    brand_name,
    MIN(list_price) AS min_price,
    MAX(list_price) AS max_price
FROM
    production.products p
INNER JOIN production.brands b ON b.brand_id = p.brand_id
WHERE
    model_year = 2018
GROUP BY
    brand_name;


-- 🟢 Ye query har brand ke liye lowest aur highest price nikal degi.

-- 📖 Example 4 – Using AVG
SELECT
    brand_name,
    AVG(list_price) AS avg_price
FROM
    production.products p
INNER JOIN production.brands b ON b.brand_id = p.brand_id
WHERE
    model_year = 2018
GROUP BY
    brand_name;


-- 🟢 Har brand ka average price dega.

-- 📖 Example 5 – Using SUM
SELECT
    order_id,
    SUM(quantity * list_price * (1 - discount)) AS net_value
FROM
    sales.order_items
GROUP BY
    order_id;


-- 🟢 Har order ka total bill amount nikal aayega.

-- ⚡ Important Rules

-- SELECT list me wahi column likh sakte ho jo:

-- GROUP BY clause me ho, ya

-- Aggregate function ke andar ho.

-- ❌ Warna error milega.

-- GROUP BY hamesha WHERE ke baad aur ORDER BY se pehle execute hota hai.

-- 🎯 Real-Life Use Cases

-- Har customer ne kitne orders diye.

-- Har city ke total sales.

-- Har product brand ka average price.

--! Har order ka total bill.

--? 🧩 Tricky Practice Questions (GROUP BY)

--? Har sales staff ne ek saal me kitne orders handle kiye aur unki total sales amount kya thi?

--? Har customer ke liye total order count aur total amount spent nikalna.

--? Har product brand ke liye sabse mehenga aur sabse sasta product list karna.

--? Har city me kitne unique customers hain aur unka average lifetime spend kya hai?


--? Har sales staff ne ek saal me kitne orders handle kiye aur unki total sales amount kya thi?

SELECT  CONCAT(s.first_name, ' ', s.last_name) as Staff_NAMES, s.staff_id , COUNT(order_status) as total_order, SUM(list_price) as total_sale
FROM sales.staffs s
INNER JOIN sales.orders o
    on o.staff_id = s.staff_id
INNER JOIN sales.order_items as i 
    on i.order_id = o.order_id
GROUP BY s.staff_id, CONCAT(s.first_name, ' ', s.last_name) 
ORDER BY staff_id



--? Har customer ke liye total order count aur total amount spent nikalna.

SELECT c.customer_id , COUNT(o.order_status) as total_order, SUM(list_price / (1 - discount)) as total_spent
from sales.customers as c
INNER JOIN sales.orders o
    on o.customer_id = c.customer_id
INNER JOIN sales.order_items as i 
    on i.order_id = o.order_id
GROUP BY c.customer_id
ORDER BY c.customer_id




--? Har product brand ke liye sabse mehenga aur sabse sasta product list karna.