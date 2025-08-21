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




------------------------------------------------------------------------------------


--5. Scenario & Technical Questions

--💡 Scenario-based:

--1. Tumhe California state ke customers ka first name, last name, aur city chahiye. Query likho.

--2. Tumhare boss ko report chahiye ke kis city mein kitne customers hain (sirf CA state ke). Query likho.

--3. Tumhe woh cities chahiye jahan 10 se zyada customers hain (sirf CA ke). Query likho.

--4. Tumhe email IDs of all customers retrieve karni hain aur unhe first name ke alphabetical order mein 
--dikhana hai. Query likho.

--💡 Technical:

--4. SQL Server SELECT execution order kya hota hai? 
--(FROM, WHERE, GROUP BY, HAVING, SELECT, ORDER BY – kaun pehle run hota hai?)

--5. SELECT * ka production mein use karna kyu risky hai?

--6. WHERE aur HAVING mein difference kya hai?



--1. Tumhe California state ke customers ka first name, last name, aur city chahiye. Query likho.
--Question 1 Solve:

select first_name , last_name,city
from sales.customers
where state = 'CA'
order by city


-- 2. Tumhare boss ko report chahiye ke kis city mein kitne customers hain (sirf CA state ke). Query likho. 
--Question 2 Solve:

select city, COUNT(*) as all_customers
from sales.customers
where state = 'CA'
Group by city


--3. Tumhe woh cities chahiye jahan 10 se zyada customers hain (sirf CA ke). Query likho.
--Question 3 Solve:

select city, COUNT(*) as all_customers
from sales.customers
where state = 'CA'
Group by city
having COUNT(*) > 10


--4. Tumhe email IDs of all customers retrieve karni hain aur unhe first name ke alphabetical order mein dikhana hai. Query
--likho.
--Question 4 Solve:


select *
from sales.customers
order by first_name



----------------------------------------------------------------------------------------------------------------------------

-- 💡 Technical:

-- 1. SQL Server SELECT execution order kya hota hai? 
-- (FROM, WHERE, GROUP BY, HAVING, SELECT, ORDER BY – kaun pehle run hota hai?)
--	answer -> first Run FROM

-- 2. SELECT * ka production mein use karna kyu risky hai?
-- answer -> unwanted data atta hai or load mein ziyada time lagta hai agar bara data set ho

-- 3. WHERE aur HAVING mein difference kya hai?
-- answer -> where use normal filteration & having use with group by & aggeregation method


---------------------------------------------------------------------------------------------------------------------------

-- Question:
-- Boss chahte hain ek report jo yeh bataye:

-- California state ke customers mein

-- har city ka naam,

-- us city ke total customers ka count,

-- aur un customers ka average zip_code (numerical maana jaye).

-- Report customer count ke descending order mein honi chahiye.



select city, COUNT(*) as total_customer,  AVG(CAST( zip_code AS int))
from sales.customers
where state = 'CA'
Group by city


select AVG(CAST( zip_code AS int))
from sales.customers
where state = 'CA'


Group by city