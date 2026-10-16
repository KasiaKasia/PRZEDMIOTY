
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Lista uczniów</title>

    <style>
        table {
            border-collapse: collapse;
            width: 600px;
        }
        th,
        td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: lightgray;
        }
    </style>
</head>

<body>
    <h1>Dodaj ucznia</h1>

    <h1>Lista uczniów</h1>

    <?php

    $connection = mysqli_connect(
        "localhost",
        "root",
        "",
        "szkola_php"
    );

    if (!$connection) {
        die("Błąd połączenia: " . mysqli_connect_error());
    }

    mysqli_set_charset($connection, "utf8mb4");


    if (isset($_POST["dodaj"])) {

        $imie = trim($_POST["imie"]);
        $nazwisko = trim($_POST["nazwisko"]);
        $klasa = trim($_POST["klasa"]);

        // filter_var() – funkcja PHP służąca do filtrowania lub sprawdzania poprawności danych.
        // FILTER_VALIDATE_INT – sprawdza, czy przekazana wartość jest poprawną liczbą całkowitą (integer).        
        $wiek = filter_var(
            $_POST["wiek"],
            FILTER_VALIDATE_INT
        );

        if ($imie !== "" &&
            $nazwisko !== "" &&
            $klasa !== "" &&
            $wiek !== false &&
            $wiek > 0 ) {

        // mysqli_real_escape_string() – funkcja, która dodaje odpowiednie znaki ucieczki do znaków specjalnych.
        /*
        Załóżmy, że użytkownik wpisał imię zawierające apostrof: $imie = "O'Neil"; Zmienna $imie będzie zawierała: O\'Neil
        Funkcja dodała znak \ przed apostrofem, aby MySQL nie potraktował go jako zakończenia tekstu w zapytaniu SQL.

        Bez zabezpieczenia:

        Dla wartości O'Neil powstałoby niepoprawne zapytanie:
            INSERT INTO uczniowie (imie)
            VALUES ('O'Neil');

        Po zastosowaniu mysqli_real_escape_string():
            INSERT INTO uczniowie (imie)
            VALUES ('O\'Neil');

        MySQL poprawnie odczyta wartość O'Neil i zapisze ją w bazie danych bez dodatkowego ukośnika.
        */
        $imie = mysqli_real_escape_string($connection, $imie);
        $nazwisko = mysqli_real_escape_string($connection, $nazwisko);
        $klasa = mysqli_real_escape_string($connection, $klasa);

        $sql = "INSERT INTO uczniowie
                (imie, nazwisko, klasa, wiek)
                VALUES ('$imie', '$nazwisko', '$klasa', $wiek)";

   
        if (mysqli_query($connection, $sql)) {
            echo "<p>Uczeń został dodany do bazy danych.</p>";
        } else {
            echo "<p>Błąd podczas dodawania ucznia.</p>";
        }



/*

            $sql = "INSERT INTO uczniowie
                    (imie, nazwisko, klasa, wiek)
                    VALUES (?, ?, ?, ?)";
            // mysqli_prepare() – przygotowuje zapytanie SQL do wykonania.
            $stmt = mysqli_prepare($connection, $sql);


            // mysqli_stmt_bind_param - wiąże zmienne z parametrami (przypisujemy wartości do parametrów). 
            // sssi – określa typy danych dla każdego parametru w kolejności, w jakiej występują w zapytaniu SQL.
            // Każda litera odpowiada jednej zmiennej:
            // Litera	Typ danych	            Zmienna
            //   s	    string – tekst	        $imie
            //   s	    string – tekst	        $nazwisko
            //   s	    string – tekst	$klasa
            //   i	    integer – liczba całkowita	$wiek

            // W funkcji PHP mysqli_stmt_bind_param() można zastosować tylko 4 litery określające typy danych:
            // Litera	Typ danych	 
            //   s	    string	 
            //   i	    integer	 
            //   d	    double	 
            //   b	    blob 
            
            mysqli_stmt_bind_param(
                $stmt,
                "sssi",
                $imie,
                $nazwisko,
                $klasa,
                $wiek
            );

            // mysqli_stmt_execute() – funkcja PHP służąca do wykonania przygotowanego zapytania SQL.
            // przekazuje wartości parametrów, a MySQL wykonuje instrukcję INSERT INTO i dodaje rekord.
            if (mysqli_stmt_execute($stmt)) {
                echo "<p>Uczeń został dodany do bazy danych.</p>";
            } else {
                echo "<p>Błąd podczas dodawania ucznia.</p>";
            }
            /*
            mysqli_stmt_close()
            - Zamyka przygotowane zapytanie – kończy pracę z zapytaniem przechowywanym w zmiennej $stmt.
            - Zwalnia zasoby – zwalnia zasoby związane z przygotowanym zapytaniem po stronie PHP i MySQL.
            */
            mysqli_stmt_close($stmt);
*/
        } else {
            echo "<p>Wprowadź poprawne dane ucznia.</p>";
        }
    }

?>
    <form method="POST" action="">

        <label for="imie">Imię:</label>
        <input type="text"
                id="imie"
                name="imie"
                required>

        <br>

        <label for="nazwisko">Nazwisko:</label>
        <input type="text"
                id="nazwisko"
                name="nazwisko"
                required>

        <br>

        <label for="klasa">Klasa:</label>
        <input type="text"
                id="klasa"
                name="klasa"
                required>

        <br>

        <label for="wiek">Wiek:</label>
        <input type="number"
                id="wiek"
                name="wiek"
                min="1"
                required>

        <br>

        <input type="submit"
                name="dodaj"
                value="Dodaj ucznia">

    </form>


<?php

    $sql = "SELECT * FROM uczniowie";

    $result = mysqli_query($connection, $sql);

    ?>

    <table>

        <tr>
            <th>ID</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Klasa</th>
            <th>Wiek</th>
        </tr>

        <?php

        while ($row = mysqli_fetch_assoc($result)) {

            echo "<tr>";

            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["imie"] . "</td>";
            echo "<td>" . $row["nazwisko"] . "</td>";
            echo "<td>" . $row["klasa"] . "</td>";
            echo "<td>" . $row["wiek"] . "</td>";

            echo "</tr>";
        }

        ?>

    </table>

    <?php

    mysqli_close($connection);

    ?>

</body>

</html>

