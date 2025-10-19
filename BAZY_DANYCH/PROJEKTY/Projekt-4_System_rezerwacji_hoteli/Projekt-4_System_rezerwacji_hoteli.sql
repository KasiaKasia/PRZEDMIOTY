-- ===============================
-- Projekt 4: System rezerwacji hoteli
/*
Baza danych z tabelami dla pokoi (id, numer, cena_dobowa, status), gości (id, imię, nazwisko, email) i rezerwacji (id, id_pokoju, id_goscia, data_checkin, data_checkout).

Procedura: Procedura anuluj_rezerwacje, która usuwa rezerwację i aktualizuje status pokoju na dostępny.

Funkcja: Funkcja formatuj_nazwisko, która formatuje nazwisko gościa (np. TRIM(UPPER(nazwisko))) i sprawdza długość stringa (LENGTH).

Wyzwalacz (Trigger): Trigger sprawdz_dostepnosc, który po wstawieniu nowej rezerwacji sprawdza, czy pokój jest wolny w podanym terminie i blokuje jeśli nie.

Raporty: Raport obrotów – suma przychodów z rezerwacji w danym miesiącu (SUM(DATEDIFF(data_checkout, data_checkin) * cena_dobowa) GROUP BY MONTH(data_checkin)), np. SELECT MONTH(data_checkin) AS miesiac, SUM(DATEDIFF(data_checkout, data_checkin) * cena_dobowa) AS obroty FROM rezerwacje GROUP BY miesiac;.

Zapytania z funkcjami dat/stringów: Zapytanie wyszukujące rezerwacje kończące się w ciągu 7 dni z sformatowanym emailem (REPLACE(email, '@', '[at]')) i obliczeniem długości pobytu (DATEDIFF(data_checkout, data_checkin)).

*/
-- ===============================

DROP TABLE IF EXISTS rezerwacje;
DROP TABLE IF EXISTS goscie;
DROP TABLE IF EXISTS pokoje;
DROP TABLE IF EXISTS log_rezerwacji;


CREATE TABLE pokoje (
    id INT PRIMARY KEY AUTO_INCREMENT,
    numer VARCHAR(10) NOT NULL,
    cena_dobowa DECIMAL(10,2) NOT NULL,
    status ENUM('wolny', 'zajety', 'sprzatanie') DEFAULT 'wolny'
);

CREATE TABLE goscie (
    id INT PRIMARY KEY AUTO_INCREMENT,
    imie VARCHAR(50) NOT NULL,
    nazwisko VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL
);

CREATE TABLE rezerwacje (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_pokoju INT,
    id_goscia INT,
    data_checkin DATE NOT NULL,
    data_checkout DATE NOT NULL,
    FOREIGN KEY (id_pokoju) REFERENCES pokoje(id),
    FOREIGN KEY (id_goscia) REFERENCES goscie(id),
    CHECK (data_checkout > data_checkin)
);

INSERT INTO pokoje (numer, cena_dobowa, status)
VALUES 
('101', 200.00, 'wolny'),
('102', 250.00, 'wolny'),
('201', 300.00, 'zajety');

INSERT INTO goscie (imie, nazwisko, email)
VALUES
('Jan', 'Kowalski', 'jan.kowalski@example.com'),
('Anna', 'Nowak', 'anna.nowak@example.com'),
('Piotr', 'Wiśniewski', 'piotr.wisniewski@example.com');

INSERT INTO rezerwacje (id_pokoju, id_goscia, data_checkin, data_checkout)
VALUES
(1, 1, '2025-11-01', '2025-11-03'),
(3, 2, '2025-11-05', '2025-11-07');

/*
Wyzwalacz (Trigger): Trigger sprawdz_dostepnosc, który po wstawieniu nowej rezerwacji sprawdza, czy pokój jest wolny w podanym terminie i blokuje jeśli nie.
*/

DELIMITER //

CREATE TRIGGER sprawdz_dostepnosc
BEFORE INSERT ON rezerwacje
FOR EACH ROW
BEGIN
	DECLARE ile_koliduje INT;
   
	SELECT COUNT(*) INTO ile_koliduje
    FROM rezerwacje
    WHERE id_pokoju = NEW.id_pokoju
      AND (
          (NEW.data_checkin BETWEEN data_checkin AND data_checkout)
          OR (NEW.data_checkout BETWEEN data_checkin AND data_checkout)
          OR (data_checkin BETWEEN NEW.data_checkin AND NEW.data_checkout)
      );

    IF ile_koliduje > 0 THEN 
        INSERT INTO log_rezerwacji (opis)
        VALUES (CONCAT('❌ Rezerwacja odrzucona – pokój ', NEW.id_pokoju, 
                       ' jest zajęty w terminie ', NEW.data_checkin, ' - ', NEW.data_checkout));

        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'Pokój jest już zarezerwowany w tym terminie!';
    ELSE
        INSERT INTO log_rezerwacji (opis)
        VALUES (CONCAT('✅ Pokój ', NEW.id_pokoju, ' zarezerwowany w terminie ', 
                       NEW.data_checkin, ' - ', NEW.data_checkout));
    END IF;
END//

DELIMITER ;