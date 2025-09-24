-- SELECT * from ksiazka;
-- SELECT * from wypozyczenia;
-- INSERT INTO `ksiazka` (`id`, `tytul`, `gatunek`) VALUES 
-- (21, 'Treny -> Liryka', 'Liryka');
/*

- Zapytanie 1: wybierające jedynie id i tytuły książek z gatunku liryka

SELECT id, tytul from ksiazka WHERE gatunek = 'liryka';


W MySQL zależy od kodowania (collation). W Twojej bazie (utf8_polish_ci), które jest niewrażliwe na wielkość liter, = ignoruje różnice między 'Liryka' a 'liryka'.
 
 
− Zapytanie 2: wybierające pierwsze 15 rekordów, jedynie tytuł książki oraz odpowiadające mu id
czytelnika i data oddania posortowane rosnąco według daty oddania. Należy posłużyć się relacją
 
SELECT 
    k.tytul,
    w.id_cz,
    w.data_odd
FROM wypozyczenia w
JOIN ksiazka k ON w.id_ks = k.id
ORDER BY w.data_odd ASC
LIMIT 15;
 
- Zapytanie 3: modyfikujące strukturę tabeli ksiazka, poprzez dodanie nowej kolumny o nazwie
rezerwacja typu TINYINT, o długości 1 Bajta, która przyjmuje wartość domyślną 0 (oznacza, że
książka nie jest zarezerwowana)

ALTER TABLE ksiazka
ADD COLUMN rezerwacja TINYINT(1) NOT NULL DEFAULT 0;

- TINYINT(1) → liczba całkowita mieszcząca się w 1 bajcie (-128 do 127 albo 0–255 przy UNSIGNED),
- NOT NULL DEFAULT 0 → zawsze musi mieć wartość, a domyślnie będzie 0,
- czyli: 0 = książka nie jest zarezerwowana, 1 = książka zarezerwowana.
 
 
− Zapytanie 4: aktualizujące pole rezerwacja na wartość 1 dla książki, której id=1

UPDATE ksiazka
SET rezerwacja = 1 
WHERE ksiazka.id=1;


− Zapytanie 5: wybierające jedynie tytuł książki, której id=4

SELECT tytul
FROM ksiazka
WHERE id = 4;

*/