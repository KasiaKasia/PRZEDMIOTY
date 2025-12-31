<?php 
	$polaczenie = mysqli_connect('localhost','root','','opony'); 
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Szablon HTML5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <header>
        <nav aria-label="Główna nawigacja">
            <ul>
                <li><a href="#home">Strona główna</a></li>           
                <li><a href="#services">Usługi</a></li>
                <li><a href="#kontakt">Kontakt</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <aside>
            <?php 
            
            $zapytanie1="SELECT * FROM `opony` ORDER BY `cena` ASC LIMIT 10;";
            $res1 = mysqli_query($polaczenie,$zapytanie1);
             echo '<h2>Najtańsze opony</h2>';
			while ($row1 = mysqli_fetch_assoc($res1)) {
				echo "<article class='produkt'>";
				echo '<h4>opona: ' . $row1['producent'] . ' model: ' . $row1['model'] . '</h4>';
				echo '<h3>cena: ' . $row1['cena'] . ' zł</h3>';
				echo "</article>";
			}

            ?>
           
            <p><a href="https://opona.pl/">Więcej ofert</a></p>
        </aside>
        <section class='pierwszy'>
            <h1>Promocja tygodnia</h1>

			<?php
				$zapytanie2 = "SELECT producent, model, sezon, cena FROM opony WHERE nr_kat = 1";
				$wynikZapytania2 = mysqli_query($polaczenie, $zapytanie2);

				while ($wiersz2 = mysqli_fetch_assoc($wynikZapytania2)) {
					echo "<article>";
					echo '<h2>Producent opon ' . $wiersz2['producent'] . ', model ' . $wiersz2['model'] . '</h2>';
					echo '<h4>Sezon: ' . $wiersz2['sezon'] . '</h4>';
					echo '<h4>Cena:' . $wiersz2['cena'] . ' zł</h4>';
					echo "</article>";
				}
			?>
        </section>
		<section class='drugi'>
			<h2>Losowe zamówienie</h2>
        
			<?php 
                $zapytanie3 = "SELECT id_zam, ilosc, opony.model, opony.cena 
                FROM zamowienie 
                JOIN opony ON zamowienie.nr_kat = opony.nr_kat 
                ORDER BY RAND()	LIMIT 1";
                $res3 = mysqli_query($polaczenie,$zapytanie3);
                while($row3 = mysqli_fetch_row($res3)){
				    $wartosc = $row3[1] * $row3[3];
					echo "<h3>Zamówienie #$row3[0]</h3>";
					echo "<h5>$row3[1] szt. modelu $row3[2]</h5>";
					echo "<h4>Wartość: $wartosc zł</h4>";
				}
			?>
        </section>
    </main>
    <footer>
		<p>Imię i nazwisko</p>
	</footer>
</body>
</html>
<?php 
	mysqli_close($polaczenie);
?>