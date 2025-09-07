
DROP TABLE Przedmioty;
DROP TABLE Osoby;
 

CREATE TABLE Osoby (
    osoba_id INT AUTO_INCREMENT PRIMARY KEY, 
    imie VARCHAR(50) NOT NULL,
    nazwisko VARCHAR(50) NOT NULL  
);

CREATE TABLE Przedmioty (
    przedmiot_id INT AUTO_INCREMENT PRIMARY KEY, 
    nazwa VARCHAR(100) NOT NULL,  
    osoba_id INT, 
    CONSTRAINT fk_przedmiot_osoba FOREIGN KEY (osoba_id) REFERENCES Osoby(osoba_id)
);


INSERT INTO Osoby (imie, nazwisko) VALUES
('Jan', 'Kowalski'),
('Anna', 'Nowak'),
('Piotr', 'Zieliński'),
('Kasia', 'Wiśniewska'),
('Patryk', 'Nowakowski');


INSERT INTO Przedmioty (nazwa, osoba_id) VALUES
('Laptop', 1),
('Telefon', 1),
('Rower', 2),
('Książka', 3),
('Plecak', 4),
('Kubek', null);

/*

Zadanie 1:
Utwórz zapytanie SQL, które wyświetli imię i nazwisko osoby oraz nazwę przedmiotu, który do niej należy.
Skorzystaj z instrukcji INNER JOIN, aby połączyć tabelę Osoby z tabelą Przedmioty po polu osoba_id.


Zadanie 2:
Napisz zapytanie SQL, które wyświetli wszystkie osoby (imie, nazwisko) oraz przypisane im przedmioty (nazwa).
Wykorzystaj LEFT JOIN, aby uwzględnić także te osoby, które nie mają przypisanego żadnego przedmiotu.


Zadanie 3:
Napisz zapytanie SQL, które wyświetli wszystkie przedmioty (nazwa) wraz z przypisanymi osobami (imie, nazwisko).
Użyj RIGHT JOIN, aby uwzględnić także te przedmioty, które nie są przypisane do żadnej osoby.


Zadanie 4:
Napisz zapytanie SQL, które wyświetli wszystkie osoby (imie, nazwisko) wraz z ich przedmiotami (nazwa).
Jeśli osoba nie ma przypisanego żadnego przedmiotu, powinna pojawić się w wyniku z pustą wartością w kolumnie nazwa.
Jeśli jakiś przedmiot nie jest przypisany do żadnej osoby, również powinien być widoczny w wyniku – wówczas kolumny imie i nazwisko powinny być puste.
Ponieważ MySQL nie obsługuje bezpośrednio FULL OUTER JOIN, zastosuj połączenie LEFT JOIN i RIGHT JOIN z operatorem UNION.


Zadanie 5:
Napisz polecenie SQL, które pokaże pełną definicję tabeli Przedmioty.
Wynik powinien zawierać:

- wszystkie kolumny tabeli wraz z typami danych,
- klucze główne i obce (PRIMARY KEY, FOREIGN KEY),
- indeksy i inne ograniczenia (CONSTRAINTS),
- ustawienia tabeli (ENGINE, CHARSET, COLLATE itp.).
*/
 