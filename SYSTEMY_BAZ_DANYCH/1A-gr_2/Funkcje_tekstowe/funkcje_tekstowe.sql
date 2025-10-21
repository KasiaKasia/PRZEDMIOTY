DROP TABLE IF EXISTS employees;

CREATE TABLE employees (
    id INT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(100)
);

INSERT INTO employees (id, first_name, last_name, email) VALUES
(1, 'Jan', 'Kowalski', 'jan.kowalski@example.com'),
(2, 'Anna', 'Nowak', 'anna.nowak@example.com'),
(3, 'Michał', 'Wiśniewski', 'michal.wisniewski@przyklad.pl');