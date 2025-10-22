-- ===============================
-- PROJEKT 2: System e-commerce dla sklepu internetowego

/*
Projekt 2: System e-commerce dla sklepu internetowego
Baza danych z tabelami dla produktów (id, nazwa, cena, stan_magazynowy), klientów (id, email, data_rejestracji) i zamówień (id, id_produktu, id_klienta, ilość, data_zamowienia, status).

Procedura: Procedura przetworz_zamowienie, która dodaje zamówienie, oblicza całkowitą kwotę i aktualizuje stan magazynowy.

Funkcja: Funkcja oblicz_rabat, która na podstawie daty zamówienia (np. DATE_FORMAT(data_zamowienia, '%m')) zwraca procent rabatu dla promocji sezonowych.

Wyzwalacz (Trigger): Trigger po_anulowaniu_zamowienia, który po zmianie statusu zamówienia na "anulowane" przywraca stan magazynowy produktu.

Raporty: Raport bilansu sprzedaży – suma przychodów z zamówień w danym kwartale (SUM(cena * ilość) GROUP BY QUARTER(data_zamowienia)), np. SELECT QUARTER(data_zamowienia) AS kwartal, SUM(cena * ilosc) AS przychod FROM zamowienia GROUP BY kwartal;.

Zapytania z funkcjami dat/stringów: Zapytanie wyszukujące zamówienia z ostatniego miesiąca z sformatowanym emailem klienta (LOWER(email)) i obliczeniem czasu realizacji (DATEDIFF(data_realizacji, data_zamowienia)).

*/
-- ===============================

DROP TABLE IF EXISTS log_zmian;
DROP TABLE IF EXISTS zamowienia;
DROP TABLE IF EXISTS klienci;
DROP TABLE IF EXISTS produkty;

CREATE TABLE produkty (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nazwa VARCHAR(100),
    cena DECIMAL(10,2),
    stan_magazynowy INT
);

CREATE TABLE klienci (
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(100) UNIQUE,
    data_rejestracji DATE
);

CREATE TABLE zamowienia (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_produktu INT,
    id_klienta INT,
    ilosc INT,
    data_zamowienia DATE,
    status VARCHAR(50),
    FOREIGN KEY (id_produktu) REFERENCES produkty(id),
    FOREIGN KEY (id_klienta) REFERENCES klienci(id)
);

CREATE TABLE log_zmian (
    id INT PRIMARY KEY AUTO_INCREMENT,
    opis VARCHAR(255),
    data_zmiany TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO produkty (nazwa, cena, stan_magazynowy)
VALUES 
('Laptop Lenovo IdeaPad', 3200.00, 15),
('Mysz Logitech', 120.50, 40),
('Monitor Samsung 27"', 980.00, 20);

INSERT INTO klienci (email, data_rejestracji)
VALUES
('anna.kowalska@example.com', '2024-03-12'),
('jan.nowak@example.com', '2023-11-08'),
('maria.wisniewska@example.com', '2024-08-01');

INSERT INTO zamowienia (id_produktu, id_klienta, ilosc, data_zamowienia, status)
VALUES
(1, 1, 1, CURDATE(), 'zrealizowane'),
(2, 2, 2, CURDATE(), 'oczekujące'),
(3, 3, 1, CURDATE(), 'anulowane'),
(1, 3, 3, '2025-03-04', 'oczekujące');

/*
Wyzwalacz (Trigger): Trigger po_anulowaniu_zamowienia, który po zmianie statusu zamówienia na "anulowane" przywraca stan magazynowy produktu.
*/
DELIMITER //

CREATE TRIGGER po_anulowaniu_zamowienia
AFTER UPDATE ON zamowienia
FOR EACH ROW
BEGIN
    IF OLD.status != 'anulowane' AND NEW.status = 'anulowane' THEN
        UPDATE produkty
        SET stan_magazynowy = stan_magazynowy + OLD.ilosc
        WHERE id = OLD.id_produktu;
        
        INSERT INTO log_zmian (opis)
        VALUES (CONCAT('Przywrócono ', OLD.ilosc, ' szt. produktu ID ',
                      OLD.id_produktu, ' do stanu magazynowego z powodu anulowania zamówienia ID ',
                      OLD.id));
    END IF;
END//

DELIMITER ;
 
 -- wywołanie
 
SELECT * FROM produkty;
SELECT * FROM zamowienia;
SELECT * FROM log_zmian;

-- Aktualizacja wywołująca trigger
UPDATE zamowienia
SET status = 'anulowane'
WHERE id = 4;

SELECT * FROM produkty;
SELECT * FROM zamowienia;
SELECT * FROM log_zmian;