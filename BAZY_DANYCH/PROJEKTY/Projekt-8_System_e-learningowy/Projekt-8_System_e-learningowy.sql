-- ======================================
-- Projekt 8: System e-learningowy 
/*
Baza danych z tabelami dla kursów (id, tytuł, opis, data_startu), studentów (id, imię, nazwisko, email), zapisów (id, id_kursu, id_studenta, data_zapisu, ocena).

Procedura: Procedura ocen_kurs, która dodaje ocenę do zapisu, oblicza średnią ocenę kursu i aktualizuje ranking.

Funkcja: Funkcja formatuj_tytul_kursu, która formatuje tytuł kursu (np. UPPER(tytuł)) i skraca opis (SUBSTRING(opis, 1, 100)).

Wyzwalacz (Trigger): Trigger po_zapisie_na_kurs, który po wstawieniu zapisu automatycznie wysyła potwierdzenie (loguje) i sprawdza limit miejsc.

Raporty: Raport bilansu zapisów – suma liczby studentów per kurs (SUM(1) GROUP BY id_kursu), np. SELECT id_kursu, SUM(1) AS liczba_studentow FROM zapisy GROUP BY id_kursu;.

Zapytania z funkcjami dat/stringów: Zapytanie wyświetlające kursy starting w ciągu miesiąca z sformatowanym emailem (LOWER(email)) i datą startu w formacie 'YYYY-MM-DD' (DATE_FORMAT(data_startu, '%Y-%m-%d')).
*/

DROP TABLE IF EXISTS log_zapisow;
DROP TABLE IF EXISTS zapisy;
DROP TABLE IF EXISTS studenci;
DROP TABLE IF EXISTS kursy;
 

CREATE TABLE kursy (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tytul VARCHAR(100) NOT NULL,
    opis TEXT,
    data_startu DATE NOT NULL,
    limit_miejsc INT DEFAULT 30
);

CREATE TABLE studenci (
    id INT PRIMARY KEY AUTO_INCREMENT,
    imie VARCHAR(50) NOT NULL,
    nazwisko VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL
);

CREATE TABLE zapisy (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_kursu INT NOT NULL,
    id_studenta INT NOT NULL,
    data_zapisu DATETIME NOT NULL,
    ocena DECIMAL(3,1),
    FOREIGN KEY (id_kursu) REFERENCES kursy(id),
    FOREIGN KEY (id_studenta) REFERENCES studenci(id)
);

CREATE TABLE log_zapisow (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_zapisu INT,
    data_logu TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    komunikat VARCHAR(255)
);
 

INSERT INTO kursy (tytul, opis, data_startu, limit_miejsc)
VALUES
('Podstawy Javy', 'Wprowadzenie do programowania w języku Java', '2025-11-01', 2),
('Bazy danych SQL', 'Nauka SQL i relacyjnych baz danych', '2025-11-15', 3);

INSERT INTO studenci (imie, nazwisko, email)
VALUES
('Jan', 'Kowalski', 'jan.kowalski@example.com'),
('Ewa', 'Nowak', 'ewa.nowak@example.com'),
('Piotr', 'Lis', 'piotr.lis@example.com');

/*
Wyzwalacz (Trigger): Trigger po_zapisie_na_kurs, który po wstawieniu zapisu automatycznie wysyła potwierdzenie (loguje) i sprawdza limit miejsc.
*/

DELIMITER $$

CREATE TRIGGER po_zapisie_na_kurs
AFTER INSERT ON zapisy
FOR EACH ROW
BEGIN
    DECLARE liczba_zapisanych INT;
    DECLARE limit_kursu INT;
 
    SELECT COUNT(*)
    INTO liczba_zapisanych
    FROM zapisy
    WHERE id_kursu = NEW.id_kursu;

    SELECT limit_miejsc
    INTO limit_kursu
    FROM kursy
    WHERE id = NEW.id_kursu;

    IF liczba_zapisanych > limit_kursu THEN
        DELETE FROM zapisy WHERE id = NEW.id;
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = '❌ Limit miejsc na ten kurs został już osiągnięty.';
    ELSE 
        INSERT INTO log_zapisow (id_zapisu, komunikat)
        VALUES (NEW.id, CONCAT('✅ Student ID ', NEW.id_studenta, ' zapisał się na kurs ID ', NEW.id_kursu, '.'));
    END IF;
END$$

DELIMITER ;

-- ======================================
-- Testowe dane zapisów
-- ======================================

-- ✅ Powinny się udać (limit kursu 2)
INSERT INTO zapisy (id_kursu, id_studenta, data_zapisu)
VALUES (1, 1, NOW());

INSERT INTO zapisy (id_kursu, id_studenta, data_zapisu)
VALUES (1, 2, NOW());

-- ❌ Powinno się nie udać (limit kursu 2, 3. student przekracza limit)
-- INSERT INTO zapisy (id_kursu, id_studenta, data_zapisu)
-- VALUES (1, 3, NOW());

-- ======================================
-- Sprawdzenie wyników
-- ======================================
-- SELECT * FROM kursy;
-- SELECT * FROM zapisy;
-- SELECT * FROM log_zapisow;
