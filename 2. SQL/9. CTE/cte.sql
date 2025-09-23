-- 🔑 CTE (WITH clause) Kya hai?

-- Ek temporary named result set jo ek query ke execution scope ke andar available hota hai.

-- Syntax:



WITH cte_sales_amounts (staff, sales, year) AS (
    SELECT    
        first_name + ' ' + last_name, 
        SUM(quantity * list_price * (1 - discount)),
        YEAR(order_date)
    FROM sales.orders o
    JOIN sales.order_items i ON i.order_id = o.order_id
    JOIN sales.staffs s ON s.staff_id = o.staff_id
    GROUP BY first_name + ' ' + last_name, YEAR(order_date)
)


SELECT staff, sales, year
FROM cte_sales_amounts
WHERE year = 2018;




--! 🚀 Key Features

--? Readable queries → nested subqueries ko naam de kar simplify kar deta hai.

--? Reusable → ek hi CTE ko multiple jagah reference kar sakte ho (same query ke andar).

--? Complex queries ko todna → jaise aggregates, joins, window functions.

--? Recursive queries → hierarchy (tree/graph data jaise employees, categories) handle karne ke liye.



--! 🎯 CTE vs Subquery

--? CTE = clean aur reusable, query samajhna easy.

--? Subquery = nested aur complex ho jati hai, readability kam hoti hai.