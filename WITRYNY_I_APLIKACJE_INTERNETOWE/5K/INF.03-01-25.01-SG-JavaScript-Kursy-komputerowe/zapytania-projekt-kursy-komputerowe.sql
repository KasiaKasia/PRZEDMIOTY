/*
Zapytanie 1

Wyświetl kolor i materiał produktów, których wysokość buta jest większa niż 10:
*/

SELECT kolor, material
FROM produkt
WHERE wysokosc_buta > 10;

/*
 Zapytanie 2

Wyświetl nazwę i cenę buta oraz odpowiadającą im nazwę kategorii.
Skorzystamy z relacji między tabelami buty i kategorie (klucz id_kat):


*/

SELECT b.nazwa AS nazwa_buta, b.cena, k.nazwa_kat
FROM buty b
JOIN kategorie k ON b.id_kat = k.id_kat;

/*
Zadanie 3
− Zapytanie 3: tworzące konto użytkownika Marek na localhost z hasłem M@reK
*/
-- uruchmoć Apache i MySQL (start) W plarmym menu klikcąć przycisk Shell
-- Uruchomi sie konsola , wpisać:

mysql -u root -p


CREATE USER 'Marek'@'localhost' IDENTIFIED BY 'M@reK';

/*
Zapytanie 4: nadające kontu Marek prawa jedynie do przeglądania i aktualizacji danych jedynie
w bazie danych obuwie, w tabeli produkt

FLUSH PRIVILEGES = „wczytaj ponownie wszystkie uprawnienia z tabel systemowych do pamięci”.

Kiedy wykonujesz polecenia typu:

	CREATE USER ...
	GRANT ...
	REVOKE ...
serwer automatycznie aktualizuje swoje dane w pamięci — więc nie musisz robić nic więcej.

Ale jeśli ręcznie zmienisz te tabele (np. przez UPDATE mysql.user albo import z pliku SQL), 
wtedy serwer nie wie o tych zmianach, dopóki nie wykonasz:
FLUSH PRIVILEGES;

*/

GRANT SELECT, UPDATE ON nazwa_bazy_danych.produkt TO 'Marek'@'localhost'; FLUSH PRIVILEGES;

 