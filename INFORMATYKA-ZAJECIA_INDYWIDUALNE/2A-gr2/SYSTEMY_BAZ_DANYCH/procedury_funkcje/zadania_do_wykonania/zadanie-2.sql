/*
Zadanie 2: Funkcja do obliczania rabatu na podstawie kwoty zakupu
Opis: Stwórz funkcję, która oblicza procent rabatu na podstawie kwoty zakupu. 
Funkcja używa instrukcji CASE do określenia rabatu (np. 0%, 5%, 10%) w zależności od kwoty.
*/
 
-- Tworzenie tabeli zakupy
CREATE TABLE zakupy (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_klienta INT,
    kwota DECIMAL(10,2),
    data_zakupu DATE
);

-- Wstawianie danych
INSERT INTO zakupy (id_klienta, kwota, data_zakupu) VALUES
(1, 150.00, '2025-09-01'),
(1, 300.00, '2025-09-02'),
(2, 600.00, '2025-09-03'),
(3, 50.00, '2025-09-04'),
(2, 1000.00, '2025-09-05');