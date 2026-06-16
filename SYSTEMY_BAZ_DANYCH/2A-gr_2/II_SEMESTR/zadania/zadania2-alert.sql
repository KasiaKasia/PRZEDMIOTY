-- Tabela Dzial
CREATE TABLE Dzial (
    id INT PRIMARY KEY,
    nazwa VARCHAR(50)
);
-- Tabela Pracownik
CREATE TABLE Pracownik (
    id INT PRIMARY KEY,
    imie VARCHAR(50),
    dzial_id INT
);
-- Dane
INSERT INTO Dzial VALUES
(1, 'IT'),
(2, 'HR'),
(3, 'Ksiegowosc');

INSERT INTO Pracownik VALUES
(1, 'Jan', 1),
(2, 'Anna', 2),
(3, 'Piotr', 1);

-- ========== ZADANIA ==========

/*
Zadanie 1 - Dodanie kolumny

Dodaj do tabeli Pracownik kolumnę:

nazwisko VARCHAR(50)
*/
 
/* 
Zadanie 2 - Uzupełnienie danych

Po dodaniu kolumny ustaw nazwiska dla tabeli Pracownik:

Jan -> Kowalski
Anna -> Nowak
Piotr -> Zielinski
*/
/*
Zadanie 3 - Zmiana długości kolumny

Zmień długość kolumny dla tabeli Pracownik:

imie VARCHAR(50)

na:

imie VARCHAR(100)
*/
 
/* 
Zadanie 4 - Dodanie wieku

Dodaj kolumnę dla tabeli Pracownik:

wiek INT
 
*/

/*
Zadanie 5 - CHECK

Dodaj ograniczenie dla tabeli Pracownik:

wiek >= 18
*/
/* 
Zadanie 6 - Klucz obcy

Dodaj relację między:
Pracownik.dzial_id

oraz
Dzial.id
*/
/* 
Zadanie 7 - Domyślna wartość

Ustaw domyślną wartość dla tabeli Pracownik w kolumnie imie na wartość  'Nieznane':

imie = 'Nieznane'
*/
/* 
Zadanie 8 - Dodanie emaila

Dodaj kolumnę:
email VARCHAR(100)

oraz
telefon VARCHAR(20)

jednym poleceniem.
*/
/* 
Zadanie 9 - Indeks

Utwórz indeks w tabeli Procownik dla kolumny:
email
*/
/*  
Zadanie 10 - Usunięcie indeksu

Usuń indeks:
idx_email
*/

/*
Zadanie 11 - Zmiana nazwy kolumny

Zmień:
imie

na

imie_pracownika
*/
/*
Zadanie 12 - Zmiana kolejności kolumn

Przenieś kolumnę:
wiek

zaraz po:
id
*/
/*
Zadanie 13 - Dodanie AUTO_INCREMENT

Ustaw AUTO_INCREMENT dla kolumny:
id
*/
/*
Zadanie 14 - Usunięcie klucza obcego

Usuń relację:

FK_Pracownik_Dzial
*/
/* 
Zadanie 15 - Usunięcie kolumny

Usuń kolumnę:

telefon
*/
/*
Zadanie 16 - Dodanie wielu constraintów

Dodaj:

wiek >= 18
wiek <= 65 
*/