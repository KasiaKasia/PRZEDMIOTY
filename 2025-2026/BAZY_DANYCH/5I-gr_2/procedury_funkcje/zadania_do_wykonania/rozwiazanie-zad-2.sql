DELIMITER //

CREATE FUNCTION oblicz_rabat(kwota DECIMAL(10,2))
RETURNS DECIMAL(4,2)
DETERMINISTIC
BEGIN
    DECLARE rabat DECIMAL(4,2);
    
    CASE
        WHEN kwota < 100.00 THEN
            SET rabat = 0.00;
        WHEN kwota >= 100.00 AND kwota < 500.00 THEN
            SET rabat = 0.05;
        WHEN kwota >= 500.00 AND kwota < 1000.00 THEN
            SET rabat = 0.10;
        ELSE
            SET rabat = 0.15;
    END CASE;
    
    RETURN rabat;
END //

DELIMITER ;

-- Testowanie funkcji w zapytaniu
SELECT id, id_klienta, kwota, oblicz_rabat(kwota) AS procent_rabatu, kwota * oblicz_rabat(kwota) AS kwota_rabatu


/*
+----+------------+--------+---------------+--------------+
| id | id_klienta | kwota  | procent_rabatu | kwota_rabatu |
+----+------------+--------+---------------+--------------+
| 1  | 1          | 150.00 | 0.05          | 7.50         |
| 2  | 1          | 300.00 | 0.05          | 15.00        |
| 3  | 2          | 600.00 | 0.10          | 60.00        |
| 4  | 3          | 50.00  | 0.00          | 0.00         |
| 5  | 2          | 1000.00| 0.15          | 150.00       |
+----+------------+--------+---------------+--------------+


*/
FROM zakupy;