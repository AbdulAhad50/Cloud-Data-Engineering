-- Introduction to SQL Server SELECT DISTINCT clause
-- Kabhi kabhi tumhe sirf kisi table ke ek column ke unique values 
-- chahiye hote hain. Ye kaam tum SELECT DISTINCT clause ke zariye kar sakte ho.



-- Basic Syntax:


--SELECT DISTINCT column_name
--FROM table_name;

--Ye query column_name me se sirf unique values return 
--karegi, yani duplicate values ko remove kar degi.

--Agar tum DISTINCT clause multiple columns ke sath use karte ho, to:


--SELECT DISTINCT column_name1, column_name2, ...
--FROM table_name;
--Is case me uniqueness ka check dono (ya jitne columns specify kiye) ke combination pe hoga. Sirf wahi rows return hongi jinka combination unique hoga.

--Agar column me NULL values hain to DISTINCT un sab ko ek hi NULL treat karega, aur sirf ek NULL rakhega, baaki ko remove karega.




--------------------------------------------------------------------------------------------------------


-- Examples
-- 1) SELECT DISTINCT with one column
-- Tum sales.customers table me se sab cities lena chahte ho:


SELECT city
FROM sales.customers
ORDER BY city;
--Isme duplicate cities aa sakti hain.

-- Duplicate remove karne ke liye:


SELECT DISTINCT city
FROM sales.customers
ORDER BY city;
--Isme sirf unique cities aayengi.

--2) SELECT DISTINCT with multiple columns
--Tum city aur state ka unique combination chahte ho:


SELECT DISTINCT city, state
FROM sales.customers;

--Yahan city aur state ka combination unique 
--hoga, matlab agar ek city do states me hai to dono show honge.

--3) SELECT DISTINCT with NULL
--hone numbers ka unique list lena ho to:


SELECT DISTINCT phone
FROM sales.customers
ORDER BY phone;
--Agar phone column me NULL values hain to ye sirf ek NULL rakhega.

--DISTINCT vs. GROUP BY
--Dono ka kaam duplicate remove karna hota hai.
--Example GROUP BY:

SELECT city, state, zip_code
FROM sales.customers
GROUP BY city, state, zip_code
ORDER BY city, state, zip_code;
--Ye exactly equal hai:


SELECT DISTINCT city, state, zip_code
FROM sales.customers;
--Farq:

--DISTINCT tab use hota hai jab sirf unique rows chahiye.

--GROUP BY tab use hota hai jab aggregate functions (COUNT, SUM, etc.) bhi lagane hain.

--Summary
--SELECT DISTINCT ek ya zyada columns me se duplicate remove karta hai.

--NULL ko ek hi value treat karta hai.

--GROUP BY aggregation ke liye use hota hai, DISTINCT simple uniqueness ke liye.

--!Question (Scenario-Based)

--? 👉 Tumhe sales.customers table se un states ki list chahiye jahan par multiple cities ho.
--? ⚠️ Dhyan rahe: States unique hone chahiye (duplicate states na aaye).


SELECT DISTINCT state, city FROM sales.customers