CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(100),
    password VARCHAR(255)
);

INSERT INTO users (username, password)
VALUES ('admin', 'admin123');
 