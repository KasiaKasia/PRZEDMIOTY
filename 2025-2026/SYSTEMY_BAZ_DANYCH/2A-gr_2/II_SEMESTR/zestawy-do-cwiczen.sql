-- Zestaw 1: Biblioteka

CREATE TABLE IF NOT EXISTS czytelnicy (
    id INT PRIMARY KEY AUTO_INCREMENT,
    imie VARCHAR(50) NOT NULL,
    nazwisko VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS ksiazki (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tytul VARCHAR(100) NOT NULL,
    autor VARCHAR(80),
    kategoria VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS wypozyczenia (
    id INT PRIMARY KEY AUTO_INCREMENT,
    czytelnik_id INT,
    ksiazka_id INT,
    data_wypozyczenia DATE DEFAULT (CURRENT_DATE),
    FOREIGN KEY (czytelnik_id) REFERENCES czytelnicy(id),
    FOREIGN KEY (ksiazka_id) REFERENCES ksiazki(id)
);

-- Dane
INSERT IGNORE INTO czytelnicy (imie, nazwisko) VALUES ('Ala', 'Kowalska'), ('Bartek', 'Nowak');
INSERT INTO ksiazki (tytul, autor, kategoria) VALUES 
    ('Władca Pierścieni', 'Tolkien', 'Fantasy'),
    ('Harry Potter', 'Rowling', 'Fantasy'),
    ('1984', 'Orwell', 'Klasyka');
INSERT INTO wypozyczenia (czytelnik_id, ksiazka_id) VALUES (1,1), (2,2);

-- Zadania:
-- 1. INSERT: Dodaj wypożyczenie książki „1984” dla Bartka Nowaka (tylko jeśli istnieje)
-- 2. DELETE: Usuń wszystkie wypożyczenia sprzed 2025-03-01
-- 3. SELECT z JOIN: Pokaż wszystkie wypożyczenia z imieniem czytelnika, tytułem książki i kategorią (posortuj po tytule)

-- Zestaw 2: Szkoła

CREATE TABLE IF NOT EXISTS uczniowie (
    id INT PRIMARY KEY AUTO_INCREMENT,
    imie VARCHAR(50) NOT NULL,
    nazwisko VARCHAR(50) NOT NULL,
    klasa VARCHAR(10)
);

CREATE TABLE IF NOT EXISTS przedmioty (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nazwa VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS oceny (
    id INT PRIMARY KEY AUTO_INCREMENT,
    uczen_id INT,
    przedmiot_id INT,
    ocena DECIMAL(3,1),
    data DATE DEFAULT (CURRENT_DATE),
    FOREIGN KEY (uczen_id) REFERENCES uczniowie(id),
    FOREIGN KEY (przedmiot_id) REFERENCES przedmioty(id)
);

-- Dane
INSERT IGNORE INTO uczniowie (imie, nazwisko, klasa) VALUES ('Ola', 'Wiśniewska', '1A'), ('Kuba', 'Zieliński', '1B');
INSERT INTO przedmioty (nazwa) VALUES ('Matematyka'), ('Polski'), ('Angielski');
INSERT INTO oceny (uczen_id, przedmiot_id, ocena) VALUES (1,1,5.0), (2,2,4.5);

-- Zadania:
-- 1. INSERT: Dodaj ocenę 5.0 z Matematyki dla Oli Wiśniewskiej (tylko jeśli istnieje)
-- 2. DELETE: Usuń oceny sprzed 2025-03-20
-- 3. SELECT z JOIN: Pokaż wszystkie oceny z imieniem ucznia, nazwą przedmiotu i datą (posortuj malejąco po ocenie)

-- Zestaw 3: Sklep (elektronika)

CREATE TABLE IF NOT EXISTS kategorie (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nazwa VARCHAR(50) NOT NULL UNIQUE
);

CREATE TABLE IF NOT EXISTS produkty (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nazwa VARCHAR(100) NOT NULL,
    cena DECIMAL(10,2) NOT NULL,
    kategoria_id INT,
    FOREIGN KEY (kategoria_id) REFERENCES kategorie(id)
);

CREATE TABLE IF NOT EXISTS zamowienia (
    id INT PRIMARY KEY AUTO_INCREMENT,
    produkt_id INT,
    ilosc INT DEFAULT 1,
    data_zamowienia DATE DEFAULT (CURRENT_DATE),
    FOREIGN KEY (produkt_id) REFERENCES produkty(id)
);

-- Dane
INSERT IGNORE INTO kategorie (nazwa) VALUES ('Smartfony'), ('Laptopy');
INSERT INTO produkty (nazwa, cena, kategoria_id) VALUES 
    ('iPhone 15', 4299, 1), ('Dell XPS', 5999, 2);
INSERT INTO zamowienia (produkt_id, ilosc) VALUES (1,1), (2,1);

-- Zadania:
-- 1. INSERT: Dodaj zamówienie na „iPhone 15” (tylko jeśli produkt istnieje)
-- 2. DELETE: Usuń zamówienia sprzed 2025-03-25
-- 3. SELECT z JOIN: Pokaż zamówienia z nazwą produktu, ceną i kategorią (oblicz wartość = cena × ilość)

-- Zestaw 4: Firma (pracownicy i projekty)

CREATE TABLE IF NOT EXISTS dzialy (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nazwa VARCHAR(50) NOT NULL UNIQUE
);

CREATE TABLE IF NOT EXISTS pracownicy (
    id INT PRIMARY KEY AUTO_INCREMENT,
    imie VARCHAR(50) NOT NULL,
    nazwisko VARCHAR(50) NOT NULL,
    dzial_id INT,
    FOREIGN KEY (dzial_id) REFERENCES dzialy(id)
);

CREATE TABLE IF NOT EXISTS projekty (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nazwa_projektu VARCHAR(100) NOT NULL,
    pracownik_id INT,
    FOREIGN KEY (pracownik_id) REFERENCES pracownicy(id)
);

-- Dane
INSERT IGNORE INTO dzialy (nazwa) VALUES ('IT'), ('Sprzedaż');
INSERT INTO pracownicy (imie, nazwisko, dzial_id) VALUES ('Anna','Nowak',1), ('Jan','Kowalski',2);
INSERT INTO projekty (nazwa_projektu, pracownik_id) VALUES ('CRM',1);

-- Zadania:
-- 1. INSERT: Dodaj projekt „Strona www” dla Jana Kowalskiego (tylko jeśli istnieje)
-- 2. DELETE: Usuń projekty bez przypisanego pracownika
-- 3. SELECT z JOIN: Pokaż projekty z imieniem i nazwiskiem pracownika oraz nazwą działu

-- Zestaw 5: Kino

CREATE TABLE IF NOT EXISTS filmy (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tytul VARCHAR(100) NOT NULL,
    gatunek VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS seanse (
    id INT PRIMARY KEY AUTO_INCREMENT,
    film_id INT,
    data_seansu DATE,
    godzina TIME,
    FOREIGN KEY (film_id) REFERENCES filmy(id)
);

CREATE TABLE IF NOT EXISTS bilety (
    id INT PRIMARY KEY AUTO_INCREMENT,
    seans_id INT,
    imie_klienta VARCHAR(50),
    FOREIGN KEY (seans_id) REFERENCES seanse(id)
);

-- Dane (wstaw sam 2-3 rekordy jak w poprzednich)

-- Zadania:
-- 1. INSERT: Dodaj bilet na seans filmu „Dune” (tylko jeśli seans istnieje)
-- 2. DELETE: Usuń bilety sprzed 2025-03-20
-- 3. SELECT z JOIN: Pokaż bilety z tytułem filmu, datą seansu i imieniem klienta

-- Zestaw 6: Szpital

CREATE TABLE IF NOT EXISTS pacjenci (
    id INT PRIMARY KEY AUTO_INCREMENT,
    imie VARCHAR(50) NOT NULL,
    nazwisko VARCHAR(50) NOT NULL,
    data_urodzenia DATE
);

CREATE TABLE IF NOT EXISTS lekarze (
    id INT PRIMARY KEY AUTO_INCREMENT,
    imie VARCHAR(50) NOT NULL,
    specjalizacja VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS wizyty (
    id INT PRIMARY KEY AUTO_INCREMENT,
    pacjent_id INT,
    lekarz_id INT,
    data_wizyty DATE DEFAULT (CURRENT_DATE),
    FOREIGN KEY (pacjent_id) REFERENCES pacjenci(id),
    FOREIGN KEY (lekarz_id) REFERENCES lekarze(id)
);

-- Dane
INSERT IGNORE INTO pacjenci (imie, nazwisko, data_urodzenia) VALUES ('Piotr', 'Zieliński', '1995-05-12'), ('Maria', 'Kowalska', '1988-11-03');
INSERT INTO lekarze (imie, specjalizacja) VALUES ('Dr Nowak', 'Kardiolog'), ('Dr Wiśniewska', 'Pediatra');
INSERT INTO wizyty (pacjent_id, lekarz_id, data_wizyty) VALUES (1,1,'2025-03-20'), (2,2,'2025-03-22');

-- Zadania:
-- 1. INSERT: Dodaj wizytę u „Dr Nowak” dla Piotra Zielińskiego (tylko jeśli istnieje)
-- 2. DELETE: Usuń wizyty sprzed 2025-03-21
-- 3. SELECT z JOIN: Pokaż wizyty z imieniem pacjenta, nazwiskiem lekarza i specjalizacją (posortuj po dacie)


-- Zestaw 7: Restauracja

CREATE TABLE IF NOT EXISTS stoliki (
    id INT PRIMARY KEY AUTO_INCREMENT,
    numer INT NOT NULL UNIQUE,
    ilosc_miejsc INT
);

CREATE TABLE IF NOT EXISTS dania (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nazwa VARCHAR(80) NOT NULL,
    cena DECIMAL(6,2)
);

CREATE TABLE IF NOT EXISTS zamowienia_restauracja (
    id INT PRIMARY KEY AUTO_INCREMENT,
    stolik_id INT,
    danie_id INT,
    data_zamowienia DATE DEFAULT (CURRENT_DATE),
    FOREIGN KEY (stolik_id) REFERENCES stoliki(id),
    FOREIGN KEY (danie_id) REFERENCES dania(id)
);

-- Dane
INSERT IGNORE INTO stoliki (numer, ilosc_miejsc) VALUES (1,4), (2,2);
INSERT INTO dania (nazwa, cena) VALUES ('Pizza Margherita', 32.50), ('Schabowy', 45.00);
INSERT INTO zamowienia_restauracja (stolik_id, danie_id) VALUES (1,1), (2,2);

-- Zadania:
-- 1. INSERT: Dodaj zamówienie „Schabowy” na stolik nr 1 (tylko jeśli stolik i danie istnieją)
-- 2. DELETE: Usuń zamówienia sprzed 2025-03-25
-- 3. SELECT z JOIN: Pokaż zamówienia z numerem stolika, nazwą dania i ceną (oblicz sumę)

-- Zestaw 8: Siłownia

CREATE TABLE IF NOT EXISTS czlonkowie (
    id INT PRIMARY KEY AUTO_INCREMENT,
    imie VARCHAR(50) NOT NULL,
    nazwisko VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS zajecia (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nazwa VARCHAR(80) NOT NULL,
    trener VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS zapisy (
    id INT PRIMARY KEY AUTO_INCREMENT,
    czlonek_id INT,
    zajecia_id INT,
    data_zapisu DATE DEFAULT (CURRENT_DATE),
    FOREIGN KEY (czlonek_id) REFERENCES czlonkowie(id),
    FOREIGN KEY (zajecia_id) REFERENCES zajecia(id)
);

-- Dane
INSERT IGNORE INTO czlonkowie (imie, nazwisko) VALUES ('Ola', 'Wiśniewska'), ('Kuba', 'Zieliński');
INSERT INTO zajecia (nazwa, trener) VALUES 
    ('CrossFit', 'Trener Anna'),
    ('Joga', 'Trener Piotr');
INSERT INTO zapisy (czlonek_id, zajecia_id) VALUES (1,1), (2,2);

-- Zadania:
-- 1. INSERT: Dodaj zapis na zajęcia „Joga” dla Kuby Zielińskiego (tylko jeśli członek i zajęcia istnieją)
-- 2. DELETE: Usuń wszystkie zapisy sprzed 2025-03-25
-- 3. SELECT z JOIN: Pokaż wszystkie zapisy z imieniem członka, nazwą zajęć i trenerem (posortuj po dacie)

-- Zestaw 9: Hotel

CREATE TABLE IF NOT EXISTS pokoje (
    id INT PRIMARY KEY AUTO_INCREMENT,
    numer INT NOT NULL UNIQUE,
    ilosc_miejsc INT
);

CREATE TABLE IF NOT EXISTS goscie (
    id INT PRIMARY KEY AUTO_INCREMENT,
    imie VARCHAR(50) NOT NULL,
    nazwisko VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS rezerwacje (
    id INT PRIMARY KEY AUTO_INCREMENT,
    pokoj_id INT,
    gosc_id INT,
    data_rezerwacji DATE DEFAULT (CURRENT_DATE),
    FOREIGN KEY (pokoj_id) REFERENCES pokoje(id),
    FOREIGN KEY (gosc_id) REFERENCES goscie(id)
);

-- Dane
INSERT IGNORE INTO pokoje (numer, ilosc_miejsc) VALUES (101,2), (102,4);
INSERT INTO goscie (imie, nazwisko) VALUES ('Jan', 'Kowalski'), ('Anna', 'Nowak');
INSERT INTO rezerwacje (pokoj_id, gosc_id) VALUES (1,1), (2,2);

-- Zadania:
-- 1. INSERT: Dodaj rezerwację pokoju 101 dla Jana Kowalskiego (tylko jeśli pokój i gość istnieją)
-- 2. DELETE: Usuń rezerwacje sprzed 2025-03-20
-- 3. SELECT z JOIN: Pokaż rezerwacje z numerem pokoju, imieniem i nazwiskiem gościa (posortuj po dacie)

-- Zestaw 10: Bank

CREATE TABLE IF NOT EXISTS konta (
    id INT PRIMARY KEY AUTO_INCREMENT,
    klient_id INT,
    numer_konta VARCHAR(30) UNIQUE,
    saldo DECIMAL(12,2) DEFAULT 0.00,
    FOREIGN KEY (klient_id) REFERENCES klienci(id)
);

CREATE TABLE IF NOT EXISTS transakcje (
    id INT PRIMARY KEY AUTO_INCREMENT,
    konto_id INT,
    kwota DECIMAL(10,2),
    typ ENUM('wpłata','wypłata'),
    data_transakcji DATE DEFAULT (CURRENT_DATE),
    FOREIGN KEY (konto_id) REFERENCES konta(id)
);

-- Dane
INSERT IGNORE INTO klienci (imie, nazwisko) VALUES ('Piotr', 'Zieliński'), ('Maria', 'Kowalska');
INSERT INTO konta (klient_id, numer_konta, saldo) VALUES (1, '123456789', 2500.00);
INSERT INTO transakcje (konto_id, kwota, typ) VALUES (1, 500.00, 'wpłata');

-- Zadania:
-- 1. INSERT: Dodaj wpłatę 1000 zł na konto „123456789” (tylko jeśli konto istnieje)
-- 2. DELETE: Usuń transakcje sprzed 2025-03-01
-- 3. SELECT z JOIN: Pokaż transakcje z imieniem klienta, numerem konta i kwotą (posortuj malejąco po kwocie)


-- Zestaw 11: Serwis samochodowy

CREATE TABLE IF NOT EXISTS samochody (
    id INT PRIMARY KEY AUTO_INCREMENT,
    marka VARCHAR(50) NOT NULL,
    model VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS mechanicy (
    id INT PRIMARY KEY AUTO_INCREMENT,
    imie VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS naprawy (
    id INT PRIMARY KEY AUTO_INCREMENT,
    samochod_id INT,
    mechanik_id INT,
    data_naprawy DATE DEFAULT (CURRENT_DATE),
    FOREIGN KEY (samochod_id) REFERENCES samochody(id),
    FOREIGN KEY (mechanik_id) REFERENCES mechanicy(id)
);

-- Dane
INSERT IGNORE INTO samochody (marka, model) VALUES ('Toyota', 'Corolla'), ('BMW', '320');
INSERT INTO mechanicy (imie) VALUES ('Adam'), ('Tomasz');
INSERT INTO naprawy (samochod_id, mechanik_id) VALUES (1,1);

-- Zadania:
-- 1. INSERT: Dodaj naprawę dla BMW 320 u mechanika „Adam” (tylko jeśli rekordy istnieją)
-- 2. DELETE: Usuń naprawy sprzed 2025-03-22
-- 3. SELECT z JOIN: Pokaż naprawy z marką i modelem auta oraz imieniem mechanika


-- Zestaw 12: Salon fryzjerski


CREATE TABLE IF NOT EXISTS klienci_fryzjer (
    id INT PRIMARY KEY AUTO_INCREMENT,
    imie VARCHAR(50) NOT NULL,
    nazwisko VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS uslugi (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nazwa VARCHAR(80) NOT NULL,
    cena DECIMAL(6,2)
);

CREATE TABLE IF NOT EXISTS wizyty_fryzjer (
    id INT PRIMARY KEY AUTO_INCREMENT,
    klient_id INT,
    usluga_id INT,
    data_wizyty DATE DEFAULT (CURRENT_DATE),
    FOREIGN KEY (klient_id) REFERENCES klienci_fryzjer(id),
    FOREIGN KEY (usluga_id) REFERENCES uslugi(id)
);

-- Dane
INSERT IGNORE INTO klienci_fryzjer (imie, nazwisko) VALUES ('Kasia', 'Nowak'), ('Marek', 'Wiśniewski');
INSERT INTO uslugi (nazwa, cena) VALUES ('Strzyżenie', 80.00), ('Farbowanie', 150.00);
INSERT INTO wizyty_fryzjer (klient_id, usluga_id) VALUES (1,1);

-- Zadania:
-- 1. INSERT: Dodaj wizytę na „Farbowanie” dla Kasi Nowak (tylko jeśli klient i usługa istnieją)
-- 2. DELETE: Usuń wizyty sprzed 2025-03-25
-- 3. SELECT z JOIN: Pokaż wizyty z imieniem klienta, nazwą usługi i ceną

-- Zestaw 13: Sklep spożywczy

CREATE TABLE IF NOT EXISTS kategorie_spozywcze (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nazwa VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS produkty_spozywcze (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nazwa VARCHAR(100) NOT NULL,
    kategoria_id INT,
    FOREIGN KEY (kategoria_id) REFERENCES kategorie_spozywcze(id)
);

CREATE TABLE IF NOT EXISTS zakupy (
    id INT PRIMARY KEY AUTO_INCREMENT,
    produkt_id INT,
    ilosc INT DEFAULT 1,
    data_zakupu DATE DEFAULT (CURRENT_DATE),
    FOREIGN KEY (produkt_id) REFERENCES produkty_spozywcze(id)
);

-- Dane (wstaw 2-3 rekordy)
INSERT IGNORE INTO kategorie_spozywcze (nazwa) VALUES ('Nabiał'), ('Pieczywo');
INSERT INTO produkty_spozywcze (nazwa, kategoria_id) VALUES ('Mleko',1), ('Chleb',2);
INSERT INTO zakupy (produkt_id, ilosc) VALUES (1,2);

-- Zadania:
-- 1. INSERT: Dodaj zakup „Chleb” (tylko jeśli produkt istnieje)
-- 2. DELETE: Usuń zakupy sprzed 2025-03-20
-- 3. SELECT z JOIN: Pokaż zakupy z nazwą produktu, kategorią i ilością

-- Zestaw 14: Muzeum


CREATE TABLE IF NOT EXISTS eksponaty (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nazwa VARCHAR(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS zwiedzajacy (
    id INT PRIMARY KEY AUTO_INCREMENT,
    imie VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS bilety_muzeum (
    id INT PRIMARY KEY AUTO_INCREMENT,
    eksponat_id INT,
    zwiedzajacy_id INT,
    data_wizyty DATE DEFAULT (CURRENT_DATE),
    FOREIGN KEY (eksponat_id) REFERENCES eksponaty(id),
    FOREIGN KEY (zwiedzajacy_id) REFERENCES zwiedzajacy(id)
);

-- Dane
INSERT IGNORE INTO eksponaty (nazwa) VALUES ('Mona Lisa'), ('Posąg Wolności');
INSERT INTO zwiedzajacy (imie) VALUES ('Tomek'), ('Ola');
INSERT INTO bilety_muzeum (eksponat_id, zwiedzajacy_id) VALUES (1,1);

-- Zadania:
-- 1. INSERT: Dodaj bilet na „Posąg Wolności” dla Oli (tylko jeśli istnieje)
-- 2. DELETE: Usuń bilety sprzed 2025-03-25
-- 3. SELECT z JOIN: Pokaż bilety z nazwą eksponatu i imieniem zwiedzającego

 -- Zestaw 15: Teatr

CREATE TABLE IF NOT EXISTS spektakle (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tytul VARCHAR(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS aktorzy (
    id INT PRIMARY KEY AUTO_INCREMENT,
    imie VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS bilety_teatr (
    id INT PRIMARY KEY AUTO_INCREMENT,
    spektakl_id INT,
    aktor_id INT,
    data_spektaklu DATE DEFAULT (CURRENT_DATE),
    FOREIGN KEY (spektakl_id) REFERENCES spektakle(id),
    FOREIGN KEY (aktor_id) REFERENCES aktorzy(id)
);

-- Dane
INSERT IGNORE INTO spektakle (tytul) VALUES ('Hamlet'), ('Makbet');
INSERT INTO aktorzy (imie) VALUES ('Robert'), ('Julia');
INSERT INTO bilety_teatr (spektakl_id, aktor_id) VALUES (1,1);

-- Zadania:
-- 1. INSERT: Dodaj bilet na „Makbet” dla Julii (tylko jeśli istnieje)
-- 2. DELETE: Usuń bilety sprzed 2025-03-28
-- 3. SELECT z JOIN: Pokaż bilety z tytułem spektaklu i imieniem aktora

-- Zestaw 16: Biuro podróży

CREATE TABLE IF NOT EXISTS wycieczki (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nazwa VARCHAR(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS klienty_biuro (
    id INT PRIMARY KEY AUTO_INCREMENT,
    imie VARCHAR(50) NOT NULL,
    nazwisko VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS rezerwacje_podrozy (
    id INT PRIMARY KEY AUTO_INCREMENT,
    wycieczka_id INT,
    klient_id INT,
    data_rezerwacji DATE DEFAULT (CURRENT_DATE),
    FOREIGN KEY (wycieczka_id) REFERENCES wycieczki(id),
    FOREIGN KEY (klient_id) REFERENCES klienty_biuro(id)
);

-- Dane
INSERT IGNORE INTO wycieczki (nazwa) VALUES ('Paryż 2025'), ('Rzym 2025');
INSERT INTO klienty_biuro (imie, nazwisko) VALUES ('Bartek', 'Kowalski'), ('Asia', 'Zielińska');
INSERT INTO rezerwacje_podrozy (wycieczka_id, klient_id) VALUES (1,1);

-- Zadania:
-- 1. INSERT: Dodaj rezerwację „Rzym 2025” dla Asi Zielińskiej (tylko jeśli istnieje)
-- 2. DELETE: Usuń rezerwacje sprzed 2025-03-20
-- 3. SELECT z JOIN: Pokaż rezerwacje z nazwą wycieczki i imieniem + nazwiskiem klienta

