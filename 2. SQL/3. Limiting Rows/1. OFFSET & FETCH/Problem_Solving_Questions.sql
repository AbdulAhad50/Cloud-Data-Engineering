--! 🧠 LEVEL 1 – Basic Pagination Concepts
--? 🔹 Q1:
--? production.products table mein ye columns hain:

--? product_id

--? product_name

--? list_price

--? Sawal:
--? Tumhe first 10 most expensive products dikhane hain.
--? 👉 Query likho jo OFFSET aur FETCH ka use karke sirf top 10 records laaye (descending price ke sath).

--! Solve -> 

select product_id, product_name , list_price
from production.products
order by list_price DESC
OFFSET 0 ROWS
FETCH FIRST 10 ROWS ONLY


--! 🔹 Q2:
-- Isi table ko use karo.

--? Sawal:
--? Tumhe 6th se leke 10th number tak ke products dikhane hain (based on list_price descending).
--? 👉 Query likho jisme pehle 5 skip ho jaayein aur aglay 5 fetch hoon.

--! Solve -> 
select product_id, product_name , list_price
from production.products
order by list_price DESC
OFFSET 5 ROWS
FETCH NEXT 5 ROWS ONLY


--! 🧠 LEVEL 2 – Paginated View
--! 🔹 Q3:
--? sales.customers table mein ye columns hain:

--? customer_id

--? first_name

--? last_name

--? Sawal:

--? Ek paginated view banao jisme har page mein 20 customers aate hoon (ordered by customer_id).
--? 👉 Page 3 ke customers ko fetch karo.

--! Solve -> 
select product_id, product_name , list_price
from production.products
order by list_price DESC
OFFSET 0 ROWS
FETCH FIRST 10 ROWS ONLY


--! 🔹 Q4:
--? sales.orders table mein columns hain:

--? order_id

--? order_date

--? customer_id

--? Sawal:
--? Tumhe latest orders ka paginated result chahiye jisme page size 15 ho.
--? 👉 Page 2 ka data fetch karo.

--! Solve -> 
SELECT order_id, order_date, customer_id  from sales.orders
ORDER BY order_date DESC
OFFSET 15 ROWS
FETCH NEXT 15 ROWS ONLY



