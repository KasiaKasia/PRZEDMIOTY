DELIMITER //
CREATE FUNCTION GetOrderAgeInDays(order_id INT) RETURNS INT
BEGIN
    DECLARE order_dt DATETIME;
    DECLARE age_days INT;
    
    SELECT order_date INTO order_dt FROM orders WHERE order_id = order_id;
    
    SET age_days = DATEDIFF(NOW(), order_dt);
    IF age_days = 0 THEN
        SET age_days = DATEDIFF(DATE_ADD(NOW(), INTERVAL 1 DAY), order_dt);
    END IF;
    
    RETURN age_days;
END //
DELIMITER ;