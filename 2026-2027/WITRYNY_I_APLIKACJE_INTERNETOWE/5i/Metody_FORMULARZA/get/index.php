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
    <form method="get">
        <label for="nazwisko">Nazwisko:</label>
        <input type="text" name="nazwisko" id="nazwisko" placeholder="Podaj nazwisko">
        
        <label for="imie">Imię:</label>
        <input type="text" name="imie" id="imie" placeholder="Podaj imię">
      
        <button type="submit"> kliknij, aby wysłać dane metodą GET</button>
            
            <?php
                if ( isset($_get["nazwisko"]) || isset($_GET["imie"]) ) {
                    
                    $nazwisko = $_GET["nazwisko"];
                    $imie = $_GET["imie"];
                    echo "<h2>Witaj, ". $imie . " " . $nazwisko . " !</h2>";
                }
            ?>
    </form>
</body>

</html>