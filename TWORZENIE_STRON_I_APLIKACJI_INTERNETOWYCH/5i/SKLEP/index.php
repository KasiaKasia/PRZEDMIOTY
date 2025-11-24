<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>SKLEP INTERNETOWY – PANEL ANALITYCZNY</title>
    <link rel="stylesheet" href="styles.css">
    <script>

        function aktualizujCzas() {
            const teraz = new Date();
            const data = teraz.toLocaleDateString('pl-PL');
            const czas = teraz.toLocaleTimeString('pl-PL');
            document.getElementById('czas').innerHTML = data + " " + czas;
        }
        setInterval(aktualizujCzas, 1000);
 
        function pokazUkryjMenuLewe() {
            const menuLewe = document.getElementById('menu-lewe');
            const przyciskUkryj = document.getElementById('ukryj-menu');
            const przyciskPokaz = document.getElementById('pokaz-menu');
            const linkiNaglowek = document.getElementById('menu-zadan');

            if (menuLewe.style.display === 'none') {
                menuLewe.style.display = 'block';
                przyciskUkryj.style.display = 'inline';
                przyciskPokaz.style.display = 'none';
                linkiNaglowek.style.display = 'none';
                document.getElementById('blok-glowny').style.width = '70%';
            } else {
                menuLewe.style.display = 'none';
                przyciskUkryj.style.display = 'none';
                przyciskPokaz.style.display = 'inline';
                linkiNaglowek.style.display = 'flex';
                document.getElementById('blok-glowny').style.width = '100%';
            }
        }
        function pokazUkryj(){
            const menuLewe = document.getElementById('menu-lewe');
            const przyciskUkryj = document.getElementById('ukryj-menu');
            const przyciskPokaz = document.getElementById('pokaz-menu');
            const linkiNaglowek = document.getElementById('menu-zadan');
            const blokGlowny = document.getElementById('blok-glowny');
 
            if (menuLewe.style.visibility === 'hidden') {

                menuLewe.style.visibility = 'visible';
                przyciskUkryj.style.display = 'inline';
                przyciskPokaz.style.display = 'none';
                linkiNaglowek.style.display = 'none';
                blokGlowny.style.width = '70%';

            } else {

                menuLewe.style.visibility = 'hidden';
                przyciskUkryj.style.display = 'none';
                przyciskPokaz.style.display = 'inline';
                linkiNaglowek.style.display = 'flex';
                blokGlowny.style.width = '100%';
            }


        }
    </script>
</head>
<body onload="aktualizujCzas()">

    <header id="naglowek">
        <div id="naglowek-gorny">
            <div id="menu-przyciski">
                <button id="ukryj-menu" onclick="pokazUkryj()"><<</button>
                <button id="pokaz-menu" onclick="pokazUkryj()" style="display:none;">>></button>
            </div>

            <h2>SKLEP INTERNETOWY – ANALIZA DANYCH SQL</h2>

            <div id="czas"></div>
        </div>

        <nav id="menu-zadan">
        
                <?php
				
                for ($numerZad = 1; $numerZad <= 20; $numerZad++) {
                    echo "<a href='?zadanie=$numerZad'>Zadanie $numerZad</a>";
                }
				 
                ?>
        </nav>
    </header>

    <main>
        <aside id="menu-lewe" style="visibility: visible;">
            <ul>
                <?php
				
                for ($numerZad = 1; $numerZad <= 20; $numerZad++) {
                    echo "<li><a href='?zadanie=$numerZad'>Zadanie $numerZad</a></li>";
                }
				 
                ?>
            </ul>
        </aside>
	
        <section id="blok-glowny">
            <?php
            /*
            $conn = new mysqli("localhost", "root", "", "sklep_internetowy");
            if ($conn->connect_error) {
                die("Błąd połączenia: " . $conn->connect_error);
            }

            if (isset($_GET['zadanie'])) {
                $zad = intval($_GET['zadanie']);
                echo "<h3>Wynik zapytania: Zadanie $zad</h3>";
 
                switch ($zad) {
                    case 1:
                        $sql = "SELECT * FROM zakupy WHERE DATE(data_zakupu) = CURDATE();";
                        break;
                    case 2:
                        $sql = "SELECT CURTIME() AS godzina;";
                        break;
                    case 3:
                        $sql = "SELECT NOW() AS aktualny_czas;";
                        break;
                    default:
                        $sql = "SELECT 'Brak zapytania dla tego numeru' AS komunikat;";
                }

                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    echo "<table><tr>";
                    while ($fieldinfo = $result->fetch_field()) {
                        echo "<th>{$fieldinfo->name}</th>";
                    }
                    echo "</tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        foreach ($row as $value) {
                            echo "<td>$value</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<p>Brak wyników do wyświetlenia.</p>";
                }
            }
            $conn->close();
           */ 
           
$polaczenie = mysqli_connect("localhost", "root", "", "sklep_internetowy");

if (!$polaczenie) {
    die("Błąd połączenia: " . mysqli_error($polaczenie));
}
 
if (!mysqli_select_db($polaczenie, "sklep_internetowy")) {
    die("Nie można wybrać bazy: " . mysqli_error($polaczenie));
}

if (isset($_GET['zadanie'])) {

    $zad = intval($_GET['zadanie']);
    echo "<h3>Wynik zapytania: Zadanie $zad</h3>";

    // Przykładowe zapytania SQL
    switch ($zad) {
        case 1:
            $sql = "SELECT * FROM zakupy WHERE DATE(data_zakupu) = CURDATE();";
            break;
        case 2:
            $sql = "SELECT CURTIME() AS godzina;";
            break;
        case 3:
            $sql = "SELECT NOW() AS aktualny_czas;";
            break;
        default:
            $sql = "SELECT 'Brak zapytania dla tego numeru' AS komunikat;";
    }
 
    $wynik = mysqli_query($polaczenie, $sql);
    $wiersze = mysqli_num_rows($wynik);
    $kolumny = mysqli_num_fields($wynik);
    if (!$wynik) {
        echo "<p>Błąd zapytania: " . mysqli_error($polaczenie) . "</p>";
    } else if ( $wiersze > 0) {

        echo "<table border='1'><tr>";
 


        $naglowki = mysqli_fetch_fields($wynik);
        $liczbaKolumn = count($naglowki);

        for ($i = 0; $i < $liczbaKolumn; $i++) {
            echo "<th>" . $naglowki[$i]->name . "</th>";
        }
        echo "</tr>";
 
        for ($r = 0; $r < $wiersze; $r++) {
            $wiersz = mysqli_fetch_row($wynik); // tablica numeryczna
            echo "<tr>";
 
            for ($c = 0; $c < $kolumny; $c++) {
                echo "<td>ss" . $wiersz[$c] . "</td>";
            }

            echo "</tr>";
        }

        echo "</table>";

    } else {
        echo "<p>Brak wyników do wyświetlenia.</p>";
    }
}
 
mysqli_close($polaczenie);
 
          
          ?>  
        </section>
    </main>

    <footer id="stopka">
        Autor: Imię Nazwisko – klasa X grupa X – przedmiot: Projekt SQL i PHP
    </footer>
</body>
</html>
