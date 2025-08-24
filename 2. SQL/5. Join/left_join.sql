-- 🔎 LEFT JOIN Ka Concept

-- INNER JOIN me sirf wahi rows aati hain jo match karti hain dono tables me.

-- LEFT JOIN me:

-- Left table (T1) ke saare rows aayenge

-- Agar matching row mil jaye right table (T2) me → data show hoga

-- Agar match nahi mila → Right table ke columns me NULL aayega

-- 👉 Matlab LEFT JOIN hamesha Left Table ke data ko preserve karta hai.

-- 📊 Example

-- Humare paas do tables hain:

-- production.products (sab products ka record)

-- sales.order_items (jo products order me gaye)

-- Query:

SELECT
    product_name,
    order_id
FROM
    production.products p
LEFT JOIN sales.order_items o 
    ON o.product_id = p.product_id
ORDER BY order_id;


-- 🟢 Output:

-- Agar product bik gaya hai → order_id show hoga

-- Agar product kabhi order me nahi gaya → order_id = NULL aayega

-- ⚡ Key Difference: ON vs WHERE clause
-- Example 1 (WHERE use karke filter):
SELECT
    product_name,
    order_id
FROM
    production.products p
LEFT JOIN sales.order_items o 
   ON o.product_id = p.product_id
WHERE order_id = 100;


-- 👉 Ye sirf wahi products dikhayega jo order 100 me hain. Baaki products skip ho jayenge.

-- Example 2 (ON clause me condition):
SELECT
    product_name,
    order_id
FROM
    production.products p
LEFT JOIN sales.order_items o 
   ON o.product_id = p.product_id
   AND o.order_id = 100
ORDER BY order_id;


-- 👉 Ye sab products dikhayega, lekin order 100 se match na hone par NULL dikhayega.

-- 🎯 Real-Life Use Cases of LEFT JOIN

-- Find unsold products – jo product order table me nahi hain.

SELECT p.product_name
FROM production.products p
LEFT JOIN sales.order_items o 
     ON o.product_id = p.product_id
WHERE o.order_id IS NULL;


--? Customer list with their last order date – lekin agar customer ne kabhi order nahi diya, to bhi customer show ho (order_date = NULL).

--? Inventory report – sare products dikhane hain, chahe unka sale hua ho ya nahi.

--? 🧩 Tumhare liye Tricky Practice Questions

--? Unsold Products by Category
--? Query likho jisme sirf un products ko dikhana hai jo kabhi order nahi hue, aur unke saath unka category_name bhi dikhana hai.

--? Customers with/without Orders
--? Tumhare paas sales.customers aur sales.orders tables hain. Query likho jisme sare customers show ho aur unka last_order_date (agar order diya ho) warna NULL.

--? Conditional LEFT JOIN

--? Query likho jisme products list ho, aur unka order_id sirf tabhi show ho jab order 2023 me place hua ho. Agar product 2023 me order nahi hua, to NULL aayega.