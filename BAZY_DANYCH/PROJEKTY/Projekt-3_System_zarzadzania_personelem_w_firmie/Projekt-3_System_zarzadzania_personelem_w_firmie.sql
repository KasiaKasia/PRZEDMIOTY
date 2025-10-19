-- ===============================
-- Projekt 3: System zarządzania personelem w firmie
/*

Tabele dla pracowników (id, imię, nazwisko, data_zatrudnienia, pensja, id_dzialu), działów (id, nazwa) i historii zmian (id, id_pracownika, data_zmiany, stara_pensja, nowa_pensja).

Procedura: Procedura podwyzsz_pensje, która dla wybranego działu zwiększa pensje o dany procent i loguje zmiany.

Funkcja: Funkcja oblicz_staz, która zwraca lata stażu pracy na podstawie daty zatrudnienia (używając TIMESTAMPDIFF(YEAR, data_zatrudnienia, CURDATE())).

Wyzwalacz (Trigger): Trigger przed_zmiana_pensji, który przed aktualizacją pensji sprawdza, czy nowa wartość jest wyższa od starej, i blokuje jeśli nie (lub loguje).

Raporty: Raport sumujący koszty płac – całkowity bilans pensji per dział (SUM(pensja) GROUP BY id_dzialu), np. SELECT id_dzialu, SUM(pensja) AS koszty FROM pracownicy GROUP BY id_dzialu;.

Zapytania z funkcjami dat/stringów: Zapytanie wyświetlające pracowników zatrudnionych dłużej niż 5 lat z konkatenacją imienia i nazwiska (CONCAT_WS(' ', imie, nazwisko)) i datą zatrudnienia w formacie 'DD-MM-YYYY' (DATE_FORMAT(data_zatrudnienia, '%d-%m-%Y')).
*/

-- ===============================

DROP TABLE IF EXISTS historia_zmian;
DROP TABLE IF EXISTS pracownicy;
DROP TABLE IF EXISTS dzialy;

CREATE TABLE dzialy (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nazwa VARCHAR(100) NOT NULL
);

CREATE TABLE pracownicy (
    id INT PRIMARY KEY AUTO_INCREMENT,
    imie VARCHAR(50) NOT NULL,
    nazwisko VARCHAR(50) NOT NULL,
    data_zatrudnienia DATE NOT NULL,
    pensja DECIMAL(10,2) NOT NULL,
    id_dzialu INT,
    FOREIGN KEY (id_dzialu) REFERENCES dzialy(id)
);

CREATE TABLE historia_zmian (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_pracownika INT,
    data_zmiany TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    stara_pensja DECIMAL(10,2),
    nowa_pensja DECIMAL(10,2),
    FOREIGN KEY (id_pracownika) REFERENCES pracownicy(id)
);

INSERT INTO dzialy (nazwa)
VALUES 
('IT'),
('HR'),
('Marketing');

INSERT INTO pracownicy (imie, nazwisko, data_zatrudnienia, pensja, id_dzialu)
VALUES
('Jan', 'Kowalski', '2023-01-15', 5000.00, 1),
('Anna', 'Nowak', '2022-06-01', 4500.00, 2),
('Piotr', 'Wiśniewski', '2024-03-10', 6000.00, 3);


/*
Wyzwalacz (Trigger): Trigger przed_zmiana_pensji, który przed aktualizacją pensji sprawdza, czy nowa wartość jest wyższa od starej, i blokuje jeśli nie (lub loguje).

*/
DELIMITER //

CREATE TRIGGER przed_zmiana_pensji
BEFORE UPDATE ON pracownicy
FOR EACH ROW
BEGIN
    IF NEW.pensja <= OLD.pensja THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'Nowa pensja musi być wyższa od starej!';
    ELSE
        INSERT INTO historia_zmian (id_pracownika, stara_pensja, nowa_pensja)
        VALUES (OLD.id, OLD.pensja, NEW.pensja);
    END IF;
END//

DELIMITER ;