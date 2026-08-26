-- Tworzenie bazy jeśli nie istnieje
CREATE DATABASE IF NOT EXISTS sklep_internetowy;

-- Używanie bazy
USE sklep_internetowy;

-- Tworzenie tabeli jeśli nie istnieje
CREATE TABLE IF NOT EXISTS zakupy (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nazwa VARCHAR(255) NOT NULL,
    cena DECIMAL(10,2) NOT NULL,
    ilosc INT NOT NULL,
    data_zakupu DATE
);

-- Inserty (tylko jeśli tabela jest pusta)
INSERT INTO zakupy (nazwa, cena, ilosc, data_zakupu)
SELECT * FROM (
    SELECT 'Chleb', 3.50, 2, '2026-04-01' UNION ALL
    SELECT 'Mleko', 2.80, 1, '2026-04-02' UNION ALL
    SELECT 'Masło', 7.20, 1, '2026-04-03' UNION ALL
    SELECT 'Ser', 12.50, 1, '2026-04-04' UNION ALL
    SELECT 'Jajka', 9.99, 1, '2026-04-05'
) AS tmp
WHERE NOT EXISTS (SELECT 1 FROM zakupy);