
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka szkolna</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 0;
        }

        header, footer {
            background-color: #205782;
            color: white;
            text-align: center;
            padding: 20px;
        }

        main {
            padding: 20px;
        }

        section {
            background-color: white;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid gray;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #3278a8;
            color: white;
        }
    </style>
</head>

<body>

    <header>
        <h1>Biblioteka szkolna</h1>
    </header>

    <main>

        <section>
            <h2>Lista książek</h2>

            <!--
            ZADANIE – POBIERANIE DANYCH Z BAZY MYSQL

            1. W bazie danych biblioteka_szkolna znajduje się tabela ksiazki.

            2. Napisz kod PHP, który połączy się z bazą danych biblioteka_szkolna.

               Parametry połączenia:
               - serwer: localhost
               - użytkownik: root
               - hasło: puste
               - baza danych: biblioteka_szkolna

            3. Do połączenia wykorzystaj funkcję
               mysqli_connect().

            4. Ustaw kodowanie znaków utf8mb4.

            5. Napisz zapytanie SQL pobierające wszystkie rekordy z tabeli ksiazki.

            6. Wykonaj zapytanie SQL pobierające wszystkie rekordy z tabeli `ksiazki`.

            7. Przetwórz wynik zapytania w taki sposób, aby uzyskać dostęp do danych każdego pobranego rekordu.

            8. Wyświetl wszystkie pobrane rekordy, umieszczając dane poszczególnych książek w odpowiednich wierszach i kolumnach tabeli HTML.
  
            9. Wyświetl pobrane dane w tabeli HTML.

               Tabela powinna zawierać kolumny:
               - ID
               - Tytuł
               - Autor
               - Rok wydania
               - Dostępność

            10. Za pomocą instrukcji `echo` wygeneruj tabelę HTML zawierającą dane pobrane z bazy danych. Tabela powinna posiadać nagłówki kolumn oraz tytuł "Wykaz książek w bibliotece szkolnej". Zastosuj odpowiednie znaczniki HTML, dbając o poprawną strukturę tabeli.

            11. Po zakończeniu pobierania danych zamknij połączenie z bazą danych.

            12. Uruchom skrypt na lokalnym serwerze XAMPP i sprawdź, czy dane z tabeli ksiazki są poprawnie wyświetlane w tabeli HTML. 
         
            -->

            <?php

                // TUTAJ NAPISZ KOD PHP

            ?>

        </section>

    </main>

    <footer>
        <p>Biblioteka szkolna – PHP i MySQL</p>
    </footer>

</body>
</html>
