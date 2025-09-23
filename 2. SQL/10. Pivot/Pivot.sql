--! 🔹 PIVOT kya karta hai?

--? Normally query ka result rows me hota hai.

--? PIVOT use karke hum rows ko columns me convert kar dete hain (matrix style table).

--? Saath hi ek aggregate function (SUM, COUNT, AVG, etc.) apply hota hai.


SELECT * 
FROM (
    SELECT category_name, product_id
    FROM production.products p
    INNER JOIN production.categories c 
      ON c.category_id = p.category_id
) t
PIVOT(
    COUNT(product_id)
    FOR category_name IN (
        [Children Bicycles],
        [Comfort Bicycles],
        [Mountain Bikes],
        [Road Bikes]
    )
) AS pivot_table;




-- 🔹 PIVOT kya karta hai?

-- Normally query ka result rows me hota hai.

-- PIVOT use karke hum rows ko columns me convert kar dete hain (matrix style table).

-- Saath hi ek aggregate function (SUM, COUNT, AVG, etc.) apply hota hai.

-- 🔹 PIVOT ka General Syntax
-- SELECT <columns you want to keep>
-- FROM (
--     <base query>
-- ) AS t
-- PIVOT(
--     <aggregate_function>(<column_to_aggregate>)
--     FOR <column_whose_values_become_columns>
--     IN ([value1], [value2], [value3], ...)
-- ) AS pivot_table;

-- 🔹 Example 1: Simple Pivot

-- Maan lo hume har category_name ka product count chahiye as columns.

SELECT * 
FROM (
    SELECT category_name, product_id
    FROM production.products p
    INNER JOIN production.categories c 
      ON c.category_id = p.category_id
) t
PIVOT(
    COUNT(product_id)
    FOR category_name IN (
        [Children Bicycles],
        [Comfort Bicycles],
        [Mountain Bikes],
        [Road Bikes]
    )
) AS pivot_table;


-- 👉 Isme:

-- category_name ke unique values → ban gaye columns.

-- COUNT(product_id) → aggregate function laga.

-- 🔹 Example 2: Row Grouping with Pivot

-- Agar hum model_year ko bhi include karein:

SELECT * 
FROM (
    SELECT category_name, product_id, model_year
    FROM production.products p
    INNER JOIN production.categories c 
      ON c.category_id = p.category_id
) t
PIVOT(
    COUNT(product_id)
    FOR category_name IN (
        [Children Bicycles],
        [Comfort Bicycles],
        [Mountain Bikes],
        [Road Bikes]
    )
) AS pivot_table;


-- 👉 Ab har model_year ke liye ek row milegi, aur categories columns me hongi.

-- 🔹 Limitation

-- Tumhe manually columns list karni padti hai:
-- (IN ([Children Bicycles], [Mountain Bikes], ...))

-- 🔹 Dynamic Pivot (Auto Columns)

-- Agar future me naye category add ho jaayein to manually query change karna boring hai.
-- Iske liye dynamic SQL use karte hain:

DECLARE 
    @columns NVARCHAR(MAX) = '',
    @sql NVARCHAR(MAX) = '';

-- generate list of columns
SELECT @columns += QUOTENAME(category_name) + ','
FROM production.categories
ORDER BY category_name;

SET @columns = LEFT(@columns, LEN(@columns) - 1);

-- construct dynamic query
SET @sql = '
SELECT * 
FROM (
    SELECT category_name, model_year, product_id
    FROM production.products p
    INNER JOIN production.categories c 
      ON c.category_id = p.category_id
) t
PIVOT(
    COUNT(product_id)
    FOR category_name IN ('+ @columns +')
) AS pivot_table;';

-- run it
EXEC sp_executesql @sql;


-- 👉 Ab ye query automatically sari categories ko columns bana degi.

-- ✅ Summary:

-- PIVOT rows ko columns banata hai.

-- Hamesha aggregate function lagana zaroori hai.

-- Static pivot me manually values list karni padti hai.

-- Dynamic pivot se automatic ho jata hai.