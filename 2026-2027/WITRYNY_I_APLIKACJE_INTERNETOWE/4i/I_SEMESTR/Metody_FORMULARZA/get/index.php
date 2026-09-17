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

    <h1>Metoda GET</h1>

    <form method="GET">

    <input type="text" name="nazwisko">

    <button type="submit">
        kliknij, aby wysłać dane metodą GET
    </button>
    <?php
        if (isset($_GET["nazwisko"])) {
            $nazwisko = $_GET["nazwisko"];
            echo "<h2>Witaj, " . $nazwisko . "!</h2>";
        }
    ?>
</form>
</body>

</html>