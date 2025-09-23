--? 🔑 Correlated Subquery Kya Hai?

--! Normal subquery → ek baar run hoti hai → result outer query use karti hai.

-- Correlated Subquery → outer query ke har row ke liye baar-baar run hoti hai.

-- Iska matlab: inner query outer query ki column values use karti hai.

-- 👉 Isliye correlated subquery independently run nahi ho sakti.

--! 📌 Example 1 – Har Category ka Sabse Mehenga Product
SELECT
    product_name,
    list_price,
    category_id
FROM
    production.products p1
WHERE
    list_price = (
        SELECT MAX(p2.list_price)
        FROM production.products p2
        WHERE p2.category_id = p1.category_id
    )
ORDER BY category_id, product_name;


-- 🔍 Explanation:

-- Outer query → ek product pick karti hai.

-- Inner query → us product ke category ke liye max price nikalti hai.

-- Agar product ka price max ke barabar hai → result me aayega.





-- 📌 Example 2 – Har Customer ka Sabse Recent Order

SELECT
    c.customer_id,
    c.first_name,
    c.last_name,
    o.order_id,
    o.order_date
FROM sales.customers c
JOIN sales.orders o
    ON o.customer_id = c.customer_id
WHERE o.order_date = (
    SELECT MAX(o2.order_date)
    FROM sales.orders o2
    WHERE o2.customer_id = c.customer_id
);





-- 👉 Har customer ka latest order laayega.


SELECT
    s.staff_id,
    s.first_name,
    s.last_name,
    o.order_id,
    SUM(i.list_price * (1 - i.discount)) AS order_amount
FROM sales.staffs s
JOIN sales.orders o
    ON s.staff_id = o.staff_id
JOIN sales.order_items i
    ON o.order_id = i.order_id
GROUP BY s.staff_id, s.first_name, s.last_name, o.order_id
HAVING SUM(i.list_price * (1 - i.discount)) >
   (
       SELECT AVG(SUM(i2.list_price * (1 - i2.discount)))
       FROM sales.orders o2
       JOIN sales.order_items i2 ON o2.order_id = i2.order_id
       WHERE o2.staff_id = s.staff_id
       GROUP BY o2.order_id
   );
