-- Tworzenie tabeli
CREATE TABLE orders (
    order_id INT PRIMARY KEY,
    customer_name VARCHAR(100),
    order_date DATETIME,
    total_amount DECIMAL(10, 2)
);

-- Wstawianie danych
INSERT INTO orders (order_id, customer_name, order_date, total_amount) VALUES
(1, 'Jan Kowalski', '2025-09-01 10:00:00', 150.50),
(2, 'Anna Nowak', '2025-09-10 14:30:00', 299.99),
(3, 'Michał Wiśniewski', '2025-09-15 09:15:00', 75.00),
(4, 'Ewa Zając', '2025-09-20 16:45:00', 200.00);