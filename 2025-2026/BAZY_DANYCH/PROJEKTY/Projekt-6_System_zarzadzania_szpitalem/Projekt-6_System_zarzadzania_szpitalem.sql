-- ======================================
-- Projekt 6: System zarządzania szpitalem
/*
Baza danych z tabelami dla pacjentów (id, imię, nazwisko, data_urodzenia, numer_pesel), lekarzy (id, imię, nazwisko, specjalizacja), wizyt (id, id_pacjenta, id_lekarza, data_wizyty, diagnoza).

Procedura: Procedura dodaj_wizyte, która dodaje nową wizytę, sprawdza dostępność lekarza w danym terminie i aktualizuje harmonogram.

Funkcja: Funkcja oblicz_wiek_pacjenta, która oblicza wiek pacjenta na podstawie daty urodzenia (używając TIMESTAMPDIFF(YEAR, data_urodzenia, CURDATE())).

Wyzwalacz (Trigger): Trigger po_dodaniu_wizyty, który po wstawieniu wizyty automatycznie wysyła powiadomienie (loguje) i blokuje termin u lekarza.

Raporty: Raport bilansu wizyt – suma liczby wizyt per specjalizacja w danym roku (SUM(1) GROUP BY specjalizacja), np. SELECT specjalizacja, SUM(1) AS liczba_wizyt FROM wizyty JOIN lekarze ON wizyty.id_lekarza = lekarze.id WHERE YEAR(data_wizyty) = ? GROUP BY specjalizacja;.

Zapytania z funkcjami dat/stringów: Zapytanie wyświetlające pacjentów urodzonych w danym miesiącu z sformatowanym peselem (REPLACE(numer_pesel, '-', '')) i datą urodzenia w formacie 'DD/MM/YYYY' (DATE_FORMAT(data_urodzenia, '%d/%m/%Y')).

*/
-- ======================================

DROP TABLE IF EXISTS log_wizyt;
DROP TABLE IF EXISTS wizyty;
DROP TABLE IF EXISTS harmonogram_lekarzy;
DROP TABLE IF EXISTS pacjenci;
DROP TABLE IF EXISTS lekarze;

CREATE TABLE pacjenci (
    id INT PRIMARY KEY AUTO_INCREMENT,
    imie VARCHAR(100) NOT NULL,
    nazwisko VARCHAR(100) NOT NULL,
    data_urodzenia DATE NOT NULL,
    numer_pesel VARCHAR(11) UNIQUE NOT NULL
);

CREATE TABLE lekarze (
    id INT PRIMARY KEY AUTO_INCREMENT,
    imie VARCHAR(100) NOT NULL,
    nazwisko VARCHAR(100) NOT NULL,
    specjalizacja VARCHAR(100) NOT NULL
);

CREATE TABLE harmonogram_lekarzy (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_lekarza INT NOT NULL,
    data_wizyty DATETIME NOT NULL,
    status ENUM('wolny', 'zajęty') DEFAULT 'wolny',
    FOREIGN KEY (id_lekarza) REFERENCES lekarze(id)
);

CREATE TABLE wizyty (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_pacjenta INT NOT NULL,
    id_lekarza INT NOT NULL,
    data_wizyty DATETIME NOT NULL,
    diagnoza VARCHAR(255),
    FOREIGN KEY (id_pacjenta) REFERENCES pacjenci(id),
    FOREIGN KEY (id_lekarza) REFERENCES lekarze(id)
);

CREATE TABLE log_wizyt (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_wizyty INT,
    data_zdarzenia TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    komunikat VARCHAR(255)
);


INSERT INTO pacjenci (imie, nazwisko, data_urodzenia, numer_pesel)
VALUES
('Anna', 'Kowalska', '1985-04-10', '85041012345'),
('Jan', 'Nowak', '1990-09-25', '90092556789');

INSERT INTO lekarze (imie, nazwisko, specjalizacja)
VALUES
('Marek', 'Wiśniewski', 'Kardiolog'),
('Katarzyna', 'Zielińska', 'Dermatolog');

-- Lekarze mają wolne terminy w harmonogramie
INSERT INTO harmonogram_lekarzy (id_lekarza, data_wizyty, status)
VALUES
(1, '2025-10-20 10:00:00', 'wolny'),
(1, '2025-10-20 11:00:00', 'wolny'),
(2, '2025-10-21 09:00:00', 'wolny');

/*
Wyzwalacz (Trigger): Trigger po_dodaniu_wizyty, który po wstawieniu wizyty automatycznie wysyła powiadomienie (loguje) i blokuje termin u lekarza.
*/

DELIMITER $$

CREATE TRIGGER po_dodaniu_wizyty
AFTER INSERT ON wizyty
FOR EACH ROW
BEGIN
    DECLARE slot_status VARCHAR(10);

    -- Sprawdzenie, czy termin jest wolny
    SELECT status INTO slot_status
    FROM harmonogram_lekarzy
    WHERE id_lekarza = NEW.id_lekarza
      AND data_wizyty = NEW.data_wizyty
    LIMIT 1;

    IF slot_status = 'zajęty' THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = '❌ Termin jest już zajęty dla tego lekarza.';
    ELSE
        UPDATE harmonogram_lekarzy
        SET status = 'zajęty'
        WHERE id_lekarza = NEW.id_lekarza
          AND data_wizyty = NEW.data_wizyty;

        INSERT INTO log_wizyt (id_wizyty, komunikat)
        VALUES (NEW.id, CONCAT('📅 Dodano wizytę dla pacjenta ID ', NEW.id_pacjenta,
                               ' u lekarza ID ', NEW.id_lekarza,
                               ' na termin ', NEW.data_wizyty));
    END IF;
END$$

DELIMITER ;

-- ======================================
-- Testowe dodanie wizyty
-- ======================================
-- Dodanie wizyty powinno:
-- ✅ Ustawić termin na "zajęty"
-- ✅ Dodać wpis do log_wizyt

INSERT INTO wizyty (id_pacjenta, id_lekarza, data_wizyty, diagnoza)
VALUES (1, 1, '2025-10-20 10:00:00', 'Kontrola po zabiegu');

-- Druga próba dodania tej samej wizyty (powinna się nie udać)
-- INSERT INTO wizyty (id_pacjenta, id_lekarza, data_wizyty, diagnoza)
-- VALUES (2, 1, '2025-10-20 10:00:00', 'Ból w klatce piersiowej');

