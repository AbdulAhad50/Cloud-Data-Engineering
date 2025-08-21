-- 🔑 OR Operator in SQL Server

-- Purpose: multiple conditions ko combine karta hai.

-- TRUE return karta hai agar koi bhi condition TRUE ho.

-- Default precedence: AND ka evaluation pehle hota hai, OR baad me. Parentheses () use karke order change kar sakte ho.

-- ✅ Syntax:
-- boolean_expression OR boolean_expression

-- 📌 Examples:

-- 1) Basic OR example

-- SELECT product_name, list_price
-- FROM production.products
-- WHERE list_price < 200 OR list_price > 6000;


-- 👉 output: woh products jinki price 200 se kam ya 6000 se zyada ho.

-- 2) Multiple OR conditions

-- SELECT product_name, brand_id
-- FROM production.products
-- WHERE brand_id = 1 OR brand_id = 2 OR brand_id = 4;


-- Equivalent with IN:

-- SELECT product_name, brand_id
-- FROM production.products
-- WHERE brand_id IN (1, 2, 4);


-- 3) OR with AND (precedence matter karta hai)

-- -- SQL Server pehle AND evaluate karega
-- SELECT product_name, brand_id, list_price
-- FROM production.products
-- WHERE brand_id = 1 OR brand_id = 2 AND list_price > 500;


-- 👉 iska matlab hai:

-- brand_id = 1 (chahe price kuch bhi ho)

-- OR (brand_id = 2 AND price > 500)

-- Correct grouping with parentheses:

SELECT product_name, brand_id, list_price
FROM production.products
WHERE (brand_id = 1 OR brand_id = 2) 
  AND list_price > 500;


-- 👉 yahan pe dono brands (1 ya 2) filter honge aur price > 500 bhi honi chahiye.

-- 🎯 Summary:

-- OR operator → agar ek bhi condition TRUE hai to row select ho jaati hai.

-- Default precedence → AND > OR.

-- Parentheses ka use karo jab combined conditions likh rahe ho.


