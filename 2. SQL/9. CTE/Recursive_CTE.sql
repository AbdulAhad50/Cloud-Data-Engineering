-- -- Recursive CTE kya hai?

-- -- Ek CTE jo apne aap ko reference karta hai (cte_name ke andar phir se cte_name use hota hai).

-- Yeh ek loop ki tarah kaam karta hai: ek base query (anchor member) → uske results se agla step (recursive member) → tab tak chalti hai jab tak termination condition milti hai.

-- 📘 Recursive CTE Structure
-- WITH cte_name (columns...) AS
-- (
--     -- Anchor member (starting point)
--     SELECT ...
    
--     UNION ALL
    
--     -- Recursive member (calls cte_name)
--     SELECT ...
--     FROM cte_name
--     JOIN ... ON ...
--     WHERE ... -- termination condition
-- )
-- SELECT * FROM cte_name;

-- Parts:

-- Anchor Member → base result set (jaise top manager, ya Monday).

-- Recursive Member → apne upar build karta hai (jaise manager ke subordinates, ya Monday ke baad Tuesday).

-- Termination Condition → kab rukna hai (e.g. n < 6).

-- 🚀 Examples
-- 1) Simple Example (Weekdays)
WITH cte_numbers(n, weekday) AS (
    -- Anchor: start with Monday
    SELECT 0, DATENAME(WEEKDAY, 0)
    
    UNION ALL
    
    -- Recursive: next day until Sunday
    SELECT n + 1, DATENAME(WEEKDAY, n + 1)
    FROM cte_numbers
    WHERE n < 6
)
SELECT weekday FROM cte_numbers;


-- 👉 Output: Monday, Tuesday, Wednesday, … Sunday.

-- 2) Hierarchy Example (Employees / Managers)

-- sales.staffs table me har employee ka manager_id hai.

-- WITH cte_org AS (
--     -- Anchor: top manager (manager_id IS NULL)
--     SELECT staff_id, first_name, manager_id
--     FROM sales.staffs
--     WHERE manager_id IS NULL

--     UNION ALL
    
--     -- Recursive: find subordinates of each manager
--     SELECT e.staff_id, e.first_name, e.manager_id
--     FROM sales.staffs e
--     INNER JOIN cte_org o ON o.staff_id = e.manager_id
-- )
-- SELECT * FROM cte_org;


-- 👉 Yeh recursively top manager → uske direct reports → unke subordinates → aur neeche ke staff sab nikal lega.

-- ⚠️ Important Notes

-- Termination condition zaroori hai (warna infinite loop ban jayega).

-- Recursive CTE me UNION ALL use karte hain (warna duplicates remove karne me performance issue ho sakta hai).

-- Har iteration ek layer aur depth deta hai hierarchy ka.

-- 💡 Recursive CTE ka sabse bada use case:

-- Organization chart (manager → employees)

-- Category hierarchy (parent → child)

-- Bill of materials (product → components → sub-components)