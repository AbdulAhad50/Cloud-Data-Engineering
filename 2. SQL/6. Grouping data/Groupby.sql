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