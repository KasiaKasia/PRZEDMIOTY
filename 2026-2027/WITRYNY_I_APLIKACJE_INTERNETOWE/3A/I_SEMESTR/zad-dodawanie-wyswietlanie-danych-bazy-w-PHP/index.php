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


    2. WYŚWIETLANIE UCZNIÓW w PRAWEJ SEKCJI

    Napisz skrypt PHP, który:

    a) Nawiąże połączenie z bazą szkola_php za pomocą mysqli_connect().

    b) Sprawdzi poprawność połączenia.
    
    c) Ustawi kodowanie znaków utf8mb4 za pomocą mysqli_set_charset().

    d) Pobierze wszystkie rekordy z tabeli uczniowie za pomocą zapytania SELECT.

    e) Pobrane dane wyświetli w tabeli HTML:
       ID, Imię, Nazwisko, Klasa, Wiek.

    f) Zabezpieczy wyświetlane dane tekstowe za pomocą htmlspecialchars().


    3. DODAWANIE UCZNIA w LEWEJ SEKCJI

    Utwórz formularz HTML zawierający pola:

    - imie –  
    - nazwisko  
    - klasa 
    - wiek 

    Wymagania:
    - Formularz powinien używać metody POST.
    - Wszystkie pola powinny wymagane do wypełnienia
    - Dodaj przycisk "Dodaj ucznia" .


    4. OBSŁUGA FORMULARZA W PHP

    Dodatkowe wymagania dotyczące obsługi formularza w PHP:

    a) Sprawdzi, czy formularz wysłano metodą POST.

    b) Pobierze dane z tablicy $_POST.

    c) Sprawdzi, czy pola nie są puste.

    d) Sprawdzi poprawność wieku za pomocą
       filter_var() i FILTER_VALIDATE_INT.

    e) Zabezpieczy wartości tekstowe funkcją
       mysqli_real_escape_string().

    f)  Kolumny id nie podawaj, ponieważ posiada AUTO_INCREMENT.

    g)  Wyświetli komunikat o dodaniu ucznia lub o wystąpieniu błędu.

    i) Po dodaniu ucznia wyświetli aktualną listę w prawej sekcji.
  
    -->


    <header>
        <h1>Lista uczniów – PHP i MySQL</h1>
    </header>

    <main>

        <!-- LEWA SEKCJA – DODAWANIE UCZNIA -->
        <section>
            <h2>Dodaj ucznia</h2>

            <!--
            Tutaj napisz formularz HTML
            umożliwiający dodanie nowego ucznia.
 
            Napisz także kod PHP obsługujący
            dodawanie nowego rekordu do bazy.
            -->

        </section>


        <!-- PRAWA SEKCJA – LISTA UCZNIÓW -->
        <section>
            <h2>Lista uczniów</h2>

            <!--
            Tutaj napisz kod PHP pobierający
            dane z tabeli uczniowie.

            Wyświetl wyniki w tabeli HTML.

            Kolumny tabeli:
            ID | Imię | Nazwisko | Klasa | Wiek
 
            -->

        </section>

    </main>

    <footer>
        <p>Lista uczniów – PHP i MySQL</p>
    </footer>

</body>

</html>
