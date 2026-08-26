-- Tworzenie bazy danych jeśli nie istnieje
CREATE DATABASE IF NOT EXISTS uczniowie
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

-- Używanie bazy
USE uczniowie;

-- Tworzenie tabeli jeśli nie istnieje
CREATE TABLE IF NOT EXISTS uczniowie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    imie VARCHAR(100) NOT NULL,
    nazwisko VARCHAR(100) NOT NULL,
    wiek INT NOT NULL,
    klasa VARCHAR(20) NOT NULL
) ENGINE=InnoDB
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

-- Wstawianie danych tylko jeśli tabela jest pusta
INSERT INTO uczniowie (imie, nazwisko, wiek, klasa)
SELECT * FROM (
    SELECT 'Anna', 'Kowalska', 17, '3A' UNION ALL
    SELECT 'Jan', 'Nowak', 18, '4B' UNION ALL
    SELECT 'Piotr', 'Wiśniewski', 16, '2C' UNION ALL
    SELECT 'Katarzyna', 'Wójcik', 17, '3B' UNION ALL
    SELECT 'Michał', 'Kamiński', 18, '4A'
) AS tmp
WHERE NOT EXISTS (SELECT 1 FROM uczniowie);