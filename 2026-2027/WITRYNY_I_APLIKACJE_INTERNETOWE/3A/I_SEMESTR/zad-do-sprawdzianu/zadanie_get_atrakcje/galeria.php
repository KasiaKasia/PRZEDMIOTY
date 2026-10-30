<?php
$atrakcje = [
    1 => ["nazwa" => "Zamek Królewski", "miasto" => "Warszawa", "opis" => "Zabytkowy zamek w Warszawie."],
    2 => ["nazwa" => "Wawel", "miasto" => "Kraków", "opis" => "Historyczna siedziba królów Polski."],
    3 => ["nazwa" => "Molo w Sopocie", "miasto" => "Sopot", "opis" => "Słynne drewniane molo nad Bałtykiem."],
    4 => ["nazwa" => "Pałac Kultury i Nauki", "miasto" => "Warszawa", "opis" => "Znany wieżowiec w centrum Warszawy."]
];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atrakcje turystyczne</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            margin: 0; 
            background: #eaf4fb; 
        }
        header { 
            padding: 25px; 
            text-align: center; 
            color: white; 
            background: #205782; 
        }
        main { 
            max-width: 800px; 
            margin: 20px auto; 
            padding: 20px; 
            background: white; 
        }
        .atrakcja { 
            padding: 15px; 
            margin: 12px 0; 
            border: 1px solid #b7d2e5; 
            border-radius: 8px; 
        }
        a { color: #205782; }
    </style>
</head>
<body>
<header><h1>Galeria atrakcji turystycznych</h1></header>
<main>
    <h2>Wybierz atrakcję</h2>

    <?php
    /*
     * ZADANIE 1
     * 1. Za pomocą foreach przejdź po tablicy $atrakcje.
     * 2. Każdą atrakcję wyświetl w <div class="atrakcja">.
     * 3. Wyświetl nazwę atrakcji w <h3> i miasto w <p>.
     * 4. Dodaj odnośnik "Zobacz szczegóły" do strony szczegoly.php.
     *    Przekaż w adresie parametr GET o nazwie id,
     *    którego wartością jest klucz tablicy, np. szczegoly.php?id=2.
     * 5. Wartości tekstowe wyświetlaj z użyciem htmlspecialchars().
     *
     * TUTAJ WPISZ ROZWIĄZANIE:
     */


    ?>
</main>
</body>
</html>
