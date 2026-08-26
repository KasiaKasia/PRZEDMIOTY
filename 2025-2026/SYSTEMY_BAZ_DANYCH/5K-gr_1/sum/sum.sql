
CREATE TABLE Klienci (
    klient_id INT PRIMARY KEY AUTO_INCREMENT,
    imie VARCHAR(50) NOT NULL,
    nazwisko VARCHAR(50) NOT NULL
);


CREATE TABLE Zakupy (
    zakup_id INT PRIMARY KEY AUTO_INCREMENT,
    klient_id INT NOT NULL,
    kwota DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (klient_id) REFERENCES Klienci(klient_id)
);

CREATE TABLE Zwroty (
    zwrot_id INT PRIMARY KEY AUTO_INCREMENT,
    klient_id INT NOT NULL,
    kwota DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (klient_id) REFERENCES Klienci(klient_id)
);

INSERT INTO Klienci (imie, nazwisko) VALUES
('Jan', 'Kowalski'),
('Anna', 'Nowak'),
('Piotr', 'Wiśniewski');


INSERT INTO Zakupy (klient_id, kwota) VALUES
(1, 300.00),   -- Jan Kowalski
(1, 150.00),   -- Jan Kowalski
(2, 500.00),   -- Anna Nowak
(3, 200.00);   -- Piotr Wiśniewski


INSERT INTO Zwroty (klient_id, kwota) VALUES
(1, 50.00),    -- Jan Kowalski
(2, 100.00);   -- Anna Nowak
