# Tabela 1: customers
CREATE TABLE customers (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email CHAR(30) NOT NULL,
    balance DECIMAL(10,2) NOT NULL DEFAULT 0.00,
    created_at TIME
);
# Tabela 2: orders
CREATE TABLE orders (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    customer_id INT UNSIGNED,
    total_price DECIMAL(10,2) NOT NULL,
    delivery_time TIME,
    
    FOREIGN KEY (customer_id) REFERENCES customers(id)
);
 
INSERT INTO customers (name, email, balance, created_at)
VALUES
('Jan Kowalski', 'jan@example.com', 150.00, '08:30:00'),
('Anna Nowak', 'anna.n@example.com', 200.50, '09:15:00'),
('Piotr Zielinski', 'piotr.z@example.com', 0.00, '10:00:00'),
('Kasia Wiśniewska', 'kasia@example.com', 99.99, '11:45:00'),
('Tomasz Lis', 'tomasz.l@example.com', 1000.00, '12:00:00');
 
INSERT INTO orders (customer_id, total_price, delivery_time)
VALUES
(1, 49.99, '14:00:00'),
(1, 19.99, '16:30:00'),
(2, 120.00, '18:00:00'),
(2, 5.50, '19:15:00'),
(3, 250.75, '20:00:00'),
(4, 9.99, '21:30:00'),
(5, 999.99, '22:00:00');

/*
Zadanie 1 – Czy można utworzyć zamówienie dla klienta o ID -1?

Spróbuj:

INSERT INTO orders (customer_id, total_price, delivery_time)
VALUES (-1, 100.00, '12:00:00');

Pytania:
Czy customer_id może być ujemne?
Dlaczego nie ma sensu mieć klienta o ID = -1?
Które ograniczenie zablokuje ten INSERT:
	UNSIGNED
	FOREIGN KEY
	oba?
*/






/* 
zadanie 2





CREATE TABLE orders (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    total_price FLOAT
);

Dodaj trzy zamówienia:

INSERT INTO orders (total_price)
VALUES
(0.10),
(0.20),
(0.30);

Następnie policz sumę:

SELECT SUM(total_price) AS total
FROM orders;
Pytanie

Jaki wynik powinien otrzymać właściciel sklepu?


*/

/*
Zadanie 3

CREATE TABLE orders (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    total_price DECIMAL(10,2)
);

Ponownie dodaj dane:

INSERT INTO orders (total_price)
VALUES
(0.10),
(0.20),
(0.30);

Oblicz sumę:

SELECT SUM(total_price) AS total
FROM orders;

*/

/*
Zadanie 4 

CRATE TABLE test_time (
 id INT PRIMARY KEY AUTO_INCREMENT,
 t1 TIME,
 t2 TIME(3)
);
INTO test_time (t1, t2)
VALUES ('12:30:15.987', '12:30:15.987');
SELECT * FROM test_time;

*/

/*
Zadanie 5

CREATE TABLE products (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    rating TINYINT UNSIGNED
);
-- skala od 0 - 5
INSERT INTO products (name, rating)
VALUES
('Laptop', 5),
('Myszka', 4),
('Klawiatura', 5),
('Monitor', 3),
('Słuchawki', 4);

SELECT name, rating FROM products;	

PYTANIA
1. Dlaczego użyto TINYINT?

 odpowiedz:

ile bajtów zajmuje?
czy potrzebujemy większego zakresu?
*/

/*
Zadanie 6

CREATE TABLE test_zerofill (
 id INT AUTO_INCREMENT PRIMARY KEY,
 nr1 INT(5) ZEROFILL,
 nr2 TINYINT(3) ZEROFILL,
 nr3 INT(8) ZEROFILL
);

INSERT INTO test_zerofill (nr1, nr2, nr3) VALUES
 (7, 42, 123),
 (42, 5, 9876543),
 (123, 100, 1);

SELECT * FROM test_zerofill;

jak zostana wypełnione dane 0



*/