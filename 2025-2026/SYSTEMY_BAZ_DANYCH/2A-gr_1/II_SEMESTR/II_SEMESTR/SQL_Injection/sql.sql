CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(100),
    password VARCHAR(255)
);

ALTER TABLE users MODIFY password VARCHAR(255);

INSERT INTO users (username, password)
VALUES ('admin', 'admin123');
 
INSERT INTO users (username, password)
VALUES ('admin1', 'admin123');
UPDATE users SET password = '$2y$10$b7KGld6S6V3kS3aRarov4eqRhPbrjN2EEsbKs2FwziidWGOCAKer6' WHERE username = 'admin1';