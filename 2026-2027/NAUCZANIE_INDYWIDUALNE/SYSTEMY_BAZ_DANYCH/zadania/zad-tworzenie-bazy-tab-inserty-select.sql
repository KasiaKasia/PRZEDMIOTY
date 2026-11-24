# Zadanie – Sklep komputerowy. Tworzenie bazy danych w MySQL

**Cel zadania:** Samodzielne utworzenie bazy danych, tabeli, określenie typów danych, wprowadzenie rekordów oraz wyświetlenie zawartości tabeli za pomocą zapytania SQL.

## Część I. Tworzenie bazy danych (4 pkt)

1. Utwórz bazę danych o nazwie `sklep_komputerowy`. (2 pkt)
2. Wybierz utworzoną bazę danych jako aktywną. (2 pkt)

## Część II. Tworzenie tabeli (10 pkt)

Utwórz tabelę o nazwie `produkty`, która będzie przechowywać informacje o produktach dostępnych w sklepie komputerowym.

Tabela powinna zawierać następujące kolumny:

| Nazwa kolumny  | Typ danych    | Wymagania |
|----------------|---------------|-----------|
| `id`           | INT           | Klucz główny, AUTO_INCREMENT |
| `nazwa`        | VARCHAR(100)  | NOT NULL  |
| `kategoria`    | VARCHAR(50)   | NOT NULL  |
| `cena`         | DECIMAL(10,2) | NOT NULL  |
| `ilosc`        | INT           | NOT NULL  |
| `data_dodania` | DATE          | NOT NULL  |
| `dostepny`     | BOOLEAN       | NOT NULL  |

**Wymagania:**

- Utwórz tabelę o nazwie `produkty`. (2 pkt)
- Zdefiniuj wszystkie siedem kolumn z odpowiednimi typami danych. (5 pkt)
- Ustaw kolumnę `id` jako klucz główny (`PRIMARY KEY`) z automatycznym zwiększaniem wartości (`AUTO_INCREMENT`). (3 pkt)

## Część III. Dodawanie danych – INSERT INTO (12 pkt)

Za pomocą instrukcji `INSERT INTO` dodaj do tabeli `produkty` co najmniej **6 rekordów**.

Każdy rekord powinien zawierać:

- Nazwę produktu komputerowego.
- Kategorię produktu, np. laptop, monitor, klawiatura, mysz, drukarka.
- Cenę produktu.
- Liczbę sztuk w magazynie.
- Datę dodania produktu.
- Informację o dostępności produktu (`TRUE` lub `FALSE`).

**Ważne:**

- Nie wpisuj ręcznie wartości kolumny `id`. Powinna być nadawana automatycznie.
 
**Punktacja:** 2 pkt za każdy poprawnie dodany rekord.

## Część IV. Wyświetlanie danych – SELECT (4 pkt)

1. Napisz zapytanie SQL wyświetlające wszystkie kolumny i wszystkie rekordy z tabeli `produkty`. (3 pkt)
2. Wykonaj zapytanie i sprawdź, czy wyświetla się sześć wprowadzonych produktów. (1 pkt)

## Podsumowanie punktacji

| Część                    | Maksymalna liczba punktów |
|--------------------------|--------------------------:|
| I. Tworzenie bazy danych | 4 pkt                     |
| II. Tworzenie tabeli     | 10 pkt                    |
| III. Dodawanie rekordów  | 12 pkt                    |
| IV. Wyświetlanie danych  | 4 pkt                     |
| **Razem**                | **30 pkt**                |

## Zasady wykonania

1. Zadanie wykonaj samodzielnie w środowisku MySQL/MariaDB, np. phpMyAdmin.
2. Wszystkie operacje wykonaj za pomocą poleceń SQL.
3. Zapisz wszystkie polecenia SQL w jednym pliku o nazwie `sklep_komputerowy.sql`.
4. Prześlij plik SQL do oceny.

**Uwaga:** Nie należy tworzyć bazy danych ani tabeli za pomocą graficznych formularzy phpMyAdmin. Wszystkie elementy należy utworzyć za pomocą instrukcji SQL.