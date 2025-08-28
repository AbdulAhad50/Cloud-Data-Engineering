-- Grouping Sets


SELECT
    b.brand_name AS brand,
    c.category_name AS category,
    p.model_year,
    ROUND(
        SUM(quantity * i.list_price * (1 - discount)),
        0
    ) sales
FROM sales.order_items i
INNER JOIN production.products p 
    ON p.product_id = i.product_id
INNER JOIN production.brands b 
    ON b.brand_id = p.brand_id
INNER JOIN production.categories c 
    ON c.category_id = p.category_id
GROUP BY
    b.brand_name,
    c.category_name,
    p.model_year
ORDER BY
    b.brand_name,
    c.category_name,
    p.model_year;



-- 2. Basic Grouping Set Example

-- Ek grouping set ka matlab hai ke aap kis column ya columns ke hisaab se group kar rahe ho.

Example:

SELECT
    brand,
    category,
    SUM(sales) sales
FROM sales.sales_summary
GROUP BY brand, category, model_year;



SELECT
    brand,
    category,
    SUM(sales) sales
FROM sales.sales_summary
GROUP BY brand, category;
--Yeh (brand, category) grouping set ka example hai.




SELECT brand, category, SUM(sales)
FROM sales.sales_summary
GROUP BY brand, category

UNION ALL

SELECT brand, NULL, SUM(sales)
FROM sales.sales_summary
GROUP BY brand

UNION ALL

SELECT NULL, category, SUM(sales)
FROM sales.sales_summary
GROUP BY category

UNION ALL

SELECT NULL, NULL, SUM(sales)
FROM sales.sales_summary;




SELECT
    brand,
    category,
    SUM(sales) as total_sales
FROM sales.sales_summary
GROUP BY GROUPING SETS (
    (brand, category),  -- brand aur category dono
    (brand),            -- sirf brand
    (category),         -- sirf category
    ()                  -- grand total
)
ORDER BY brand, category;




-- 🔥 Ab tumhare liye tricky practice question

-- sales.sales_summary table me se ek query likho jo:

-- Brand aur Category level par sales dikhaye

-- Sirf Brand level par total dikhaye

-- Sirf Category level par total dikhaye

-- Grand total bhi dikhaye

-- Aur ek column ho level_type jisme likha ho:

-- "Brand+Category"

-- "Brand Total"

-- "Category Total"

-- "Grand Total"

-- 👉 Yeh CASE WHEN + GROUPING() ke sath solve hoga.

-- Kya tum chahte ho main iska skeleton query likh kar du ya tum khud try karoge pehle?
