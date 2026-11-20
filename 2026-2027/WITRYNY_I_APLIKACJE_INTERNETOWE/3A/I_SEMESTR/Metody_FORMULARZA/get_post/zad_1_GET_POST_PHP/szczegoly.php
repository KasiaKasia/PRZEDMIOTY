<?php
/*
DODATKOWY PLIK – szczegoly.php
1. Pobierz identyfikator atrakcji z parametru GET o nazwie id.
2. Sprawdź, czy identyfikator jest liczbą całkowitą i występuje w tablicy.
3. Wyświetl nazwę i ilustrację wybranej atrakcji.
4. Jeśli identyfikator jest niepoprawny, wyświetl komunikat o braku atrakcji.
*/
$atrakcje = [
    1 => ["nazwa" => "Wawel", "src" => "img/wawel.jpg"],
    2 => ["nazwa" => "Zamek Królewski", "src" => "img/zamek.jpg"],
    3 => ["nazwa" => "Molo w Sopocie", "src" => "img/molo.jpg"],
    4 => ["nazwa" => "Kopalnia Soli Wieliczka", "src" => "img/wieliczka.jpg"],
    5 => ["nazwa" => "Pałac Kultury i Nauki", "src" => "img/pkin.jpg"],
    6 => ["nazwa" => "Zamek Książ", "src" => "img/ksiaz.jpg"]
];
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$atrakcja = ($id !== false && $id !== null) ? ($atrakcje[$id] ?? null) : null;
if ($atrakcja === null) {
    http_response_code(404);
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szczegóły atrakcji</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; background: #f0f8ff; font-family: Arial, sans-serif; color: #243447; }
        header, footer { background: #205782; color: white; text-align: center; padding: 22px; }
        main { max-width: 720px; margin: 30px auto; padding: 25px; background: white; border-radius: 9px; border: 1px solid #d5e1ec; text-align: center; }
        h1 { margin: 0; }
        h2 { color: #205782; }
        img { width: 100%; max-width: 550px; height: auto; border-radius: 8px; }
        a { display: inline-block; padding: 10px 15px; background: #3278a8; color: white; text-decoration: none; border-radius: 5px; margin-top: 15px; }
        footer { margin-top: 30px; }
    </style>
</head>
<body>
<header><h1>Atrakcje turystyczne</h1></header>
<main>
    <?php if ($atrakcja !== null): ?>
        <h2><?= htmlspecialchars($atrakcja['nazwa'], ENT_QUOTES, 'UTF-8') ?></h2>
        <p>Identyfikator atrakcji: <?= $id ?></p>
        <img src="<?= htmlspecialchars($atrakcja['src'], ENT_QUOTES, 'UTF-8') ?>"
             alt="<?= htmlspecialchars($atrakcja['nazwa'], ENT_QUOTES, 'UTF-8') ?>">
    <?php else: ?>
        <h2>Nie znaleziono atrakcji</h2>
        <p>Podany identyfikator jest niepoprawny lub nie istnieje.</p>
    <?php endif; ?>
    <p><a href="index.php">Powrót do zadań</a></p>
</main>
<footer>PHP – przykład przekazywania parametru GET</footer>
</body>
</html>
