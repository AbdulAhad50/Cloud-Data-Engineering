-- 🔑 UNION kya hai?

-- UNION ek set operator hai jo do ya zyada queries ke results ko combine karta hai.

-- Result set mein rows vertically add hoti hain (ek ke niche ek).

-- Default behavior → duplicates hata deta hai.

-- 🛠 Syntax
-- query_1
-- UNION
-- query_2;

-- Rules:

-- Dono queries mein columns ki count same honi chahiye.

-- Order bhi same hona chahiye.

-- Data types compatible hone chahiye (jaise INT aur BIGINT chalega, par INT aur VARCHAR bina cast ke nahi).

-- ⚖️ UNION vs UNION ALL

-- UNION → duplicate rows remove karta hai.

-- UNION ALL → duplicates bhi rakh leta hai.

-- Example:

SELECT first_name, last_name FROM sales.staffs
UNION
SELECT first_name, last_name FROM sales.customers;


-- 👉 Duplicates hat jaayenge.

SELECT first_name, last_name FROM sales.staffs
UNION ALL
SELECT first_name, last_name 
FROM sales.customers
GROUP BY first_name, last_name
HAVING COUNT(*) > 2


-- 👉 Duplicates bhi dikh jaayenge.

-- ⚖️ UNION vs JOIN

-- JOIN → results ko horizontally combine karta hai (new columns add).

-- UNION → results ko vertically combine karta hai (new rows add).

-- 👉 Socho tables ko Excel sheet ki tarah:

-- JOIN = ek hi row mein dono sheet ke columns jod do.

-- UNION = sheet 1 ke rows ke niche sheet 2 ke rows daal do.

-- 🛠 ORDER BY ke sath

-- ORDER BY hamesha last query ke end mein lagta hai, otherwise error aayega:

SELECT first_name, last_name FROM sales.staffs

UNION ALL
SELECT first_name, last_name FROM sales.customers
ORDER BY first_name, last_name;

-- 🧠 Quick Recap

-- UNION = combine queries vertically, duplicates remove karta hai.

-- UNION ALL = combine queries vertically, duplicates rakhta hai.

-- Columns same count/order/type hone chahiye.

-- ORDER BY last mein likhna hai.