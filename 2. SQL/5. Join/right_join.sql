-- 🔎 RIGHT JOIN Concept

-- LEFT JOIN me left table ke saare rows preserve hote the.

-- RIGHT JOIN bilkul uska opposite hai →

-- Right table ke saare rows aayenge result me.

-- Agar left table me matching record mile → join ho jaata hai.

-- Agar match na mile → left table ke columns me NULL aata hai.

-- 👉 Matlab RIGHT JOIN hamesha Right Table ke data ko preserve karta hai.

-- 📊 Syntax
-- SELECT select_list
-- FROM T1
-- RIGHT JOIN T2 
--    ON join_predicate;


-- Yaha T1 = left table

-- T2 = right table

-- Saare rows right table (T2) se aayenge, chahe left table me match ho ya na ho.

-- 📖 Example

-- Humare paas 2 tables hain:

-- sales.order_items (orders ka data, left table)

-- production.products (products ka data, right table)

-- Query:

SELECT
    product_name,
    order_id
FROM
    sales.order_items o
RIGHT JOIN production.products p 
    ON o.product_id = p.product_id
ORDER BY order_id;


-- 🟢 Output:

-- Agar product kisi order me hai → order_id show hoga

-- Agar product kisi order me nahi hai → order_id = NULL aayega

-- ⚡ Important Case

-- Agar humein sirf unsold products (jo kabhi order me nahi gaye) dikhane hain:

SELECT
    product_name,
    order_id
FROM
    sales.order_items o
RIGHT JOIN production.products p 
    ON o.product_id = p.product_id
WHERE order_id IS NULL
ORDER BY product_name;


-- 👉 Yaha order_id IS NULL ka matlab hai ki product order table me exist hi nahi karta.

-- 🎯 Key Difference (LEFT JOIN vs RIGHT JOIN)

-- LEFT JOIN: Left table ke saare rows preserve hote hain.

-- RIGHT JOIN: Right table ke saare rows preserve hote hain.

-- Dono me NULL filling opposite direction me hoti hai.

-- Practical use me LEFT JOIN zyada common hai, RIGHT JOIN comparatively kam use hota hai (kyunki same result LEFT JOIN se bhi likha jaa sakta hai bas table order change karke).

--! 🧩 Practice Questions (Tricky)

-- Sare orders dikhaiye with product name, lekin agar koi product table me nahi hai to bhi order show ho (product_name = NULL).

-- Hint: sales.orders (right table) + production.products (left table).

-- Sare products with their suppliers dikhaiye, chahe product ka supplier assign na ho.

-- Sare categories ke saath unke products dikhaiye, agar kisi category me product nahi hai to bhi category dikhni chahiye.