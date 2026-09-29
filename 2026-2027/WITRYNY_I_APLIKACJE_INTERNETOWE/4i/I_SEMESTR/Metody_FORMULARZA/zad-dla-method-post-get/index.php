<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formularze GET i POST</title>
</head>

<body>

    <h1>Formularze w PHP</h1>


    <!-- ================================================= -->
    <!-- FORMULARZ GET -->
    <!-- ================================================= -->

    <h2>Formularz GET</h2>

    <form method="GET">

        <!-- IMIĘ -->
        <label for="imie_get">Imię:</label>

        <input
            type="text"
            id="imie_get"
            name="imie"
            placeholder="Podaj imię"
            required
        >

        <br><br>


        <!-- NAZWISKO -->
        <label for="nazwisko_get">Nazwisko:</label>

        <input
            type="text"
            id="nazwisko_get"
            name="nazwisko"
            placeholder="Podaj nazwisko"
            required
        >

        <br><br>


        <!-- KOD POCZTOWY -->
        <label for="kod_get">Kod pocztowy:</label>

        <input
            type="text"
            id="kod_get"
            name="kod"
            placeholder="00-000"
            pattern="[0-9]{2}-[0-9]{3}"
            required
        >

        <br><br>


        <!-- MIASTO -->
        <label for="miasto_get">Miasto:</label>

        <select
            id="miasto_get"
            name="miasto"
            required
        >

            <option value="">
                -- wybierz miasto --
            </option>

            <option value="Warszawa">
                Warszawa
            </option>

            <option value="Kraków">
                Kraków
            </option>

            <option value="Gdańsk">
                Gdańsk
            </option>

            <option value="Wrocław">
                Wrocław
            </option>

        </select>

        <br><br>


        <!-- ZAINTERESOWANIA -->
        <p>Zainteresowania:</p>

        <input
            type="checkbox"
            id="programowanie_get"
            name="zainteresowania[]"
            value="Programowanie"
        >

        <label for="programowanie_get">
            Programowanie
        </label>

        <br>


        <input
            type="checkbox"
            id="sport_get"
            name="zainteresowania[]"
            value="Sport"
        >

        <label for="sport_get">
            Sport
        </label>

        <br>


        <input
            type="checkbox"
            id="muzyka_get"
            name="zainteresowania[]"
            value="Muzyka"
        >

        <label for="muzyka_get">
            Muzyka
        </label>

        <br>


        <input
            type="checkbox"
            id="podroze_get"
            name="zainteresowania[]"
            value="Podróże"
        >

        <label for="podroze_get">
            Podróże
        </label>

        <br><br>


        <!-- RADIO -->
        <p>Tryb nauki:</p>

        <input
            type="radio"
            id="stacjonarny_get"
            name="tryb"
            value="Stacjonarny"
        >

        <label for="stacjonarny_get">
            Stacjonarny
        </label>

        <br>


        <input
            type="radio"
            id="zdalny_get"
            name="tryb"
            value="Zdalny"
        >

        <label for="zdalny_get">
            Zdalny
        </label>

        <br><br>


        <button
            type="submit"
            name="formularz_get"
        >
            Wyślij GET
        </button>

    </form>


    <?php

    if (isset($_GET["formularz_get"])) {

        echo "<h3>Dane przesłane metodą GET:</h3>";

        echo "Imię: " . $_GET["imie"] . "<br>";

        echo "Nazwisko: " . $_GET["nazwisko"] . "<br>";

        echo "Kod pocztowy: " . $_GET["kod"] . "<br>";

        echo "Miasto: " . $_GET["miasto"] . "<br>";


        // RADIO

        if (isset($_GET["tryb"])) {

            echo "Tryb nauki: " .
                 $_GET["tryb"] .
                 "<br>";

        } else {

            echo "Tryb nauki: nie wybrano<br>";
        }


        // CHECKBOXY

        echo "Zainteresowania:<br>";

        if (isset($_GET["zainteresowania"])) {

            foreach (
                $_GET["zainteresowania"]
                as $zainteresowanie
            ) {

                echo "- " .
                     $zainteresowanie .
                     "<br>";
            }

        } else {

            echo "Nie wybrano zainteresowań.<br>";
        }
    }

    ?>


    <hr>


    <!-- ================================================= -->
    <!-- FORMULARZ POST -->
    <!-- ================================================= -->

    <h2>Formularz POST</h2>

    <form method="POST">

        <!-- IMIĘ -->
        <label for="imie_post">Imię:</label>

        <input
            type="text"
            id="imie_post"
            name="imie"
            placeholder="Podaj imię"
            required
        >

        <br><br>


        <!-- NAZWISKO -->
        <label for="nazwisko_post">Nazwisko:</label>

        <input
            type="text"
            id="nazwisko_post"
            name="nazwisko"
            placeholder="Podaj nazwisko"
            required
        >

        <br><br>


        <!-- KOD POCZTOWY -->
        <label for="kod_post">Kod pocztowy:</label>

        <input
            type="text"
            id="kod_post"
            name="kod"
            placeholder="00-000"
            pattern="[0-9]{2}-[0-9]{3}"
            required
        >

        <br><br>


        <!-- MIASTO -->
        <label for="miasto_post">Miasto:</label>

        <select
            id="miasto_post"
            name="miasto"
            required
        >

            <option value="">
                -- wybierz miasto --
            </option>

            <option value="Warszawa">
                Warszawa
            </option>

            <option value="Kraków">
                Kraków
            </option>

            <option value="Gdańsk">
                Gdańsk
            </option>

            <option value="Wrocław">
                Wrocław
            </option>

        </select>

        <br><br>


        <!-- ZAINTERESOWANIA -->
        <p>Zainteresowania:</p>

        <input
            type="checkbox"
            id="programowanie_post"
            name="zainteresowania[]"
            value="Programowanie"
        >

        <label for="programowanie_post">
            Programowanie
        </label>

        <br>


        <input
            type="checkbox"
            id="sport_post"
            name="zainteresowania[]"
            value="Sport"
        >

        <label for="sport_post">
            Sport
        </label>

        <br>


        <input
            type="checkbox"
            id="muzyka_post"
            name="zainteresowania[]"
            value="Muzyka"
        >

        <label for="muzyka_post">
            Muzyka
        </label>

        <br>


        <input
            type="checkbox"
            id="podroze_post"
            name="zainteresowania[]"
            value="Podróże"
        >

        <label for="podroze_post">
            Podróże
        </label>

        <br><br>


        <!-- RADIO -->
        <p>Tryb nauki:</p>

        <input
            type="radio"
            id="stacjonarny_post"
            name="tryb"
            value="Stacjonarny"
        >

        <label for="stacjonarny_post">
            Stacjonarny
        </label>

        <br>


        <input
            type="radio"
            id="zdalny_post"
            name="tryb"
            value="Zdalny"
        >

        <label for="zdalny_post">
            Zdalny
        </label>

        <br><br>


        <button
            type="submit"
            name="formularz_post"
        >
            Wyślij POST
        </button>

    </form>


    <?php

    if (isset($_POST["formularz_post"])) {

        echo "<h3>Dane przesłane metodą POST:</h3>";

        echo "Imię: " . $_POST["imie"] . "<br>";

        echo "Nazwisko: " .
             $_POST["nazwisko"] .
             "<br>";

        echo "Kod pocztowy: " .
             $_POST["kod"] .
             "<br>";

        echo "Miasto: " .
             $_POST["miasto"] .
             "<br>";


        // RADIO

        if (isset($_POST["tryb"])) {

            echo "Tryb nauki: " .
                 $_POST["tryb"] .
                 "<br>";

        } else {

            echo "Tryb nauki: nie wybrano<br>";
        }


        // CHECKBOXY

        echo "Zainteresowania:<br>";

        if (isset($_POST["zainteresowania"])) {

            foreach (
                $_POST["zainteresowania"]
                as $zainteresowanie
            ) {

                echo "- " .
                     $zainteresowanie .
                     "<br>";
            }

        } else {

            echo "Nie wybrano zainteresowań.<br>";
        }
    }

    ?>

</body>
</html>
