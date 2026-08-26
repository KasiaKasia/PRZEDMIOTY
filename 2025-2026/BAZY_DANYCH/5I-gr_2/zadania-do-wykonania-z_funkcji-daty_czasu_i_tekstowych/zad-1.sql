DELIMITER //
CREATE PROCEDURE UpdateEmployeeEmail(IN employee_id INT, IN new_domain VARCHAR(50))
BEGIN
  
END //
DELIMITER ;

/*
Zadanie 1: Dla funkcji tekstowych (używając tabeli employees)

Opis zadania: Napisz procedurę składowaną (stored procedure) o nazwie UpdateEmployeeEmail, która przyjmuje parametr employee_id (ID pracownika) i nowy ciąg znaków do zamiany (np. nową domenę e-mail). Procedura powinna użyć funkcji tekstowych takich jak REPLACE (do zamiany części e-maila), CONCAT (do połączenia elementów e-maila) oraz LOWER (do normalizacji e-maila na małe litery). Procedura powinna zaktualizować e-mail w tabeli employees i zwrócić zaktualizowany rekord.  

Przykładowe wywołanie procedury: CALL UpdateEmployeeEmail(1, 'firma.pl');

Rozwiązanie (kod procedury do napisania):

Procedura powinna:

1. Pobrać istniejący e-mail za pomocą SELECT.
2. Użyć REPLACE do zamiany domeny (np. 'example.com' na nową).
3. Użyć LOWER do konwersji całego e-maila na małe litery.
4. Użyć CONCAT do ewentualnego połączenia części e-maila, jeśli potrzeba.
5. Zaktualizować rekord za pomocą UPDATE.
6. Zwrócić zaktualizowany rekord za pomocą SELECT.


CREATE TABLE employees (
    id INT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(100)
);

INSERT INTO employees (id, first_name, last_name, email) VALUES
(1, 'Jan', 'Kowalski', 'jan.kowalski@example.com'),
(2, 'Anna', 'Nowak', 'anna.nowak@example.com'),
(3, 'Michał', 'Wiśniewski', 'michal.wisniewski@przyklad.pl');


*/