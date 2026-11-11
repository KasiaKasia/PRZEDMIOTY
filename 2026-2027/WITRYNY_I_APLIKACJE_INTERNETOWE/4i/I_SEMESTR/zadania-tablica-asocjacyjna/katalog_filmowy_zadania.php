<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog filmowy – tablice asocjacyjne PHP</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Arial, sans-serif; background-color: #f1f5f9; color: #243447; }
        header, footer { background-color: #205782; color: white; text-align: center; padding: 22px; }
        header h1 { margin: 0 0 8px; }
        header p { margin: 0; }
        nav { background-color: #3278a8; padding: 14px; text-align: center; }
        nav a { color: white; text-decoration: none; margin: 12px; font-weight: bold; }
        main { max-width: 900px; margin: 24px auto; padding: 0 16px; }
        section { background-color: white; border: 1px solid #dbe3eb; border-radius: 8px; padding: 22px; margin-bottom: 20px; }
        h2 { color: #205782; margin-top: 0; }
        .wynik { background-color: #edf5fb; border-left: 4px solid #3278a8; padding: 15px; min-height: 65px; line-height: 1.8; }

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
        <h1>Katalog filmowy</h1>
        <p>Tablice asocjacyjne w PHP</p>
    </header>

    <nav>
        <a href="#zadanie1">Zadanie 1</a>
        <a href="#zadanie2">Zadanie 2</a>
        <a href="#zadanie3">Zadanie 3</a>
        <a href="#zadanie4">Zadanie 4</a>
        <a href="#zadanie5">Zadanie 5</a>
    </nav>

    <main>
        <!--
        ZADANIE 1. Utworzenie tablicy asocjacyjnej
		
        Utwórz tablicę asocjacyjną $film o kluczach i wartościach:
			tytul => Interstellar
			rezyser => Christopher Nolan
			rok => 2014
			gatunek => Science fiction
			
        Wyświetl wyłącznie tytuł filmu, odwołując się bezpośrednio do klucza.

       
        -->
        <section id="zadanie1">
            <h2>Zadanie 1 – Tytuł filmu</h2>
            <div class="wynik">
                <?php
 
                ?>
            </div>
        </section>

        <!--
        ZADANIE 2. Wyświetlanie tablicy pętlą foreach
		
        Wykorzystaj tablicę $film z zadania 1.
        Za pomocą pętli foreach wyświetl wszystkie klucze i wartości w formacie: klucz: wartość.
        Każdy element wyświetl w osobnym wierszu, używając znacznika <br>.
        -->
        <section id="zadanie2">
            <h2>Zadanie 2 – Dane filmu</h2>
            <div class="wynik">
                <?php
                // Tutaj wpisz rozwiązanie zadania 2.
                ?>
            </div>
        </section>

        <!--
        ZADANIE 3. Modyfikowanie wartości tablicy
		
        Utwórz tablicę asocjacyjną $seans:
			sala => Sala A
			godzina => 16:00
			liczba_miejsc => 50
			
        Zmień wartość klucza godzina na 18:00, a wartość klucza liczba_miejsc na 40.
		
        Wyświetl wszystkie trzy wartości, odwołując się bezpośrednio do kluczy.
        Każdą wartość umieść w osobnym wierszu.
        -->
        <section id="zadanie3">
            <h2>Zadanie 3 – Informacje o seansie</h2>
            <div class="wynik">
                <?php
                // Tutaj wpisz rozwiązanie zadania 3.
                ?>
            </div>
        </section>

        <!--
        ZADANIE 4. Usuwanie elementu tablicy
		
        Utwórz tablicę asocjacyjną $bilet:
			numer => 125
			cena => 25
			rzad => 4
			miejsce => 12
        Za pomocą funkcji unset() usuń element o kluczu rzad. 
        -->
        <section id="zadanie4">
            <h2>Zadanie 4 – Dane biletu</h2>
            <div class="wynik">
                <?php
                // Tutaj wpisz rozwiązanie zadania 4.
                ?>
            </div>
        </section>
 



        <!--
        ZADANIE 5. Wyświetlanie filmów w tabeli HTML

        Utwórz tablicę $filmy zawierającą trzy tablice asocjacyjne.

        Każdy film powinien zawierać:
        tytul, rezyser, rok, gatunek.

        Filmy:
        1. Interstellar, Christopher Nolan, 2014, Science fiction
        2. Incepcja, Christopher Nolan, 2010, Thriller
        3. Titanic, James Cameron, 1997, Romans

        Utwórz tabelę HTML z nagłówkami:
        Tytuł, Reżyser, Rok, Gatunek.

        Za pomocą pętli foreach wyświetl wszystkie filmy.
        Każdy film umieść w osobnym wierszu tabeli.

        Wiersze i komórki tabeli generuj za pomocą echo.
        Wartości pobieraj bezpośrednio z kluczy tablic asocjacyjnych.
        -->

        <section id="zadanie5">
            <h2>Zadanie 5 – Katalog filmów</h2>

            <div class="wynik">

                <?php
                // Tutaj utwórz tablicę $filmy.
                ?>

                <table>
                    <tr>
                        <th>Tytuł</th>
                        <th>Reżyser</th>
                        <th>Rok</th>
                        <th>Gatunek</th>
                    </tr>

                    <?php
                    // Tutaj zastosuj pętlę foreach.
                    // Wygeneruj wiersze i komórki tabeli za pomocą echo.
                    ?>

                </table>

            </div>
        </section>


    </main>

    <footer>PHP – Tablice asocjacyjne | Zadanie praktyczne</footer>
</body>
</html>
