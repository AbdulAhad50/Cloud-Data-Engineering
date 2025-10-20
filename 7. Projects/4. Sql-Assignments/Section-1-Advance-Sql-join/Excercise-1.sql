SELECT 
    cth.name AS clothes,
    clr.name AS color,
    cust.last_name,
    cust.first_name
FROM sportswear_schema.clothing_order co
JOIN sportswear_schema.customer cust 
    ON co.customer_id = cust.id
JOIN sportswear_schema.clothing cth 
    ON co.clothing_id = cth.id
JOIN sportswear_schema.color clr 
    ON cth.color_id = clr.id
WHERE cth.color_id = cust.favorite_color_id
ORDER BY clr.name ASC;
