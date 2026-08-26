CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    product_name VARCHAR(50),
    category VARCHAR(30),
    price DECIMAL(10,2),
    quantity INT
);

INSERT INTO products(product_name, category, price, quantity) VALUES
('Laptop Lenovo', 'Elektronika', 3500.00, 5),
('Laptop Dell', 'Elektronika', 4200.00, 3),
('Monitor Samsung', 'Elektronika', 900.00, 10),
('Klawiatura Logitech', 'Akcesoria', 150.00, 20),
('Mysz Logitech', 'Akcesoria', 80.00, 30),
('Biurko', 'Meble', 700.00, 4),
('Krzesło', 'Meble', 450.00, 8);

-- Zadania do MAX()
-- === Zadanie 1 ===
-- Wyświetl najwyższą cenę produktu.
 


-- === Zadanie 2
-- Znajdź największą ilość produktu znajdującą się na magazynie.



-- Zadania do MIN()
-- === Zadanie 3
-- Wyświetl najniższą cenę produktu.
 
 

-- === Zadanie 4
-- Znajdź produkt, którego liczba sztuk jest najmniejsza.
 


-- Zadania do SUM()
-- === Zadanie 5
-- Oblicz łączną liczbę produktów znajdujących się na magazynie.
 
 
-- === Zadanie 6
-- Oblicz sumę wszystkich cen produktów.
 


-- Zadania do AVG()
-- === Zadanie 7
-- Oblicz średnią cenę wszystkich produktów.
 
 
 
-- === Zadanie 8
-- Oblicz średnią ilość produktów na magazynie.

 

-- Zadania do COUNT()
-- === Zadanie 9
-- Policz liczbę wszystkich produktów.

 

-- === Zadanie 10
-- Policz, ile różnych kategorii znajduje się w tabeli.
  
-- === Zadanie 11
-- Wyświetl jednocześnie:
-- najwyższą cenę,
-- najniższą cenę,
-- średnią cenę.

  
-- === Zadanie 12
-- Dla każdej kategorii wyświetl:
-- liczbę produktów,
-- średnią cenę.
 