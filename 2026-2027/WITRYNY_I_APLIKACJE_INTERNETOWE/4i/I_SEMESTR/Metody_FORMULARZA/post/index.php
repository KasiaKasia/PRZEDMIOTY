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

    <h1>Metoda POST</h1>

    <form method="POST">
        <label for="imie">Wpisz imię:</label>

        <input type="text" name="imie"  >

        <button type="submit">
            Wyślij
        </button>

    </form>

       <?php
    $imie="";
    /*
    isset() w PHP sprawdza, czy zmienna lub element tablicy istnieje i ma wartość inną niż null.
    */
    if (isset($_POST["imie"])) {

        $imie = $_POST["imie"];
 
        echo "<h2>Witaj, " . $imie . "!</h2>";
    }

    ?>
</body>

</html>