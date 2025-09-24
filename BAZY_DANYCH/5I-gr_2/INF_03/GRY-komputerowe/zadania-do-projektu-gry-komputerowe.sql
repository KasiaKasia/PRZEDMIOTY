/*
‒ Zapytanie 1: wybierające jedynie id, nazwę i zdjęcie z tabeli gry

SELECT id, nazwa, zdjecie
FROM gry;


‒ Zapytanie 2: wybierające jedynie nazwę, pierwsze 100 znaków opisu, punkty oraz cenę
z tabeli gry dla wiersza o id równym 1

SELECT 
    nazwa,
    LEFT(opis, 100) AS opis_skrot,
    punkty,
    cena
FROM gry
WHERE id = 1;


‒ Zapytanie 3: wybierające jedynie pola nazwa i punkty z pięciu pierwszych wierszy
o najwyższej punktacji z tabeli gry

SELECT 
    nazwa,   
    punkty,
    cena
FROM gry
ORDER BY punkty DESC
limit 5;


‒ Zapytanie 4: wstawiające do tabeli gry wiersz o danych zawartych w pliku rekord.txt (dane
należy skopiować z pliku do zapytania). Klucz główny nadawany automatycznie. 


INSERT INTO gry (nazwa, opis, punkty, cena, zdjecie)
VALUES (
    'Zamczysko',
    'Na odludziu stoi opuszczone zamczysko, w którym znajduje się skarb strzeżony przez złowrogie demony i duchy',
    200,
    50,
    'zamczysko.jpg'
);
*/