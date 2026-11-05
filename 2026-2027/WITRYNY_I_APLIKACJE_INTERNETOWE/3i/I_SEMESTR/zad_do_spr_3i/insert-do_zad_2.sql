
CREATE DATABASE biblioteka_szkolna
CHARACTER SET utf8mb4
COLLATE utf8mb4_polish_ci;

USE biblioteka_szkolna;

CREATE TABLE ksiazki (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tytul VARCHAR(100) NOT NULL,
    autor VARCHAR(100) NOT NULL,
    rok_wydania INT NOT NULL,
    dostepnosc VARCHAR(20) NOT NULL
);

INSERT INTO ksiazki
(tytul, autor, rok_wydania, dostepnosc)
VALUES
('Lalka', 'Bolesław Prus', 1890, 'Dostępna'),
('Pan Tadeusz', 'Adam Mickiewicz', 1834, 'Dostępna'),
('Quo Vadis', 'Henryk Sienkiewicz', 1896, 'Wypożyczona'),
('Kamienie na szaniec', 'Aleksander Kamiński', 1943, 'Dostępna'),
('Zemsta', 'Aleksander Fredro', 1834, 'Wypożyczona'),
('Mały Książę', 'Antoine de Saint-Exupéry', 1943, 'Dostępna');
