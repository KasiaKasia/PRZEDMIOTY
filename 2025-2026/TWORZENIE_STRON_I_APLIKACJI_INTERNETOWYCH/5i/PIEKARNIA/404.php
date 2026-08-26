<?php
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Strona nie znaleziona</title>
    <style>
        body { font-family: Arial; text-align: center; margin-top: 50px; }
        h1 { color: red; }
        a { display: inline-block; margin-top: 20px; color: blue; text-decoration: none; }
    </style>
</head>
<body>
    <h1>404 – Strona nie istnieje</h1>
    <p>Wygląda na to, że podany link jest nieprawidłowy.</p>
    <a href="index.php">⬅ Wróć do strony głównej</a>
</body>
</html>
