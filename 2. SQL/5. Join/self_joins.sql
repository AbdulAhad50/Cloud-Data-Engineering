-- 🔎 Self Join Kya Hai?

-- Self Join ek INNER JOIN ya LEFT JOIN hota hai, jisme ek hi table ko do baar reference kiya jata hai.

-- Yeh mainly use hota hai:

-- Hierarchical data (jaise employee → manager relationship) nikalne ke liye.

-- Comparison karne ke liye rows ke beech (jaise ek hi city ke customers ka pair banana).

-- ⚡ Important Point:

-- Aliases dena mandatory hai, warna SQL Server confuse ho jaata hai.

-- 📖 Syntax
-- SELECT
--     select_list
-- FROM
--     T t1
-- [INNER | LEFT] JOIN T t2
--     ON join_predicate;

-- 🧑‍💼 Example 1 – Employee → Manager Relationship
SELECT
    sales.staffs.first_name + ' ' + sales.staffs.last_name,
    m.first_name + ' ' + m.last_name AS manager
FROM
    sales.staffs 
INNER JOIN sales.staffs m
    ON m.staff_id = sales.staffs.manager_id
ORDER BY
    manager;


-- 🟢 Explanation:

-- e = employees

-- m = managers

-- Output: har employee ke manager ka naam.

-- 👉 Agar LEFT JOIN use karoge to wo employees bhi milenge jin ke paas manager hi nahi hai (jaise CEO).

-- 🧮 Example 2 – Customers in Same City
SELECT
    c1.city,
    c1.first_name + ' ' + c1.last_name AS customer_1,
    c2.first_name + ' ' + c2.last_name AS customer_2
FROM
    sales.customers c1
INNER JOIN sales.customers c2
    ON c1.customer_id > c2.customer_id
   AND c1.city = c2.city
ORDER BY
    city, customer_1, customer_2;


-- 🟢 Explanation:

-- c1 aur c2 dono ek hi customers table se hain.

-- Condition c1.customer_id > c2.customer_id isliye hai taki duplicate pairs na bane.

-- Agar <> lagate to har pair do baar aata (ek ulta, ek seedha).

-- 🎯 Real-World Use Cases

-- Employee-Manager Hierarchy → Kaun kiske under kaam kar raha hai.

-- Customers in Same City → Ek city ke sare customers ka mutual list.

-- Products Price Comparison → Ek hi table ke andar products ke prices compare karna.

-- Friends Suggestion System → Ek user ke friends aur unke common friends dikhana.

-- 🧩 Tricky Practice Questions (Self Join)

-- Employees Hierarchy:
-- Har employee ke manager ka naam nikalo, aur manager ka manager (grand manager) bhi show karo.

-- Same City Customers:
-- Ek city ke sare customers ke unique pairs nikalo (duplicate avoid karte hue).

-- Price Comparison:
-- Products table me self join karke dikhaiye ki kaunsa product doosre product se mehenga hai aur kitne difference se.