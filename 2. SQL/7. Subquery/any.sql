-- 🔑 ANY Operator kya hai?

-- ANY ek logical operator hai.

-- Syntax:

-- scalar_expression comparison_operator ANY (subquery)


-- Matlab: outer value ko compare karta hai subquery ke result set ke har ek value se.

-- Agar kisi ek value ke sath comparison TRUE ho jaye → poora condition TRUE.

-- Agar sabhi fail ho gaye → FALSE.

-- 👉 SOME operator = ANY operator (dono same hain).

-- 📌 Example 1 – Basic Usage

SELECT product_name, list_price
FROM production.products
WHERE product_id = ANY (
    SELECT product_id
    FROM sales.order_items
    WHERE quantity >= 2
);


-- 👉 Is query ka matlab:

-- Outer query → products table ke products select karegi.

-- Subquery → aise product_id la rahi hai jo orders me quantity >= 2 ke sath aaye hain.

-- = ANY ka matlab hai agar product_id subquery ke kisi bhi ek product_id ke barabar hai → include.

-- 📌 Example 2 – > ke sath ANY

SELECT product_name, list_price
FROM production.products
WHERE list_price > ANY (
    SELECT list_price
    FROM production.products
    WHERE category_id = 1
);


-- 👉 Matlab:

-- Outer query ke product ka price us category ke kisi ek product ke price se bada ho → TRUE.

-- Isme product ka price chhoti se chhoti value se compare hoga, agar bada hai → pass.

-- 📌 Example 3 – < ANY vs > ANY

-- > ANY (subquery) = greater than the minimum value in subquery.

-- < ANY (subquery) = less than the maximum value in subquery.

-- Example:

SELECT product_name, list_price
FROM production.products
WHERE list_price < ANY (
    SELECT list_price
    FROM production.products
    WHERE category_id = 2
);


-- 👉 Matlab: product ka price category 2 ke sabse max price se chhota ho → TRUE.

-- 📌 ANY vs ALL

-- > ANY = greater than at least one value.

-- > ALL = greater than sabhi values.

-- Example:

-- -- ANY: greater than the lowest price in category 1
-- list_price > ANY (SELECT list_price FROM products WHERE category_id=1)

-- -- ALL: greater than the highest price in category 1
-- list_price > ALL (SELECT list_price FROM products WHERE category_id=1)

-- 🚀 Summary

-- ANY ek scalar ko ek list ke kisi ek value ke sath compare karta hai.

-- SOME = ANY.

-- Zyada tar use hota hai subqueries ke sath comparisons me.

-- Difference:

-- > ANY = greater than min.

-- < ANY = less than max.