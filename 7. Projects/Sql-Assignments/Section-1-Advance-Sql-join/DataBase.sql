CREATE DATABASE sportswear_db;



CREATE SCHEMA sportswear_schema;




-- 1. Color Table
CREATE TABLE sportswear_schema.color (
    id INT PRIMARY KEY, 
    name VARCHAR(50) NOT NULL, 
    extra_fee DECIMAL(10,2) DEFAULT 0
);

-- 2. Customer Table
CREATE TABLE sportswear_schema.customer (
    id INT PRIMARY KEY, 
    first_name VARCHAR(50) NOT NULL, 
    last_name VARCHAR(50) NOT NULL, 
    favorite_color_id INT,
    FOREIGN KEY (favorite_color_id) REFERENCES sportswear_schema.color(id)
);

-- 3. Category Table
CREATE TABLE sportswear_schema.category (
    id INT PRIMARY KEY, 
    name VARCHAR(100) NOT NULL, 
    parent_id INT NULL,
    FOREIGN KEY (parent_id) REFERENCES sportswear_schema.category(id)
);

-- 4. Clothing Table
CREATE TABLE sportswear_schema.clothing (
    id INT PRIMARY KEY, 
    name VARCHAR(100) NOT NULL, 
    size VARCHAR(10) CHECK (size IN ('S', 'M', 'L', 'XL', '2XL', '3XL')), 
    price DECIMAL(10,2) NOT NULL, 
    color_id INT, 
    category_id INT,
    FOREIGN KEY (color_id) REFERENCES sportswear_schema.color(id),
    FOREIGN KEY (category_id) REFERENCES sportswear_schema.category(id)
);

-- 5. Clothing Order Table
CREATE TABLE sportswear_schema.clothing_order (
    id INT PRIMARY KEY, 
    customer_id INT, 
    clothing_id INT, 
    items INT NOT NULL CHECK (items > 0), 
    order_date DATE NOT NULL,
    FOREIGN KEY (customer_id) REFERENCES sportswear_schema.customer(id),
    FOREIGN KEY (clothing_id) REFERENCES sportswear_schema.clothing(id)
);
