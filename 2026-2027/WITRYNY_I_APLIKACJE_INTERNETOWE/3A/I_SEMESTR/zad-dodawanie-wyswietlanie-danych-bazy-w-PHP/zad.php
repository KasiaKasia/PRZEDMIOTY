
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista uczniów – PHP i MySQL</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: lightblue;
        }

        header {
            background-color: #205782;
            color: white;
            text-align: center;
            padding: 25px;
        }

        main {
            display: flex;
            gap: 20px;
            padding: 20px;
            min-height: 500px;
        }

        section {
            background-color: white;
            padding: 20px;
            width: 50%;
            border-radius: 8px;
        }

        h2 {
            color: #205782;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #777;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: lightblue;
        }

        input {
            padding: 8px;
            margin-bottom: 10px;
        }

        button {
            background-color: #205782;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        footer {
            background-color: #205782;
            color: white;
            text-align: center;
            padding: 15px;
        }
    </style>
</head>

<body>

    <!--
    ZADANIE – LISTA UCZNIÓW (PHP I MYSQL)

    1. PRZYGOTOWANIE BAZY DANYCH

    W pliku insert.sql znajdują się instrukcje:
    - utworzenia bazy danych szkola_php,
    - utworzenia tabeli uczniowie,
    - dodania pięciu przykładowych rekordów.

    Zaimportuj plik insert.sql za pomocą phpMyAdmin.

    Tabela uczniowie zawiera kolumny:
    - id – INT, PRIMARY KEY, AUTO_INCREMENT,
    - imie – VARCHAR(50), NOT NULL,
    - nazwisko – VARCHAR(50), NOT NULL,
    - klasa – VARCHAR(10), NOT NULL,
    - wiek – INT, NOT NULL.


    2. WYŚWIETLANIE UCZNIÓW W PRAWEJ SEKCJI

    Napisz skrypt PHP, który:

    a) Nawiąże połączenie z bazą szkola_php
       za pomocą mysqli_connect().
    b) Sprawdzi poprawność połączenia.
    c) Ustawi kodowanie znaków utf8mb4
       za pomocą mysqli_set_charset().
    d) Pobierze wszystkie rekordy z tabeli uczniowie
       za pomocą zapytania SELECT.
    e) Wyświetli pobrane dane w tabeli HTML:
       ID, Imię, Nazwisko, Klasa, Wiek.
    f) Zabezpieczy wyświetlane dane tekstowe
       za pomocą htmlspecialchars().


    3. DODAWANIE UCZNIA W LEWEJ SEKCJI

    Utwórz formularz HTML zawierający pola:

    - imie
    - nazwisko
    - klasa
    - wiek

    Wymagania:

    a) Formularz powinien używać metody POST.
    b) Wszystkie pola są wymagane do wypełnienia.
    c) Dodaj przycisk "Dodaj ucznia".
    d) Dodaj ukryte pole:
       name="akcja" value="dodaj"


    4. OBSŁUGA DODAWANIA UCZNIA W PHP

    Napisz skrypt PHP, który:

    a) Sprawdzi, czy formularz wysłano metodą POST.
    b) Sprawdzi, czy wartość pola "akcja" to "dodaj".
    c) Pobierze dane z tablicy $_POST.
    d) Sprawdzi, czy pola nie są puste.
    e) Sprawdzi poprawność wieku za pomocą
       filter_var() i FILTER_VALIDATE_INT.
    f) Zabezpieczy wartości tekstowe funkcją
       mysqli_real_escape_string().
    g) Wykona zapytanie INSERT INTO, dodając
       nowego ucznia do tabeli uczniowie.
    h) Nie podawaj kolumny id w zapytaniu INSERT,
       ponieważ posiada AUTO_INCREMENT.
    i) Wyświetli komunikat o dodaniu ucznia
       lub o wystąpieniu błędu.
    j) Po dodaniu ucznia wyświetli aktualną
       listę w prawej sekcji.


    5. USUWANIE UCZNIA W LEWEJ SEKCJI

    Pod formularzem dodawania ucznia utwórz
    drugi formularz HTML.

    Wymagania:

    a) Dodaj nagłówek h2 "Usuń ucznia".
    b) Formularz powinien używać metody POST.
    c) Dodaj pole umożliwiające wpisanie ID ucznia.

       Pole powinno posiadać atrybuty:
       - type="number"
       - name="id"
       - min="1"
       - required

    d) Dodaj ukryte pole:
       name="akcja" value="usun"

    e) Dodaj przycisk "Usuń ucznia".


    6. OBSŁUGA USUWANIA UCZNIA W PHP

    Napisz skrypt PHP, który:

    a) Sprawdzi, czy formularz wysłano metodą POST.
    b) Sprawdzi, czy wartość pola "akcja" to "usun".
    c) Pobierze identyfikator ucznia z tablicy $_POST.
    d) Sprawdzi poprawność identyfikatora
       za pomocą filter_var() i FILTER_VALIDATE_INT.
    e) Sprawdzi, czy identyfikator jest większy od zera.
    f) Wykona zapytanie SQL:

       DELETE FROM uczniowie WHERE id = ...

    g) Do wykonania zapytania zastosuje mysqli_query().
    h) Za pomocą mysqli_affected_rows() sprawdzi,
       czy usunięto rekord.
    i) Wyświetli odpowiedni komunikat:

       - "Uczeń został usunięty."
       - "Nie znaleziono ucznia o podanym ID."
       - "Podano niepoprawny identyfikator."
       - "Wystąpił błąd podczas usuwania ucznia."

    j) Po usunięciu ucznia wyświetli aktualną
       listę uczniów w prawej sekcji.

    UWAGA:
    - Usuwanie ucznia powinno odbywać się
      na podstawie ID.
    - Do usuwania wykorzystaj metodę POST.
    - Zapytanie DELETE musi zawierać WHERE.
    - Nie usuwaj wszystkich rekordów z tabeli.
    - Przed wstawieniem ID do zapytania SQL
      upewnij się, że jest poprawną liczbą całkowitą.
    -->


    <header>
        <h1>Lista uczniów – PHP i MySQL</h1>
    </header>

    <main>

        <!-- LEWA SEKCJA – DODAWANIE I USUWANIE UCZNIA -->
        <section>

            <h2>Dodaj ucznia</h2>

            <!--
            ZADANIA 3 i 4

            Tutaj napisz formularz HTML umożliwiający
            dodanie nowego ucznia.

            Formularz powinien zawierać:
            - imię,
            - nazwisko,
            - klasę,
            - wiek,
            - ukryte pole akcja="dodaj",
            - przycisk "Dodaj ucznia".

            Napisz także kod PHP obsługujący
            dodawanie nowego rekordu do bazy.
            -->


            <hr>


            <h2>Usuń ucznia</h2>

            <!--
            ZADANIA 5 i 6

            Tutaj napisz formularz HTML umożliwiający
            usunięcie ucznia z bazy danych.

            Formularz powinien zawierać:
            - pole do wpisania ID ucznia,
            - ukryte pole akcja="usun",
            - przycisk "Usuń ucznia".

            Napisz także kod PHP, który:
            - pobierze ID ucznia,
            - sprawdzi jego poprawność,
            - wykona zapytanie DELETE,
            - sprawdzi liczbę usuniętych rekordów,
            - wyświetli odpowiedni komunikat.
            -->

        </section>


        <!-- PRAWA SEKCJA – LISTA UCZNIÓW -->
        <section>

            <h2>Lista uczniów</h2>

            <!--
            ZADANIE 2

            Tutaj napisz kod PHP pobierający dane
            z tabeli uczniowie.

            Wyświetl wyniki w tabeli HTML.

            Kolumny tabeli:

            ID | Imię | Nazwisko | Klasa | Wiek

            Po dodaniu lub usunięciu ucznia
            lista powinna przedstawiać aktualne
            dane zapisane w bazie.
            -->

        </section>

    </main>

    <footer>
        <p>Lista uczniów – PHP i MySQL</p>
    </footer>

</body>

</html>
