-- ===============================
-- PROJEKT 1: System zarządzania biblioteką
/*

Ten projekt polega na stworzeniu bazy danych dla biblioteki, z tabelami dla książek (id, tytuł, autor, stan dostępności), użytkowników (id, imię, nazwisko, data rejestracji) i wypożyczeń (id, id_książki, id_użytkownika, data_wypożyczenia, data_zwrotu_planowana, data_zwrotu_rzeczywista).

Procedura: Napisz procedurę dodaj_wypozyczenie, która dodaje nowe wypożyczenie, sprawdza dostępność książki i aktualizuje jej stan.

Funkcja: Stwórz funkcję oblicz_kare, która oblicza karę za opóźnienie (używając wbudowanych funkcji dat, np. DATEDIFF lub DATE_ADD), zwracając kwotę na podstawie liczby dni spóźnienia.

Wyzwalacz (Trigger): Utwórz trigger po_zwrocie_ksiazki, który po aktualizacji rekordu wypożyczenia (gdy data_zwrotu_rzeczywista jest ustawiona) automatycznie zmienia stan książki na dostępny i loguje zdarzenie.

Raporty: Zapytanie SQL generujące raport bilansu wypożyczeń – suma liczby wypożyczeń per użytkownik w danym miesiącu (używając SUM i GROUP BY), np. SELECT id_użytkownika, SUM(1) AS liczba_wypozyczen FROM wypozyczenia WHERE MONTH(data_wypożyczenia) = ? GROUP BY id_użytkownika;.

Zapytania z funkcjami dat/stringów: Zapytanie wyświetlające użytkowników zarejestrowanych w ostatnim roku z sformatowanym imieniem (np. UPPER(imie) || ' ' || LOWER(nazwisko)) i wiekiem na podstawie daty rejestracji (YEAR(CURDATE()) - YEAR(data_rejestracji)).
*/

-- ===============================


DROP TABLE IF EXISTS logi_zwrotow;
DROP TABLE IF EXISTS wypozyczenia;
DROP TABLE IF EXISTS uzytkownicy;
DROP TABLE IF EXISTS ksiazki;


CREATE TABLE ksiazki (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tytul VARCHAR(100),
    autor VARCHAR(100),
    stan_dostepnosci BOOLEAN DEFAULT TRUE
);

CREATE TABLE uzytkownicy (
    id INT PRIMARY KEY AUTO_INCREMENT,
    imie VARCHAR(50),
    nazwisko VARCHAR(50),
    data_rejestracji DATE
);

CREATE TABLE wypozyczenia (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_ksiazki INT,
    id_uzytkownika INT,
    data_wypozyczenia DATE,
    data_zwrotu_planowana DATE,
    data_zwrotu_rzeczywista DATE,
    FOREIGN KEY (id_ksiazki) REFERENCES ksiazki(id),
    FOREIGN KEY (id_uzytkownika) REFERENCES uzytkownicy(id)
);

CREATE TABLE logi_zwrotow (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_wypozyczenia INT,
    data_zwrotu TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    opis VARCHAR(255)
);


INSERT INTO ksiazki (tytul, autor, stan_dostepnosci)
VALUES 
('Lalka', 'Bolesław Prus', TRUE),
('Zbrodnia i kara', 'Fiodor Dostojewski', TRUE),
('Pan Tadeusz', 'Adam Mickiewicz', TRUE);

INSERT INTO uzytkownicy (imie, nazwisko, data_rejestracji)
VALUES 
('Anna', 'Kowalska', '2024-03-10'),
('Jan', 'Nowak', '2023-11-25');

INSERT INTO wypozyczenia (id_ksiazki, id_uzytkownika, data_wypozyczenia, data_zwrotu_planowana)
VALUES 
(1, 1, CURDATE(), DATE_ADD(CURDATE(), INTERVAL 14 DAY));



/*
Wyzwalacz (Trigger): Utwórz trigger po_zwrocie_ksiazki, który po aktualizacji rekordu wypożyczenia (gdy data_zwrotu_rzeczywista jest ustawiona) automatycznie zmienia stan książki na dostępny i loguje zdarzenie
*/

DELIMITER //

CREATE TRIGGER po_zwrocie_ksiazki
AFTER UPDATE ON wypozyczenia
FOR EACH ROW
BEGIN
    IF NEW.data_zwrotu_rzeczywista IS NOT NULL THEN
        UPDATE ksiazki
        SET stan_dostepnosci = TRUE
        WHERE id = NEW.id_ksiazki;

        INSERT INTO logi_zwrotow (id_wypozyczenia, opis)
        VALUES (NEW.id, CONCAT('Książka ID ', NEW.id_ksiazki, ' została zwrócona przez użytkownika ID ', NEW.id_uzytkownika, '.'));
    END IF;
END//

DELIMITER ;
