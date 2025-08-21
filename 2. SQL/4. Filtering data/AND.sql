-- 1. AND operator kya hai?

-- SQL Server mein AND ek logical operator hai.

-- Ye tabhi TRUE return karta hai jab dono conditions TRUE hon.

-- Agar ek bhi condition FALSE ho jaye, to result FALSE.

-- 2. Q use karte hain?

-- Jab hume multiple conditions lagani hoti hain ek hi query mein.

-- Example: mujhe customers chahiye jo California ke hain aur city = 'San Diego' hai.

-- SELECT * 
-- FROM sales.customers
-- WHERE state = 'CA' AND city = 'San Diego';


-- Ye query sirf wahi rows degi jisme dono conditions TRUE hain.

-- 3. Kahan use karna hai?

-- Jab hume data filter karna hai multiple conditions ke sath.

-- Example scenarios:

-- Ek state + ek city filter karna.

-- Kisi product ka category_id = 1 AND price > 500.

-- Kisi customer ka country = 'USA' AND active = 1.

-- 4. Faide aur Nuksaan

-- ✅ Faide:

-- Ek query mein exact filter lag jata hai.

-- Multiple conditions combine kar ke data zyada precise milta hai.

-- ❌ Nuksaan:

-- Agar condition galat likh di to result 0 rows aa sakta hai.

-- Parentheses na use karne se kabhi kabhi query ka logic galat ho jata hai (jab OR ke sath mix karein).


-- Question (tum solve karoge 👇)

--? 👉 Tumhe sales.customers table se un customers ki list chahiye jinke state = 'CA' aur city = 'Los Angeles' hai. Lekin tumhe sirf first_name, last_name aur email dikhana hai.

SELECT first_name, last_name, email
FROM sales.customers
WHERE state = 'CA' AND city = 'Los Angeles';
