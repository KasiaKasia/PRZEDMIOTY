/*
Projekt 10: System zarządzania restauracją

Stworz baze danych dla restauracji, z tabelami 
 
dania (id, nazwa, cena, skladniki, dostepnosc), 
klienci (id, imię, nazwisko, data_rejestracji, email) 
zamowienia (id, id_dania, id_klienta, ilość, data_zamówienia, data_realizacji, status).

Procedura:
Napisz procedurę dodaj_zamowienie, która dodaje nowe zamówienie, sprawdza dostępność dania, oblicza całkowitą kwotę i aktualizuje status.

Funkcja: 
Stwórz funkcję oblicz_rabat, która oblicza rabat na podstawie daty zamówienia (np. 10% w weekendy, używając DAYOFWEEK(data_zamówienia)), zwracając procent rabatu.

Wyzwalacz (Trigger): 
Utwórz trigger po_realizacji_zamowienia, który po aktualizacji rekordu zamówienia (gdy data_realizacji jest ustawiona) automatycznie zmienia status na "zakończone" i loguje zdarzenie (np. insert do tabeli logów).

Raporty: 
Zapytanie SQL generujące raport bilansu przychodów – suma przychodów per danie w danym miesiącu (używając SUM(cena * ilość) i GROUP BY), np. 
SELECT id_dania, SUM(cena * ilosc) AS przychody FROM zamowienia JOIN dania ON zamowienia.id_dania = dania.id WHERE MONTH(data_zamówienia) = ? GROUP BY id_dania;.

Zapytania z funkcjami dat/stringów: 
Zapytanie wyświetlające klientów zarejestrowanych w ostatnim miesiącu z sformatowanym emailem (UPPER(email)) i obliczeniem czasu od rejestracji (DATEDIFF(CURDATE(), data_rejestracji)).

*/


DROP TABLE IF EXISTS logi_zamowien;
DROP TABLE IF EXISTS zamowienia;
DROP TABLE IF EXISTS dania;
DROP TABLE IF EXISTS klienci;


DROP TRIGGER IF EXISTS po_realizacji_zamowienia;
DROP PROCEDURE IF EXISTS dodaj_zamowienie;
DROP FUNCTION IF EXISTS oblicz_rabat;

-- CREATE TABLE dla tabel
 

CREATE TABLE dania (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nazwa VARCHAR(100) NOT NULL,
    cena DECIMAL(10, 2) NOT NULL,
    skladniki TEXT,
    dostepnosc ENUM('dostepne', 'niedostepne') DEFAULT 'dostepne'
);

CREATE TABLE klienci (
    id INT AUTO_INCREMENT PRIMARY KEY,
    imie VARCHAR(50) NOT NULL,
    nazwisko VARCHAR(50) NOT NULL,
    data_rejestracji DATE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL
);

CREATE TABLE zamowienia (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_dania INT NOT NULL,
    id_klienta INT NOT NULL,
    ilosc INT NOT NULL,
    data_zamowienia DATE NOT NULL,
    data_realizacji DATE,
    status ENUM('nowe', 'w trakcie', 'zakonczone', 'anulowane') DEFAULT 'nowe',
    FOREIGN KEY (id_dania) REFERENCES dania(id),
    FOREIGN KEY (id_klienta) REFERENCES klienci(id)
);

-- Dodatkowa tabela do logów dla triggera
CREATE TABLE logi_zamowien (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_zamowienia INT NOT NULL,
    data_logu TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    opis VARCHAR(255)
);

-- INSERTy: Przykładowe dane testowe

INSERT INTO dania (nazwa, cena, skladniki, dostepnosc) VALUES
('Pizza Margherita', 25.00, 'Ser, pomidory, bazylia', 'dostepne'),
('Spaghetti Bolognese', 30.00, 'Mięso, makaron, sos pomidorowy', 'dostepne'),
('Sałatka Cezar', 20.00, 'Sałata, kurczak, parmezan', 'niedostepne');

INSERT INTO klienci (imie, nazwisko, data_rejestracji, email) VALUES
('Jan', 'Kowalski', '2025-09-01', 'jan.kowalski@example.com'),
('Anna', 'Nowak', '2025-10-05', 'anna.nowak@example.com'),
('Piotr', 'Wiśniewski', '2025-10-10', 'piotr.wisniewski@example.com');

INSERT INTO zamowienia (id_dania, id_klienta, ilosc, data_zamowienia, data_realizacji, status) VALUES
(1, 1, 2, '2025-10-11', NULL, 'nowe'),
(2, 2, 1, '2025-10-12', '2025-10-12', 'zakonczone'),
(3, 3, 3, '2025-09-15', NULL, 'anulowane');


