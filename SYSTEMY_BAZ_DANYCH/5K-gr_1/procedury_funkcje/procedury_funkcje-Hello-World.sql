

DROP PROCEDURE pokaz_hello_world;
-- procedura
DELIMITER //

CREATE PROCEDURE pokaz_hello_world()
BEGIN
    SELECT 'Hello World' AS wiadomosc;
END //

DELIMITER ;

CALL pokaz_hello_world();


-- funkcja

DELIMITER //

CREATE FUNCTION get_hello_world()
RETURNS VARCHAR(20)
DETERMINISTIC
BEGIN
    RETURN 'Hello World';
END //

DELIMITER ;

SELECT get_hello_world() AS wiadomosc;