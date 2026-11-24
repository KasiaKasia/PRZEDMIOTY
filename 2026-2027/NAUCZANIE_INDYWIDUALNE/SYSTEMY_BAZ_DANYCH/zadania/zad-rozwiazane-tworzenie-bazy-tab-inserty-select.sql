 
-- ZADANIE 1 – Utworzenie bazy danych 

CREATE DATABASE magazyn_elektroniki;

 
-- ZADANIE 2 – Wybranie bazy danych 

USE magazyn_elektroniki;

 
-- ZADANIE 3 – Utworzenie tabeli 

CREATE TABLE urzadzenia (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nazwa_urzadzenia VARCHAR(100) NOT NULL,
    producent VARCHAR(50) NOT NULL,
    cena_zakupu DECIMAL(10,2) NOT NULL,
    liczba_sztuk INT NOT NULL,
    data_przyjecia DATE NOT NULL,
    sprawny BOOLEAN NOT NULL
);

 
-- ZADANIE 4 – Dodanie sześciu rekordów 

INSERT INTO urzadzenia
(nazwa_urzadzenia, producent, cena_zakupu, liczba_sztuk, data_przyjecia, sprawny)
VALUES
('Projektor multimedialny', 'Epson', 2499.99, 5, '2026-09-01', TRUE),
('Tablet graficzny', 'Wacom', 899.50, 8, '2026-09-05', TRUE),
('Skaner dokumentów', 'Canon', 650.00, 3, '2026-09-10', FALSE),
('Głośniki komputerowe', 'Logitech', 199.99, 15, '2026-09-15', TRUE),
('Kamera internetowa', 'Creative', 349.00, 6, '2026-09-20', TRUE),
('Router sieciowy', 'TP-Link', 420.00, 4, '2026-09-25', FALSE);

 
-- ZADANIE 5 – Wyświetlenie wszystkich danych 

SELECT * FROM urzadzenia;
