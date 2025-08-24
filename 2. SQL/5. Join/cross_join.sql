-- 🔎 CROSS JOIN Kya Hai?

-- Definition: CROSS JOIN dono tables ka Cartesian Product return karta hai.

-- Matlab agar T1 ke 3 rows aur T2 ke 4 rows hain → output me 3 × 4 = 12 rows milenge.

-- ⚡ Important Point:

-- CROSS JOIN me ON condition nahi hoti (jaise INNER/LEFT/RIGHT JOIN me hoti hai).

-- Har row from T1 × Har row from T2.

-- 📖 Syntax
-- SELECT 
--     select_list
-- FROM 
--     T1
-- CROSS JOIN T2;

-- 🧮 Example
-- Tables:

-- production.products

-- sales.stores

-- Query:
SELECT
    product_id,
    product_name,
    store_id,
    0 AS quantity
FROM
    production.products
CROSS JOIN sales.stores
ORDER BY
    product_name,
    store_id;


-- 🟢 Explanation:

-- Har product ko har store ke saath combine kar diya.

-- Output: Agar 50 products aur 10 stores hain → 50 × 10 = 500 rows.

-- 👉 Ye stocktaking (inventory planning) me useful hota hai. Example: “Har store ke paas ye product hai ya nahi, aur agar hai to kitna quantity hai?”

-- ⚡ Advanced Example

-- Find all products × stores jinke paas koi sales hi nahi hui:

SELECT
    s.store_id,
    p.product_id,
    ISNULL(c.sales, 0) AS sales
FROM
    sales.stores s
CROSS JOIN production.products p
LEFT JOIN (
    SELECT
        s.store_id,
        p.product_id,
        SUM(i.quantity * i.list_price) AS sales
    FROM
        sales.orders o
    INNER JOIN sales.order_items i ON i.order_id = o.order_id
    INNER JOIN sales.stores s ON s.store_id = o.store_id
    INNER JOIN production.products p ON p.product_id = i.product_id
    GROUP BY
        s.store_id,
        p.product_id
) c ON c.store_id = s.store_id
AND c.product_id = p.product_id
WHERE
    c.sales IS NULL
ORDER BY
    p.product_id,
    s.store_id;


-- 🟢 Result: Sirf wahi product-store combinations aayenge jaha sales = NULL (yaani koi sale nahi hui).

-- 🎯 Real-world Use Cases

-- Sales Forecasting: Har product × har store ke combinations generate karna.

-- Scheduling: Har employee × har shift ka combination create karna.

-- Testing Data: Dummy records generate karna jaha har possible combination chahiye.

-- 🧩 Tricky Practice Questions

-- Employee × Department

-- CROSS JOIN karke har employee aur department ka combination banao.

-- Filter karo jaha employee already us department me assigned nahi hai.

-- Students × Courses

-- CROSS JOIN karke har student × course ka list banao.

-- Sirf unhe dikhaiye jaha student enrolled nahi hai.

-- Products × Dates

-- CROSS JOIN karke sare products aur next 7 days ka calendar banao.

-- Har product ke liye dikhaiye ki agle 7 dinon me stock available hai ya nahi.