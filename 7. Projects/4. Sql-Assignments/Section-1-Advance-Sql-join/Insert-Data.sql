INSERT INTO sportswear_schema.color (id, name, extra_fee) VALUES
(1, 'Red', 2.50),
(2, 'Blue', 1.00),
(3, 'Black', 0.00),
(4, 'White', 0.00),
(5, 'Green', 1.50);



--


INSERT INTO sportswear_schema.customer (id, first_name, last_name, favorite_color_id) VALUES
(1, 'Ali', 'Khan', 1),
(2, 'Sara', 'Ahmed', 3),
(3, 'Bilal', 'Malik', 2),
(4, 'Ayesha', 'Shaikh', 5),
(5, 'Omar', 'Raza', 4);


--


INSERT INTO sportswear_schema.category (id, name, parent_id) VALUES
(1, 'Men', NULL),
(2, 'Women', NULL),
(3, 'Shirts', 1),
(4, 'Pants', 1),
(5, 'Dresses', 2),
(6, 'Shoes', 2);


--


INSERT INTO sportswear_schema.clothing (id, name, size, price, color_id, category_id) VALUES
(1, 'Casual Shirt', 'M', 1500.00, 1, 3),
(2, 'Formal Shirt', 'L', 2000.00, 2, 3),
(3, 'Jeans', 'XL', 2500.00, 3, 4),
(4, 'Evening Dress', 'M', 5000.00, 5, 5),
(5, 'Sneakers', 'L', 3000.00, 4, 6);

--

INSERT INTO sportswear_schema.clothing_order (id, customer_id, clothing_id, items, order_date) VALUES
(1, 1, 1, 2, '2025-09-01'), 
(2, 2, 3, 1, '2025-09-02'),
(3, 3, 2, 3, '2025-09-03'),  
(4, 4, 4, 1, '2025-09-04'), 
(5, 5, 5, 2, '2025-09-05'); 
