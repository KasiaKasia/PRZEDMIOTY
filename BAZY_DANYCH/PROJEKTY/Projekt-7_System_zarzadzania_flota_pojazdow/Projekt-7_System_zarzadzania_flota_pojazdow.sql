-- ======================================
-- Projekt 7: System zarządzania flotą pojazdów - 
/*
Baza danych z tabelami dla pojazdów (id, marka, model, rok_produkcji, stan), kierowców (id, imię, nazwisko, data_prawa_jazdy), wypożyczeń (id, id_pojazdu, id_kierowcy, data_wypozyczenia, data_zwrotu, kilometraz).

Procedura: Procedura zakoncz_wypozyczenie, która kończy wypożyczenie, oblicza przejechane kilometry i aktualizuje stan pojazdu.

Funkcja: Funkcja sprawdz_waznosc_prawa_jazdy, która sprawdza, czy prawo jazdy jest ważne (używając DATE_ADD(data_prawa_jazdy, INTERVAL 10 YEAR) i porównując z CURDATE()).

Wyzwalacz (Trigger): Trigger przed_wypozyczeniem, który przed dodaniem wypożyczenia sprawdza stan pojazdu i blokuje jeśli niedostępny.

Raporty: Raport sumujący koszty utrzymania – bilans kilometrów przejechanych per pojazd (SUM(kilometraz) GROUP BY id_pojazdu), np. SELECT id_pojazdu, SUM(kilometraz) AS suma_km FROM wypozyczenia GROUP BY id_pojazdu;.

Zapytania z funkcjami dat/stringów: Zapytanie wyszukujące wypożyczenia z ostatniego kwartału z konkatenacją marki i modelu (CONCAT(marka, ' ', model)) i obliczeniem czasu wypożyczenia (TIMESTAMPDIFF(DAY, data_wypozyczenia, data_zwrotu)).
*/

DROP TABLE IF EXISTS log_wypozyczen;
DROP TABLE IF EXISTS wypozyczenia;
DROP TABLE IF EXISTS kierowcy;
DROP TABLE IF EXISTS pojazdy;

 

CREATE TABLE pojazdy (
    id INT PRIMARY KEY AUTO_INCREMENT,
    marka VARCHAR(50) NOT NULL,
    model VARCHAR(50) NOT NULL,
    rok_produkcji YEAR NOT NULL,
    stan ENUM('dostępny', 'niedostępny') DEFAULT 'dostępny'
);

CREATE TABLE kierowcy (
    id INT PRIMARY KEY AUTO_INCREMENT,
    imie VARCHAR(100) NOT NULL,
    nazwisko VARCHAR(100) NOT NULL,
    data_prawa_jazdy DATE NOT NULL
);

CREATE TABLE wypozyczenia (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_pojazdu INT NOT NULL,
    id_kierowcy INT NOT NULL,
    data_wypozyczenia DATETIME NOT NULL,
    data_zwrotu DATETIME,
    kilometraz INT DEFAULT 0,
    FOREIGN KEY (id_pojazdu) REFERENCES pojazdy(id),
    FOREIGN KEY (id_kierowcy) REFERENCES kierowcy(id)
);

CREATE TABLE log_wypozyczen (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_wypozyczenia INT,
    data_zdarzenia TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    komunikat VARCHAR(255)
);

 

INSERT INTO pojazdy (marka, model, rok_produkcji, stan)
VALUES
('Toyota', 'Corolla', 2020, 'dostępny'),
('Volkswagen', 'Golf', 2018, 'dostępny'),
('Ford', 'Focus', 2019, 'niedostępny');

INSERT INTO kierowcy (imie, nazwisko, data_prawa_jazdy)
VALUES
('Adam', 'Kowalski', '2010-05-12'),
('Ewa', 'Nowak', '2015-03-21');

/*
Wyzwalacz (Trigger): Trigger przed_wypozyczeniem, który przed dodaniem wypożyczenia sprawdza stan pojazdu i blokuje jeśli niedostępny.
*/

DELIMITER $$

CREATE TRIGGER przed_wypozyczeniem
BEFORE INSERT ON wypozyczenia
FOR EACH ROW
BEGIN
    DECLARE pojazd_stan VARCHAR(15);

    -- Sprawdzenie, czy pojazd jest dostępny
    SELECT stan INTO pojazd_stan
    FROM pojazdy
    WHERE id = NEW.id_pojazdu;

    IF pojazd_stan = 'niedostępny' THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = '❌ Pojazd jest obecnie niedostępny i nie może być wypożyczony.';
    ELSE
        -- Zmieniamy stan pojazdu na niedostępny po wypożyczeniu
        UPDATE pojazdy
        SET stan = 'niedostępny'
        WHERE id = NEW.id_pojazdu;

        -- Logujemy wypożyczenie
        INSERT INTO log_wypozyczen (id_wypozyczenia, komunikat)
        VALUES (NULL, CONCAT('🚗 Pojazd ID ', NEW.id_pojazdu, ' został wypożyczony przez kierowcę ID ', NEW.id_kierowcy, '.'));
    END IF;
END$$

DELIMITER ;

-- ======================================
-- Testowe dane wypożyczenia
-- ======================================

-- ✅ Powinno się udać (Toyota - dostępna)
INSERT INTO wypozyczenia (id_pojazdu, id_kierowcy, data_wypozyczenia, data_zwrotu, kilometraz)
VALUES (1, 1, '2025-10-19 09:00:00', '2025-10-20 09:00:00', 250);

-- ❌ Powinno się nie udać (Ford - niedostępny)
-- INSERT INTO wypozyczenia (id_pojazdu, id_kierowcy, data_wypozyczenia, data_zwrotu, kilometraz)
-- VALUES (3, 2, '2025-10-19 09:00:00', '2025-10-21 09:00:00', 300);

-- ======================================
-- Sprawdzenie wyników
-- ======================================
-- SELECT * FROM pojazdy;
-- SELECT * FROM log_wypozyczen;
-- SELECT * FROM wypozyczenia;
