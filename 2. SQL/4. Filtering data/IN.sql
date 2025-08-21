-- Quick Summary of IN

-- IN = check if a value matches any value in a list

-- Equivalent to multiple OR conditions

-- city IN ('Los Angeles', 'Albany', 'Dallas')


-- same as

-- city = 'Los Angeles' OR city = 'Albany' OR city = 'Dallas'


-- NOT IN = check if a value is not in the list

-- Subquery ke sath bhi use hota hai (dynamic list ke liye)


-- ✅ Real-world Practice Queries
-- 1. Customers jo sirf California (CA), New York (NY), ya Texas (TX) se hain
SELECT first_name, last_name, state
FROM sales.customers
WHERE state IN ('CA', 'NY', 'TX');

-- 2. Customers jo Los Angeles ya San Diego city me rehte hain
SELECT first_name, last_name, city, state
FROM sales.customers
WHERE city IN ('Los Angeles', 'San Diego');

-- 3. Orders jinki status ('Shipped', 'Completed') me hai
SELECT order_id, customer_id, order_status
FROM sales.orders
WHERE order_status IN ('Shipped', 'Completed');

-- 4. Customers jinhe California aur New York ko chod kar dikhana hai
SELECT first_name, last_name, state
FROM sales.customers
WHERE state NOT IN ('CA', 'NY');

-- 5. Subquery Example → Customers jinhone $500 se zyada ke orders kiye hain

SELECT first_name, last_name, customer_id
FROM sales.customers c
    WHERE customer_id IN (
      SELECT customer_id
      FROM sales.order_items 
      WHERE list_price > 500
)
