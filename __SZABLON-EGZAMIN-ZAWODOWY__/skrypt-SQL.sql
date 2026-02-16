-- USUWANIE TABEL JEŚLI ISTNIEJĄ
DROP TABLE IF EXISTS zamowienie;
DROP TABLE IF EXISTS opony;

-- TWORZENIE TABELI OPONY
CREATE TABLE opony (
    nr_kat INT PRIMARY KEY,
    producent VARCHAR(50) NOT NULL,
    model VARCHAR(50) NOT NULL,
    sezon VARCHAR(20) NOT NULL,
    cena DECIMAL(10,2) NOT NULL
);

-- TWORZENIE TABELI ZAMOWIENIE
CREATE TABLE zamowienie (
    id_zam INT PRIMARY KEY AUTO_INCREMENT,
    nr_kat INT,
    ilosc INT NOT NULL,
    FOREIGN KEY (nr_kat) REFERENCES opony(nr_kat)
);

-- INSERTY DO TABELI OPONY (10 rekordów)
INSERT INTO opony (nr_kat, producent, model, sezon, cena) VALUES
(1, 'Michelin', 'Primacy 4', 'Letnie', 399.99),
(2, 'Continental', 'WinterContact TS860', 'Zimowe', 429.50),
(3, 'Goodyear', 'EfficientGrip', 'Letnie', 359.00),
(4, 'Dębica', 'Frigo 2', 'Zimowe', 249.99),
(5, 'Pirelli', 'Cinturato P7', 'Letnie', 415.20),
(6, 'Bridgestone', 'Blizzak LM005', 'Zimowe', 445.00),
(7, 'Hankook', 'Ventus Prime', 'Letnie', 310.00),
(8, 'Nokian', 'WR Snowproof', 'Zimowe', 389.99),
(9, 'Fulda', 'EcoControl', 'Letnie', 275.50),
(10, 'Kormoran', 'Snow', 'Zimowe', 199.99);

-- INSERTY DO TABELI ZAMOWIENIE (10 rekordów)
INSERT INTO zamowienie (nr_kat, ilosc) VALUES
(1, 4),
(2, 2),
(3, 1),
(4, 4),
(5, 2),
(6, 3),
(7, 1),
(8, 4),
(9, 2),
(10, 3);
