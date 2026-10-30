<?php
// Ta sama tablica jest podana ponownie, aby zadanie składało się tylko z dwóch plików.
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
    <title>Szczegóły atrakcji</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #eaf4fb; }
        header { padding: 25px; text-align: center; color: white; background: #205782; }
        main { max-width: 800px; margin: 20px auto; padding: 20px; background: white; }
        a { color: #205782; }
    </style>
</head>
<body>
<header><h1>Szczegóły atrakcji</h1></header>
<main>
    <?php
    /*
     * ZADANIE 2
     * 1. Odczytaj parametr id metodą GET za pomocą $_GET.
     * 2. Sprawdź, czy element tablicy $atrakcje o tym id istnieje.
     * 3. Jeśli istnieje, wyświetl nazwę atrakcji w <h2>,
     *    miasto w <p> oraz opis w <p>.
     * 4. Jeśli id nie podano lub nie ma takiej atrakcji,
     *    wyświetl: "Nie znaleziono atrakcji".
     * 5. Wartości tekstowe wyświetlaj z użyciem htmlspecialchars().
     *
     * TUTAJ WPISZ ROZWIĄZANIE:
     */


    ?>

    <p><a href="galeria.php">Powrót do galerii</a></p>
</main>
</body>
</html>
