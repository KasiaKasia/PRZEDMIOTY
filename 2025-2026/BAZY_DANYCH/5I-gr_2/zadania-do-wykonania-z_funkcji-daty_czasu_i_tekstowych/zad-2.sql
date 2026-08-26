DELIMITER //
CREATE FUNCTION GetOrderAgeInDays(order_id INT) RETURNS INT
BEGIN
    DECLARE order_dt DATETIME;
    DECLARE age_days INT;
    
    
END //
DELIMITER ;

/*
Zadanie 2: Dla funkcji dat i czasu (używając tabeli orders)

Opis zadania: Napisz funkcję składowaną (stored function) o nazwie GetOrderAgeInDays, która przyjmuje parametr order_id (ID zamówienia) i zwraca liczbę dni, jaka minęła od daty zamówienia do bieżącej daty. Funkcja powinna użyć NOW() (do pobrania bieżącej daty), DATEDIFF (do obliczenia różnicy w dniach) oraz DATE_ADD (do dodania interwału, np. 1 dnia, jeśli zamówienie jest z tego samego dnia, aby uniknąć zerowego wyniku).  

Przykładowe wywołanie funkcji: SELECT GetOrderAgeInDays(1);
Rozwiązanie (kod funkcji do napisania):

Funkcja powinna:

1. Pobrać datę zamówienia za pomocą SELECT.
2. Użyć DATEDIFF(NOW(), order_date) do obliczenia różnicy.
3. Jeśli wynik jest 0 (zamówienie z dziś), użyć DATE_ADD do symulacji minimalnego wieku (np. dodać 1 dzień).
4. Zwrócić obliczoną wartość jako INT.

*/