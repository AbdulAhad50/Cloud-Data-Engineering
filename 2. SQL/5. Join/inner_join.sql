-- 🔹 INNER JOIN in SQL Server
--! 1. Definition

-- INNER JOIN ka use tab hota hai jab tum do (ya zyada) related tables se data lana chahte ho.

-- Result set me sirf wahi rows aati hain jo dono tables me match hoti hain.

-- Agar match nahi hota → row ignore ho jaati hai.



--! 2. Syntax
-- SELECT columns
-- FROM table1 t1
-- INNER JOIN table2 t2
--     ON t1.common_column = t2.common_column;

--? 👉 ON condition batata hai ki dono tables kis column ke basis pe join honge.


--! 3. Example: Products aur Categories

-- Tumhare paas 2 tables hain:

-- production.products

-- product_id

-- product_name

-- category_id

-- brand_id

-- list_price

-- production.categories

-- category_id

-- category_name

--? Ab agar tum products ke saath unki category ka naam bhi dekhna chahte ho:

SELECT
    p.product_name,
    c.category_name,
    p.list_price
FROM
    production.products p
INNER JOIN production.categories c
    ON c.category_id = p.category_id
ORDER BY
    p.product_name DESC;


--? ✅ Output: Har product apni category ke saath show hoga (sirf wahi products jinki category table me entry hai).










--! Tricky Practice Question (Interview Style)

--? 👉 Tumhe ek query likhni hai jo ye dikhaye:

--? Product Name

--? Category Name

--? Brand Name

--? List Price

--? Aur condition:

--? Sirf wo products show karo jinka list_price 500 se 1000 ke beech hai.

--? Saath hi un products ko exclude karo jo "Samsung" brand ke hain.


SELECT product_name, category_name, brand_name, list_price 
FROM production.products as p
INNER JOIN production.categories as c
  on c.category_id = p.category_id
INNER JOIN production.brands as b 
  on b.brand_id = p.brand_id
WHERE list_price BETWEEN 500 AND 1000 AND brand_name not in ('Samsung')



--! 4. INNER JOIN with 3 Tables

-- Agar tumhe products + categories + brands ko join karna ho:

SELECT
    p.product_name,
    c.category_name,
    b.brand_name,
    p.list_price
FROM
    production.products p
INNER JOIN production.categories c 
    ON c.category_id = p.category_id
INNER JOIN production.brands b 
    ON b.brand_id = p.brand_id
ORDER BY
    p.product_name DESC;


--? ✅ Output: Product ka naam + category ka naam + brand ka naam + price.

--! 5. Key Points

-- Agar product ki category NULL hai ya category table me missing hai → wo product result me nahi aayega.

-- INNER JOIN = Sirf matching records.

--? INNER keyword optional hai → JOIN likho tab bhi same kaam karega.











--! 🧩 Ab tumhare liye Advance & Tricky Practice Questions:

--? Agar tumhe sirf un categories ke products chahiye jinke brand 3 ya usse zyada hain, to query kaise likhoge?
--? (Hint: GROUP BY, HAVING COUNT(DISTINCT brand_id))

--? Tumhe har brand ke liye minimum aur maximum price ka product name nikalna ho, to kya query likhoge?
--? (Hint: Window functions ya ROW_NUMBER())

--? Ek query likho jisme tum un brands ke products dikhavo jinki category ka naam "Electronics" hai lekin price Samsung ke products se hamesha zyada hai.
--? (Hint: Subquery in WHERE with comparison)