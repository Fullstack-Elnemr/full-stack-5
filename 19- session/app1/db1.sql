CREATE DATABASE app1;

USE app1;

-- customers table
CREATE TABLE customers(
  id INT PRIMARY KEY AUTO_INCREMENT,
  f_name VARCHAR(20),
  l_name VARCHAR(20)
);

-- seller table
-- DROP TABLE seller; -- delete seller table
CREATE TABLE sellers(
  id INT PRIMARY KEY AUTO_INCREMENT,
  f_name VARCHAR(20),
  l_name VARCHAR(20)
);

-- products table
CREATE TABLE products(
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(20),
  price FLOAT,
  quantity INT,
  category_id INT
);

-- phones table
-- DROP TABLE phones;
CREATE TABLE phones(
  id INT,
  phone VARCHAR(20) PRIMARY KEY,
  entity CHAR(1)
);

-- category table
CREATE TABLE categories(

  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR (30)
);

-- payment_methods table
CREATE TABLE payment_methods(
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR (15)
);

-- invoices table
CREATE TABLE invoices(
  id INT PRIMARY KEY AUTO_INCREMENT,
  inv_date DATE NOT NULL,
  note TEXT,
  sub_total FLOAT NOT NULL,
  total FLOAT NOT NULL,
  tax FLOAT,
  customer_id INT,
  seller_id INT,
  payment_method_id INT
);


-- invoices_products table
CREATE TABLE invoices_products(
  invoice_id INT,
  product_id INT,
  quantity INT,
  amount FLOAT
);




