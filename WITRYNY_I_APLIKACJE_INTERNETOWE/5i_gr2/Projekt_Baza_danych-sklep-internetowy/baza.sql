
CREATE TABLE IF NOT EXISTS uzytkownicy (
    id INT AUTO_INCREMENT PRIMARY KEY,
    imie VARCHAR(50),
    nazwisko VARCHAR(50),
    email VARCHAR(100),
    data_rejestracji DATE
);

CREATE TABLE IF NOT EXISTS kategorie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nazwa VARCHAR(100),
    opis TEXT
);

CREATE TABLE IF NOT EXISTS zakupy (
    id INT AUTO_INCREMENT PRIMARY KEY,
    uzytkownik_id INT,
    kategoria_id INT,
    produkt VARCHAR(100),
    cena DECIMAL(10,2),
    data_zakupu DATETIME,
    FOREIGN KEY (uzytkownik_id) REFERENCES uzytkownicy(id),
    FOREIGN KEY (kategoria_id) REFERENCES kategorie(id)
);

INSERT INTO uzytkownicy (imie, nazwisko, email, data_rejestracji) VALUES
('Anna', 'Kowalska', 'anna@example.com', '2022-01-15'),
('Jan', 'Nowak', 'jan@example.com', '2023-04-10'),
('Kasia', 'Mazur', 'kasia@example.com', '2021-12-01');

INSERT INTO kategorie (nazwa, opis) VALUES
('Elektronika', 'Urządzenia elektroniczne i akcesoria'),
('Moda', 'Odzież, obuwie, dodatki'),
('Sport', 'Sprzęt sportowy i akcesoria');

INSERT INTO zakupy (uzytkownik_id, kategoria_id, produkt, cena, data_zakupu) VALUES
(1, 1, 'Laptop HP', 3500.00, '2024-02-01 12:30:00'),
(1, 2, 'Kurtka zimowa', 290.99, '2023-11-28 08:20:00'),
(2, 3, 'Piłka nożna', 120.00, '2024-01-10 16:00:00'),
(3, 1, 'Smartfon Samsung', 2900.00, '2023-06-03 19:40:00');