-- Procedura: dodaj_zamowienie
DELIMITER //
CREATE PROCEDURE dodaj_zamowienie(
    IN p_id_dania INT,
    IN p_id_klienta INT,
    IN p_ilosc INT,
    IN p_data_zamowienia DATE
)
BEGIN
    DECLARE v_dostepnosc ENUM('dostepne', 'niedostepne');
    DECLARE v_cena DECIMAL(10, 2);
    DECLARE v_calkowita_kwota DECIMAL(10, 2);
    DECLARE v_komunikat VARCHAR(255);
    -- Sprawdź dostępność dania
    SELECT dostepnosc, cena INTO v_dostepnosc, v_cena FROM dania WHERE id = p_id_dania;
    IF v_dostepnosc != 'dostepne' THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Danie niedostępne';
    END IF;

    -- Oblicz całkowitą kwotę
    SET v_calkowita_kwota = v_cena * p_ilosc;

    -- Dodaj zamówienie
    INSERT INTO zamowienia (id_dania, id_klienta, ilosc, data_zamowienia, status)
    VALUES (p_id_dania, p_id_klienta, p_ilosc, p_data_zamowienia, 'nowe');

    -- Aktualizuj status (przykładowo, jeśli ilosc > 0)
    UPDATE zamowienia SET status = 'w trakcie' WHERE id = LAST_INSERT_ID();

     SET v_komunikat = CONCAT(
        'Zamówienie klienta ', p_id_klienta,
        ' z dnia ', DATE_FORMAT(p_data_zamowienia, '%Y-%m-%d'),
        ' o wartości ', FORMAT(v_calkowita_kwota, 2, 'pl_PL'),
        ' zł jest w trakcie realizacji.'
    );

    -- Zwróć komunikat
    SELECT v_komunikat AS komunikat;
END //
DELIMITER ;

-- wywołanie:
-- CALL dodaj_zamowienie(1, 5, 3, '2025-09-13');


-- Funkcja: oblicz_rabat
DELIMITER //

CREATE FUNCTION oblicz_rabat(p_data_zamowienia DATE)
RETURNS VARCHAR(50)
DETERMINISTIC
BEGIN
    DECLARE v_dzien_tygodnia INT;
    DECLARE v_dzien_nazwa VARCHAR(20);
    DECLARE v_rabat DECIMAL(5,2) DEFAULT 0.00;
    DECLARE v_wynik VARCHAR(50);

    -- Pobranie dnia tygodnia
    SET v_dzien_tygodnia = DAYOFWEEK(p_data_zamowienia);

    -- Ustalenie nazwy dnia
    SET v_dzien_nazwa = CASE v_dzien_tygodnia
        WHEN 1 THEN 'niedziela'
        WHEN 2 THEN 'poniedziałek'
        WHEN 3 THEN 'wtorek'
        WHEN 4 THEN 'środa'
        WHEN 5 THEN 'czwartek'
        WHEN 6 THEN 'piątek'
        WHEN 7 THEN 'sobota'
    END;

    -- Rabat 10% w sobotę lub niedzielę
    IF v_dzien_tygodnia IN (1, 7) THEN
        SET v_rabat = 10.00;
        SET v_wynik = CONCAT(v_dzien_nazwa, ' — rabat ', v_rabat, '%');
    ELSE
        SET v_wynik = CONCAT(v_dzien_nazwa, ' — brak rabatu');
    END IF;

    RETURN v_wynik;
END //

DELIMITER ;


 
/* 
wywołanie oblicz_rabat:

SELECT oblicz_rabat('2025-09-13');
-- dla wielu dat naraz:
SELECT 
    '2025-09-13' AS data, oblicz_rabat('2025-09-13') AS wynik
UNION ALL
SELECT 
    '2025-09-14', oblicz_rabat('2025-09-14')
UNION ALL
SELECT 
    '2025-09-15', oblicz_rabat('2025-09-15');
*/


-- Wyzwalacz (Trigger): po_realizacji_zamowienia
 
DELIMITER //

CREATE TRIGGER po_realizacji_zamowienia
BEFORE UPDATE ON zamowienia
FOR EACH ROW
BEGIN
    IF NEW.data_realizacji IS NOT NULL AND OLD.data_realizacji IS NULL THEN
        -- Zmień status
        SET NEW.status = 'zakonczone';

        -- Dodaj wpis do logów
        INSERT INTO logi_zamowien (id_zamowienia, opis)
        VALUES (
            NEW.id,
            CONCAT('Zamówienie ', NEW.id, ' zrealizowane w dniu ', NEW.data_realizacji)
        );
    END IF;
END //

DELIMITER ;


/* 
sprawdzenie działania wyzwalacza:
SELECT * FROM zamowienia;

UPDATE zamowienia
SET data_realizacji = '2025-10-13'
WHERE id = 1;

SELECT * FROM zamowienia WHERE id = 1;

SELECT * FROM logi_zamowien;
*/




/*
-- Raporty: Przykładowe zapytanie SQL dla raportu bilansu przychodów
-- (dla miesiąca 10, czyli październik; zamień ? na konkretny miesiąc)
SELECT 
    d.id AS id_dania, 
    d.nazwa, 
    SUM(d.cena * z.ilosc) AS przychody 
FROM 
    zamowienia z 
JOIN 
    dania d ON z.id_dania = d.id 
WHERE 
    MONTH(z.data_zamowienia) = 10 and z.status = 'zakonczone'
GROUP BY 
    d.id, d.nazwa;
*/

/*
-- Zapytania z funkcjami dat/stringów: Przykładowe zapytanie
SELECT 
    id, 
    CONCAT(imie, ' ', nazwisko) AS pelne_nazwisko, 
    UPPER(email) AS sformatowany_email, 
    DATEDIFF(CURDATE(), data_rejestracji) AS dni_od_rejestracji 
FROM 
    klienci 
WHERE 
    data_rejestracji >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH);
*/	
/*
	
CURDATE() → zwraca dzisiejszą datę, np. 2025-10-13
DATE_SUB(CURDATE(), INTERVAL 1 MONTH) → odejmuje miesiąc, czyli 2025-09-13
data_rejestracji >= '2025-09-13' → zwraca tylko klientów, których data rejestracji jest równa lub późniejsza niż 13 września 2025.
	*/