-- 🔑 EXISTS kya hai?

-- EXISTS (subquery) ek logical operator hai.

-- Agar subquery koi bhi row return karti hai → EXISTS = TRUE.

-- Agar subquery empty hai → EXISTS = FALSE.

-- Short-circuit hota hai → jaise hi ek row mil gayi, execution ruk jata hai (performance friendly hota hai).

-- 📌 Example 1 – Simple EXISTS with NULL
SELECT
    customer_id,
    first_name,
    last_name
FROM sales.customers
WHERE EXISTS (SELECT NULL);


-- 👉 Subquery hamesha ek NULL row return karti hai → har row ke liye TRUE ho jaata hai → result = all customers.


-- 📌 Example 2 – Correlated Subquery with EXISTS

SELECT
    customer_id,
    first_name,
    last_name
FROM sales.customers c
WHERE EXISTS (
    SELECT 1
    FROM sales.orders o
    WHERE o.customer_id = c.customer_id
    HAVING COUNT(*) > 2
);


-- 👉 Isme har customer ke liye inner query orders count karti hai.

-- Agar 2 se zyada orders hain → subquery row return karegi → EXISTS = TRUE.

-- Warna → EXISTS = FALSE.




-- 📌 Example 3 – EXISTS vs IN

-- 🔹 Using IN:

SELECT *
FROM sales.orders
WHERE customer_id IN (
    SELECT customer_id
    FROM sales.customers
    WHERE city = 'San Jose'
);


-- 🔹 Using EXISTS:

SELECT *
FROM sales.orders o
WHERE EXISTS (
    SELECT 1
    FROM sales.customers c
    WHERE c.customer_id = o.customer_id
      AND c.city = 'San Jose'
);


-- 👉 Dono ka result same hai, lekin:

-- IN → list banata hai aur fir match karta hai.

-- EXISTS → sirf existence check karta hai, jaise hi row milti hai → stop.

-- ⚡ Rule of Thumb:

-- Agar subquery me NULL values aa sakti hain → EXISTS better hai.

-- Large data pe → EXISTS kabhi kabhi IN se fast hota hai.

-- 📌 Example 4 – EXISTS vs JOIN
-- EXISTS: sirf check karta hai

SELECT c.customer_id, c.first_name
FROM sales.customers c
WHERE EXISTS (
    SELECT 1
    FROM sales.orders o
    WHERE o.customer_id = c.customer_id
);

-- JOIN: actual rows combine karta hai
SELECT DISTINCT c.customer_id, c.first_name, o.order_id
FROM sales.customers c
JOIN sales.orders o
    ON c.customer_id = o.customer_id;


-- 👉 Difference:

-- EXISTS → bas check karna hai ki order hai ya nahi.

-- JOIN → actual rows merge karta hai (data repeat ho sakta hai).

-- 🚀 Summary

-- EXISTS = "kya row exist karti hai?" (TRUE/FALSE).

-- Fast, kyunki short-circuit hota hai.

-- Mostly use hota hai correlated subqueries me.

-- EXISTS = better jab tumhe sirf existence check karna ho, extra data nahi chahiye.

-- ⚡ Ab practice ke liye ek sawal tumhare liye:
-- 👉 Un customers ki list banao jinhone kabhi bhi "Mountain Bikes" category ka product order kiya ho.

-- Chaho to tum EXISTS use karke try karo.
-- Kya chahte ho main iska solution likh ke dikhau ya tum attempt karoge pehle?