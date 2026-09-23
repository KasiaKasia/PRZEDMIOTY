<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Formularze GET i POST</title>
</head>

<body>

<h2>Wyszukiwanie osoby - GET</h2>

<form method="GET">

    <label for="imieSzukaj">Imię:</label>
    <input type="text"
           name="imie"
           id="imieSzukaj">

    <br><br>

    <label for="nazwiskoSzukaj">Nazwisko:</label>
    <input type="text"
           name="nazwisko"
           id="nazwiskoSzukaj">

    <br><br>

    <button type="submit" name="formularz_szukaj">
        Szukaj
    </button>

</form>


<?php

$osoby = [
    [
        "imie" => "Oliwia",
        "nazwisko" => "Malicka"
    ],
    [
        "imie" => "Kamil",
        "nazwisko" => "Nowak"
    ],
    [
        "imie" => "Natalia",
        "nazwisko" => "Kowalska"
    ]
];


// Sprawdzamy, czy wysłano formularz GET
if (isset($_GET["formularz_szukaj"])) {

    $imie = $_GET["imie"];
    $nazwisko = $_GET["nazwisko"];

    $znaleziono = false;

    foreach ($osoby as $osoba) {

        // wyszukiwanie po imieniu
        if ($imie != "" && $nazwisko == "") {



    /*
    strcasecmp() w PHP porównuje dwa napisy bez rozróżniania wielkości liter.

        Przykład:
        echo strcasecmp("Natalia", "natalia");
        zwróci: 0

        bo dla tej funkcji:

        Natalia
        natalia
        NATALIA
        są traktowane jako takie same pod względem liter.
    
    */


            if (strcasecmp($osoba["imie"], $imie) == 0) {

                echo "<p>";
                echo "Imię: " . $osoba["imie"] . "<br>";
                echo "Nazwisko: " . $osoba["nazwisko"];
                echo "</p>";

                $znaleziono = true;
            }
        }


        // wyszukiwanie po nazwisku
        elseif ($imie == "" && $nazwisko != "") {

            if (strcasecmp($osoba["nazwisko"], $nazwisko) == 0) {

                echo "<p>";
                echo "Imię: " . $osoba["imie"] . "<br>";
                echo "Nazwisko: " . $osoba["nazwisko"];
                echo "</p>";

                $znaleziono = true;
            }
        }


        // wyszukiwanie po imieniu i nazwisku
        elseif ($imie != "" && $nazwisko != "") {

            if (
                strcasecmp($osoba["imie"], $imie) == 0 &&
                strcasecmp($osoba["nazwisko"], $nazwisko) == 0
            ) {

                echo "<p>";
                echo "Imię: " . $osoba["imie"] . "<br>";
                echo "Nazwisko: " . $osoba["nazwisko"];
                echo "</p>";

                $znaleziono = true;
            }
        }
    }


    if ($imie == "" && $nazwisko == "") {

        echo "<p>Podaj imię lub nazwisko.</p>";

    }
    elseif (!$znaleziono) {

        echo "<p>Nie znaleziono osoby.</p>";

    }
}

?>


<hr>


<h2>Dodawanie danych - POST</h2>

<form method="POST">

    <label for="imie">Imię:</label>
    <input type="text"
           name="imie"
           id="imie">

    <br><br>

    <label for="nazwisko">Nazwisko:</label>
    <input type="text"
           name="nazwisko"
           id="nazwisko">

    <br><br>

    <label for="wiek">Wiek:</label>
    <input type="number"
           name="wiek"
           id="wiek">

    <br><br>

    <button type="submit" name="formularz_dodaj">
        Wyślij
    </button>

</form>


<?php

// Sprawdzamy, czy wysłano formularz POST
if (isset($_POST["formularz_dodaj"])) {

    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $wiek = $_POST["wiek"];

    echo "<h3>Podane dane:</h3>";

    echo "Imię: " . $imie . "<br>";
    echo "Nazwisko: " . $nazwisko . "<br>";
    echo "Wiek: " . $wiek;

}

?>

</body>
</html>