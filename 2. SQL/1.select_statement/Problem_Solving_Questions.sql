-- 🧪 Problem Solving Questions (Practice Time)
-- Assume: Table ka naam hai sales.customers jisme columns hain:
-- customer_id, first_name, last_name, email, phone, state, city


-- ✍️ Questions:
-- 1. Write a query to display all customer emails.

select email from sales.customers -- solve

-- 2. Retrieve the first and last name of customers who live in Texas (TX).
SELECT *
FROM sales.customers
WHERE state = 'TX'

-- 3. Show all customer records sorted by last_name in descending order
SELECT *
FROM sales.customers
ORDER BY last_name 

-- 4. Find how many customers are in each state.
SELECT state , Count(*)
FROM sales.customers
Group By state 

-- 5. Find all cities in NY where number of customers is more than 5.

SELECT city,  Count(*)
FROM sales.customers
Where state = 'NY'
Group by city
Having Count(*) > 5

-- 6. Retrieve all data for customers who live in either 'CA' or 'NY'.
SELECT *
FROM sales.customers
where state = 'CA'  or  state =  'NY'

-- 7. Find out total number of customers in the table.
SELECT COUNT(*) AS total_customers
FROM sales.customers;




