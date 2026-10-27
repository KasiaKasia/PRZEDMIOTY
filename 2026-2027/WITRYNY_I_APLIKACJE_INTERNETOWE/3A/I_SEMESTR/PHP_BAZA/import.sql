CREATE DATABASE szkola_php;

USE szkola_php;
 
CREATE TABLE uczniowie (
    id INT PRIMARY KEY AUTO_INCREMENT,
    imie VARCHAR(50) NOT NULL,
    nazwisko VARCHAR(50) NOT NULL,
    klasa VARCHAR(10) NOT NULL,
    wiek INT NOT NULL
);
 
INSERT INTO uczniowie (imie, nazwisko, klasa, wiek) VALUES
('Anna', 'Kowalska', '3A', 17),
('Jan', 'Nowak', '4B', 18),
('Oliwia', 'Malicka', '2C', 16),
('Kamil', 'Wiśniewski', '5A', 19),
('Natalia', 'Zielińska', '3B', 17);

 
SELECT * FROM uczniowie;