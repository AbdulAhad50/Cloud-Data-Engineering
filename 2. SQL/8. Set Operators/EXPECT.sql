-- EXCEPT Operator ka Summary:

-- Syntax:

-- query_1
-- EXCEPT
-- query_2


-- Kaam:
-- Sirf wo rows return karega jo query_1 me hain lekin query_2 me nahi hain.

-- Rules (same as UNION/INTERSECT):

-- Columns ka order aur number same hona chahiye

-- Datatypes compatible hone chahiye

-- Duplicates: Automatically remove kar deta hai (distinct rows only).

-- 📌 Example 1 – Products jo kabhi sale hi nahi hue

SELECT * 
from production.products as p
INNER JOIN production.brands as b
  on b.brand_id = p.brand_id
WHERE p.product_id IN 
(
SELECT product_id
FROM production.products
EXCEPT
SELECT product_id
FROM sales.order_items
)

SELECT product_id
FROM production.products
EXCEPT
SELECT product_id
FROM sales.order_items






-- ✅ Ye query sirf un products ke product_id return karegi jo products table me to hain lekin unka order_items me record nahi hai (yani unki kabhi sale hi nahi hui).

-- 📌 Example 2 – Customers jo staff nahi hain
SELECT first_name, last_name
FROM sales.customers
EXCEPT
SELECT first_name, last_name
FROM sales.staffs
ORDER BY first_name, last_name;


-- ✅ Result: Sirf wo customers jo staffs list me nahi hain.

-- 📌 Difference Recap:

-- UNION → Dono queries ka combined result (distinct rows).

-- UNION ALL → Dono queries ka combined result with duplicates.

-- INTERSECT → Sirf common rows jo dono queries me hain.

-- EXCEPT → Sirf wo rows jo pehli query me hain par dusri me nahi.

-- 👉 Ab agar tum chaho to mai ek single scenario exercise banaun jisme UNION, INTERSECT, aur EXCEPT tino ka istemal hoga (customers vs. staffs vs. stores) — taki ek hi dataset pe tino ka difference crystal clear ho jaye.