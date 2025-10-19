-- ======================================
-- PROJEKT 5: System zarządzania finansami osobistymi
/*
Tabele dla kont (id, nazwa, saldo), transakcji (id, id_konta, kwota, data_transakcji, opis, typ) i kategorii (id, nazwa).

Procedura: Procedura dodaj_transakcje, która dodaje transakcję i aktualizuje saldo konta w zależności od typu (wpłata/wydatek).

Funkcja: Funkcja oblicz_miesieczny_bilans, która sumuje transakcje w danym miesiącu (używając MONTH(data_transakcji)) i zwraca bilans netto.

Wyzwalacz (Trigger): Trigger po_transakcji, który po wstawieniu transakcji automatycznie aktualizuje saldo konta i loguje jeśli saldo staje się ujemne.

Raporty: Raport sumujący wydatki – bilans per kategoria (SUM(kwota) WHERE typ='wydatek' GROUP BY id_kategorii), np. SELECT id_kategorii, SUM(kwota) AS suma_wydatkow FROM transakcje WHERE typ='wydatek' GROUP BY id_kategorii;.

Zapytania z funkcjami dat/stringów: Zapytanie wyświetlające transakcje z ostatniego kwartału z przyciętym opisem (SUBSTRING(opis, 1, 50)) i datą w formacie 'YYYY-MM' (DATE_FORMAT(data_transakcji, '%Y-%m')).

*/

-- ======================================

DROP TABLE IF EXISTS log_saldo;
DROP TABLE IF EXISTS transakcje;
DROP TABLE IF EXISTS konta;
DROP TABLE IF EXISTS kategorie;

CREATE TABLE konta (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nazwa VARCHAR(100) NOT NULL,
    saldo DECIMAL(12,2) DEFAULT 0
);

CREATE TABLE kategorie (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nazwa VARCHAR(100) NOT NULL
);

CREATE TABLE transakcje (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_konta INT,
    id_kategorii INT,
    kwota DECIMAL(12,2) NOT NULL,
    data_transakcji DATE NOT NULL,
    opis VARCHAR(255),
    typ ENUM('przychód', 'wydatek') NOT NULL,
    FOREIGN KEY (id_konta) REFERENCES konta(id),
    FOREIGN KEY (id_kategorii) REFERENCES kategorie(id)
);

CREATE TABLE log_saldo (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_konta INT,
    data_zdarzenia TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    komunikat VARCHAR(255)
);


INSERT INTO konta (nazwa, saldo)
VALUES 
('Konto osobiste', 1500.00),
('Konto oszczędnościowe', 5000.00);

INSERT INTO kategorie (nazwa)
VALUES
('Zakupy'),
('Wypłata'),
('Rachunki'),
('Transport');

INSERT INTO transakcje (id_konta, id_kategorii, kwota, data_transakcji, opis, typ)
VALUES
(1, 2, 3500.00, '2025-10-01', 'Wpłata wynagrodzenia', 'przychód'),
(1, 1, 500.00, '2025-10-02', 'Zakupy spożywcze', 'wydatek'),
(2, 3, 200.00, '2025-10-03', 'Opłata za prąd', 'wydatek');

/*
Wyzwalacz (Trigger): Trigger po_transakcji, który po wstawieniu transakcji automatycznie aktualizuje saldo konta i loguje jeśli saldo staje się ujemne.
*/

DELIMITER $$

CREATE TRIGGER po_transakcji
AFTER INSERT ON transakcje
FOR EACH ROW
BEGIN
    IF NEW.typ = 'przychód' THEN
        UPDATE konta
        SET saldo = saldo + NEW.kwota
        WHERE id = NEW.id_konta;
    ELSEIF NEW.typ = 'wydatek' THEN
        UPDATE konta
        SET saldo = saldo - NEW.kwota
        WHERE id = NEW.id_konta;
    END IF;
 
    IF (SELECT saldo FROM konta WHERE id = NEW.id_konta) < 0 THEN
        INSERT INTO log_saldo (id_konta, komunikat)
        VALUES (NEW.id_konta, CONCAT(' Uwaga: saldo konta ID ', NEW.id_konta, ' stało się ujemne.'));
    END IF
END$$

DELIMITER ;

