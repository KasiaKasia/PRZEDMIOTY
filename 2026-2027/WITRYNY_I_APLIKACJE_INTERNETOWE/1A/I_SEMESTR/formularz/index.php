<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Formularz HTML i PHP</title>
</head>

<body>

<h2>Formularz użytkownika</h2>

<form method="POST">

    <!-- INPUT -->
    <label for="imie">Imię:</label>
    <input type="text"
           id="imie"
           name="imie">

    <br><br>


    <!-- TEXTAREA -->
    <label for="opis">Kilka słów o sobie:</label>
    <br>

    <textarea id="opis"
              name="opis"
              rows="5"
              cols="40"></textarea>

    <br><br>


    <!-- SELECT + OPTION -->
    <label for="miasto">Miasto:</label>

    <select id="miasto" name="miasto">

        <option value="">-- wybierz miasto --</option>
        <option value="Warszawa">Warszawa</option>
        <option value="Kraków">Kraków</option>
        <option value="Gdańsk">Gdańsk</option>
        <option value="Wrocław">Wrocław</option>

    </select>

    <br><br>


    <!-- RADIO -->
    <p>Wybierz poziom znajomości programowania:</p>

    <input type="radio"
           id="podstawowy"
           name="poziom"
           value="Podstawowy">

    <label for="podstawowy">
        Podstawowy
    </label>

    <br>

    <input type="radio"
           id="sredni"
           name="poziom"
           value="Średni">

    <label for="sredni">
        Średni
    </label>

    <br>

    <input type="radio"
           id="zaawansowany"
           name="poziom"
           value="Zaawansowany">

    <label for="zaawansowany">
        Zaawansowany
    </label>

    <br><br>


    <!-- CHECKBOX -->
    <p>Wybierz zainteresowania:</p>

    <input type="checkbox"
           id="html"
           name="zainteresowania[]"
           value="HTML">

    <label for="html">
        HTML
    </label>

    <br>

    <input type="checkbox"
           id="css"
           name="zainteresowania[]"
           value="CSS">

    <label for="css">
        CSS
    </label>

    <br>

    <input type="checkbox"
           id="javascript"
           name="zainteresowania[]"
           value="JavaScript">

    <label for="javascript">
        JavaScript
    </label>

    <br>

    <input type="checkbox"
           id="php"
           name="zainteresowania[]"
           value="PHP">

    <label for="php">
        PHP
    </label>

    <br>

    <input type="checkbox"
           id="python"
           name="zainteresowania[]"
           value="Python">

    <label for="python">
        Python
    </label>

    <br><br>


    <!-- BUTTON -->
    <button type="submit" name="wyslij">
        Wyślij formularz
    </button>

</form>


<?php

if (isset($_POST["wyslij"])) {

    $imie = $_POST["imie"];
    $opis = $_POST["opis"];
    $miasto = $_POST["miasto"];


    // RADIO
    if (isset($_POST["poziom"])) {
        $poziom = $_POST["poziom"];
    } else {
        $poziom = "Nie wybrano";
    }


    echo "<hr>";
    echo "<h2>Podane dane:</h2>";

    echo "Imię: " . $imie . "<br>";
    echo "Opis: " . $opis . "<br>";
    echo "Miasto: " . $miasto . "<br>";
    echo "Poziom: " . $poziom . "<br>";


    // CHECKBOX
    echo "<h3>Zainteresowania:</h3>";

    if (isset($_POST["zainteresowania"])) {

        foreach ($_POST["zainteresowania"] as $zainteresowanie) {
            echo $zainteresowanie . "<br>";
        }

    } else {

        echo "Nie wybrano żadnych zainteresowań.";
    }
}

?>

</body>
</html>
```
