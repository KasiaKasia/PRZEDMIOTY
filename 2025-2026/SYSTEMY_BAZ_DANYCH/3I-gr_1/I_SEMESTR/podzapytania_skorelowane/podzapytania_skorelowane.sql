CREATE TABLE dzialy (
    id INT PRIMARY KEY,
    nazwa VARCHAR(100) NOT NULL,
    srednia_pensja DECIMAL(10,2) -- opcjonalne pole, można też wyliczać w zapytaniach
);

CREATE TABLE pracownicy (
    id INT PRIMARY KEY,
    imie VARCHAR(100) NOT NULL,
    pensja DECIMAL(10,2) NOT NULL,
    id_dzial INT,
    FOREIGN KEY (id_dzial) REFERENCES dzialy(id)
);


INSERT INTO dzialy (id, nazwa, srednia_pensja) VALUES
(1, 'IT', NULL),
(2, 'Finanse', NULL),
(3, 'Marketing', NULL);


INSERT INTO pracownicy (id, imie, pensja, id_dzial) VALUES
(1, 'Adam',   8000.00, 1),
(2, 'Beata',  9500.00, 1),
(3, 'Cezary', 7200.00, 1),
(4, 'Daria',  6500.00, 2),
(5, 'Edward', 7000.00, 2),
(6, 'Fiona',  9000.00, 2),
(7, 'Grzegorz', 6000.00, 3),
(8, 'Hanna',    7500.00, 3),
(9, 'Igor',     5000.00, 3);
