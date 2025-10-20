SELECT 
    cust.last_name,
    cust.first_name,
    clr.name AS favorite_color
FROM sportswear_schema.customer cust
JOIN sportswear_schema.color clr 
    ON cust.favorite_color_id = clr.id
LEFT JOIN sportswear_schema.clothing_order co 
    ON cust.id = co.customer_id
WHERE co.id IS NULL;
