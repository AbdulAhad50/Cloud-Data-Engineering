--! problem solving questions


--! 🔍 Level 1 – Basic Understanding (Warm-up)
Q1:
-- Tumhare paas products table hai jisme columns hain:

-- product_id

-- product_name

-- price


SELECT * FROM production.products
order by list_price; --? solve 

-- 🔸 Fill in the blank aisa karo ke result lowest price to highest price mein aaye.


-----------------------------------------------------------------------

Q2:
--! Same products table hai. Tum chahte ho sabse mehngi cheez pehle aaye.


SELECT product_name, list_price FROM production.products
ORDER BY list_price desc;


--?🔸 ORDER BY clause complete karo taake highest price first aaye.


--! 🧠 Level 2 – Intermediate Sorting
--! Q3:
--? customers table mein columns hain:

--? first_name

--? last_name

--? state

--? city

--? Tum chahte ho ke:

--? Pehle result state ke mutabiq ascending

--? Fir usi state ke andar city ho descending

--? 🔸 Complete the query:

SELECT first_name, last_name, state, city
FROM sales.customers
ORDER BY state, city desc;


--! Q4:
--? orders table hai jisme:

--? order_id

--? customer_id

--? order_date

--? Tum chahte ho recent orders pehle dikhain. Write query for that.





--! 🧩 Level 3 – Logical Twists
-- Q5:
-- employees table mein columns hain:

-- emp_id

-- first_name

-- salary

-- joining_date

-- Tum chahte ho:

-- Pehle wo employee jinki salary zyada hai wo upar aayein

-- Aur agar salary same hai to joining_date ke mutabiq purane wale pehle aayein

-- 🔸 Write the ORDER BY clause.


SELECT emp_id,first_name,salary, joining_date
from emp.employees
ORDER BY Len(salary), joining_date