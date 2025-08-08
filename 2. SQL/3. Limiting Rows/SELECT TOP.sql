SELECT TOP 10
    product_name, 
    list_price
FROM production.products
ORDER BY list_price DESC

SELECT  
    product_name, 
    list_price
FROM production.products
ORDER BY list_price DESC


SELECT TOP 2 PERCENT
    product_name, 
    list_price
FROM production.products
ORDER BY list_price DESC;

SELECT TOP 3 WITH TIES
    product_name, 
    list_price
FROM production.products
ORDER BY list_price DESC;

