-- ======================================
-- Projekt 9: System zarządzania magazynem 
/*
Baza danych z tabelami dla produktów (id, nazwa, ilość, cena_jednostkowa), dostawców (id, nazwa, adres), dostaw (id, id_produktu, id_dostawcy, ilość_dostawy, data_dostawy).

Procedura: Procedura przyjmij_dostawe, która dodaje dostawę, aktualizuje ilość produktu i oblicza całkowitą wartość.

Funkcja: Funkcja oblicz_wartosc_magazynu, która sumuje wartość produktów (ilość * cena_jednostkowa) dla wybranego produktu.

Wyzwalacz (Trigger): Trigger po_dostawie, który po wstawieniu dostawy automatycznie aktualizuje stan magazynu i loguje jeśli ilość przekracza limit.

Raporty: Raport sumujący obroty – bilans wartości dostaw per dostawca (SUM(ilość_dostawy * cena_jednostkowa) GROUP BY id_dostawcy), np. SELECT id_dostawcy, SUM(ilosc_dostawy * cena_jednostkowa) AS wartosc_dostaw FROM dostawy JOIN produkty ON dostawy.id_produktu = produkty.id GROUP BY id_dostawcy;.

Zapytania z funkcjami dat/stringów: Zapytanie wyszukujące dostawy z ostatniego roku z przyciętym adresem (TRIM(adres)) i miesiącem dostawy (MONTHNAME(data_dostawy)).

*/
DROP TABLE IF EXISTS log_magazynu;
DROP TABLE IF EXISTS dostawy;
DROP TABLE IF EXISTS produkty;
DROP TABLE IF EXISTS dostawcy;
 

CREATE TABLE produkty (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nazwa VARCHAR(100) NOT NULL,
    ilosc INT DEFAULT 0,
    cena_jednostkowa DECIMAL(10,2) NOT NULL
);

CREATE TABLE dostawcy (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nazwa VARCHAR(100) NOT NULL,
    adres VARCHAR(200)
);

CREATE TABLE dostawy (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_produktu INT NOT NULL,
    id_dostawcy INT NOT NULL,
    ilosc_dostawy INT NOT NULL,
    data_dostawy DATETIME NOT NULL,
    FOREIGN KEY (id_produktu) REFERENCES produkty(id),
    FOREIGN KEY (id_dostawcy) REFERENCES dostawcy(id)
);

CREATE TABLE log_magazynu (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_dostawy INT,
    data_logu TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    komunikat VARCHAR(255)
);
 

INSERT INTO produkty (nazwa, ilosc, cena_jednostkowa)
VALUES
('Monitor', 50, 899.99),
('Klawiatura', 100, 129.50),
('Myszka', 200, 89.99);

INSERT INTO dostawcy (nazwa, adres)
VALUES
('TechSupply Sp. z o.o.', 'ul. Elektroniczna 12, Warszawa'),
('PCPartner S.A.', 'ul. Komputerowa 7, Kraków');

 
 

/*
Wyzwalacz (Trigger): Trigger po_dostawie, który po wstawieniu dostawy automatycznie aktualizuje stan magazynu i loguje jeśli ilość przekracza limit.
*/

DELIMITER $$

CREATE TRIGGER po_dostawie
AFTER INSERT ON dostawy
FOR EACH ROW
BEGIN
    DECLARE v_ilosc INT;

    -- Aktualizacja stanu magazynowego
    UPDATE produkty
    SET ilosc = ilosc + NEW.ilosc_dostawy
    WHERE id = NEW.id_produktu;

    -- Pobierz aktualną ilość
    SELECT ilosc INTO v_ilosc FROM produkty WHERE id = NEW.id_produktu;

    -- Sprawdź, czy nie przekroczono limitu magazynu
    IF v_ilosc > 1000 THEN
        INSERT INTO log_magazynu (id_dostawy, komunikat)
        VALUES (NEW.id, CONCAT('⚠️ Uwaga! Produkt ID ', NEW.id_produktu, 
                               ' przekroczył limit ilości (', v_ilosc, ' sztuk).'));
    ELSE
        INSERT INTO log_magazynu (id_dostawy, komunikat)
        VALUES (NEW.id, CONCAT('✅ Dodano dostawę produktu ID ', NEW.id_produktu, 
                               ', ilość: ', NEW.ilosc_dostawy, '.'));
    END IF;
END$$

DELIMITER ;
 