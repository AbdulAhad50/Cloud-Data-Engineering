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


