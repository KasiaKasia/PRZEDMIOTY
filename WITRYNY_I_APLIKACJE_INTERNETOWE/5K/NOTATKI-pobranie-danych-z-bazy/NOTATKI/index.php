<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Notatki – Zakupy</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            display: flex;
        }

        .menu {
            width: 200px;
            background-color: #333;
            color: white;
            height: 100vh;
            padding: 20px;
        }

        .menu h2 {
            color: #fff;
            font-size: 20px;
            margin-bottom: 15px;
        }

        .menu a {
            display: block;
            color: #ddd;
            padding: 8px 0;
            text-decoration: none;
        }

        .menu a:hover {
            color: #fff;
        }

        .main {
            flex-grow: 1;
            padding: 30px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            background: white;
            width: 60%;
        }

        th, td {
            border: 1px solid #999;
            padding: 8px 12px;
            text-align: center;
        }

        th {
            background-color: #ddd;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="menu">
        <h2>MENU</h2>
        <a href="#">Strona główna</a>
        <a href="#">Zakupy</a>
        <a href="#">Ustawienia</a>
    </div>

    <div class="main">
        <h2>NOTATKI</h2>
		
  

        <?php 
        $polaczenie = mysqli_connect("localhost", "root", "", "sklep_internetowy");

        if (!$polaczenie) {
            die("Błąd połączenia: " . mysqli_error($polaczenie));
        }
 
        mysqli_select_db($polaczenie, "sklep_internetowy");
 
        $zapytanie = "SELECT * FROM zakupy";
        $wynik = mysqli_query($polaczenie, $zapytanie);

        if (!$wynik) {
            die("Błąd zapytania: " . mysqli_error($polaczenie));
        }
 
        $liczbaWierszy = mysqli_num_rows($wynik);
        $liczbaKolumn = mysqli_num_fields($wynik);
 
        echo "<table>";
 
        echo "<tr>";
        $informacjeKolumn = mysqli_fetch_fields($wynik);

        for ($i = 0; $i < count($informacjeKolumn); $i++) {
            echo "<th>" . $informacjeKolumn[$i]->name . "</th>";
        }
        echo "</tr>";

        // Reset wskaźnika wyników
        mysqli_data_seek($wynik, 0);
 
        for ($wiersz = 0; $wiersz < $liczbaWierszy; $wiersz++) {

            $daneWiersza = mysqli_fetch_row($wynik);

            echo "<tr>";

            for ($kolumna = 0; $kolumna < $liczbaKolumn; $kolumna++) {
                echo "<td>" . $daneWiersza[$kolumna] . "</td>";
            }

            echo "</tr>";
        }

        echo "</table>";
		?> 
         <form method="POST">
            <label for="cena_od">Cena od:</label>
            <input type="number" name="cena_od" id="cena_od" step="0.01"
                   value="<?php echo isset($_POST['cena_od']) ? htmlspecialchars($_POST['cena_od']) : ''; ?>">

            <label for="cena_do">Cena do:</label>
            <input type="number" name="cena_do" id="cena_do" step="0.01"
                   value="<?php echo isset($_POST['cena_do']) ? htmlspecialchars($_POST['cena_do']) : ''; ?>">

            <input type="submit" value="Filtruj">
        </form>
		
		<?php
		$warunek = "";
        if (isset($_POST['cena_od']) && $_POST['cena_od'] !== '' && isset($_POST['cena_do']) && $_POST['cena_do'] !== '') {
            $cenaOd = floatval($_POST['cena_od']);
            $cenaDo = floatval($_POST['cena_do']);
            $warunek = " WHERE cena >= $cenaOd AND cena <= $cenaDo";
        } elseif (isset($_POST['cena_od']) && $_POST['cena_od'] !== '') {
            $cenaOd = floatval($_POST['cena_od']);
            $warunek = " WHERE cena >= $cenaOd";
        } elseif (isset($_POST['cena_do']) && $_POST['cena_do'] !== '') {
            $cenaDo = floatval($_POST['cena_do']);
            $warunek = " WHERE cena <= $cenaDo";
        }

        $zapytanie = "SELECT * FROM zakupy" . $warunek;
        $wynik = mysqli_query($polaczenie, $zapytanie);

        if (!$wynik) {
            die("Błąd zapytania: " . mysqli_error($polaczenie));
        }
 
        $liczbaWierszy = mysqli_num_rows($wynik);
        $liczbaKolumn = mysqli_num_fields($wynik);
 
        echo "<table>";
 
        echo "<tr>";
        $informacjeKolumn = mysqli_fetch_fields($wynik);
        for ($i = 0; $i < count($informacjeKolumn); $i++) {
            echo "<th>" . $informacjeKolumn[$i]->name . "</th>";
        }
        echo "</tr>";

        mysqli_data_seek($wynik, 0); // reset wskaźnika

        for ($wiersz = 0; $wiersz < $liczbaWierszy; $wiersz++) {
            $daneWiersza = mysqli_fetch_row($wynik);
            echo "<tr>";
            for ($kolumna = 0; $kolumna < $liczbaKolumn; $kolumna++) {
                echo "<td>" . $daneWiersza[$kolumna] . "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";

  
        mysqli_close($polaczenie);
        ?>

    </div>
</div>

</body>
</html>
