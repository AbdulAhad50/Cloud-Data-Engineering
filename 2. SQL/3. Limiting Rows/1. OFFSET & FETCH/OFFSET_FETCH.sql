--! 📘 Roman Urdu Explanation: SQL Server OFFSET FETCH
--? 🔹 OFFSET FETCH ka Introduction
--? SQL Server mein OFFSET aur FETCH clauses ka use hum query ke result set ko limit karne ke liye use karte hain — yani sirf kuch specific rows hi fetch karni ho.

--? Ye dono ORDER BY clause ke andar hi use hote hain. Agar ORDER BY nahi likha hoga, to error milta hai.


--! ✅ Syntax:


--? ORDER BY column_name [ASC | DESC]
--? OFFSET offset_row_count ROWS

--? FETCH NEXT fetch_row_count ROWS ONLY;

--? 📌 Syntax samajho:
--? OFFSET:

--? Ye define karta hai ke tum kitni rows skip karna chahte ho.

--? Iska number 0 ya usse zyada hona chahiye.

--? FETCH:

--? Ye batata hai ke skip karne ke baad kitni rows chahiye.

--? Iska number 1 ya usse zyada hona chahiye.

--? FIRST aur NEXT dono same kaam karte hain.

--? ROW aur ROWS bhi interchangeably use ho sakte hain.

--? ⚠️ Important Notes:
--? OFFSET aur FETCH tabhi kaam karte hain jab tumhare query mein ORDER BY clause ho.

--? Ye clauses SQL Server 2012 ya uske baad ke versions mein available hain.

--? Ye TOP keyword ka ek zyada flexible alternative hai — specially jab tum pagination banana chah rahe ho (e.g., page 1 = 1–10, page 2 = 11–20 rows).


-- 🧪 Examples
--! 🔹 Example 1 – All rows with ORDER BY

SELECT product_name, list_price
FROM production.products
ORDER BY list_price, product_name;
-- Yahan koi limit nahi lagi — ye sirf sorting karega.

--! 🔹 Example 2 – Pehli 10 rows skip karo, baaki sab dikhao

SELECT product_name, list_price
FROM production.products
ORDER BY list_price, product_name
OFFSET 10 ROWS;

-- ➡️ Ye query 10 products skip karegi aur baaki sab return karegi.

--! 🔹 Example 3 – Pehli 10 skip karo, uske baad ki 10 rows fetch karo


SELECT product_name, list_price
FROM production.products
ORDER BY list_price, product_name
OFFSET 10 ROWS
FETCH NEXT 10 ROWS ONLY;
-- ➡️ Iska matlab:

-- Skip 1–10

-- Return 11–20

--! 🔹 Example 4 – Top 10 Most Expensive Products

SELECT product_name, list_price
FROM production.products
ORDER BY product_name DESC, list_price
OFFSET 0 ROWS
FETCH FIRST 10 ROWS ONLY;


SELECT product_name, list_price
FROM production.products
ORDER BY list_price DESC, product_name
OFFSET 0 ROWS
FETCH FIRST 10 ROWS ONLY;


-- ➡️ Yahan:

-- OFFSET 0 → skip nothing

-- FETCH FIRST 10 → top 10 results (sabse mehngi products)

-- 🔚 Summary:
-- OFFSET → kitni rows skip karni hain

-- FETCH → skip ke baad kitni rows return karni hain

-- Dono ORDER BY ke sath use hote hain

-- Pagination aur limited result ke liye best hain

