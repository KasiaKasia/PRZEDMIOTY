<?php
$mysqli = new mysqli("localhost", "root", "", "CTF");

if ($mysqli->connect_error) {
    die("Błąd połączenia: " . $mysqli->connect_error);
}

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
   $username = $_POST['login'] ?? '';

    // Proste podatne zapytanie
    $sql = "SELECT * FROM users WHERE username = '$username'";

    // Debug
    echo "<div style='background:#fff3cd; padding:15px; margin:15px 0; border:2px solid #ffc107; font-family:monospace;'>";
    echo "<strong>Zapytanie SQL:</strong><br>" . htmlspecialchars($sql);
    echo "</div>";

    $result = $mysqli->query($sql);

    if ($result && $result->num_rows > 0) {
        $message = "<p style='color:green; font-weight:bold; font-size:20px;'>✅ ZALOGOWANO POMYŚLNIE!<br>
                    Znaleziono " . $result->num_rows . " rekordów</p>";
    } else {
        $message = "<p style='color:red; font-weight:bold;'>❌ Błędny login lub hasło.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Injection Test</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f4f4f4; }
        .container { max-width: 700px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        input { width: 100%; padding: 12px; margin: 8px 0; box-sizing: border-box; font-size: 16px; }
        button { width: 100%; padding: 14px; background: #0066cc; color: white; border: none; font-size: 16px; cursor: pointer; }
    </style>
</head>
<body>

<div class="container">
    <h1>Logowanie — podatne na SQL Injection</h1>
    
    <?= $message ?>

    <form method="POST">
        <label><strong>Login:</strong></label><br>
        <input type="text" name="login" required><br><br>
        
        <label><strong>Hasło:</strong> (może być puste)</label><br>
        <input type="text" name="password" value=""><br><br>
        
        <button type="submit">Zaloguj się</button>
    </form>

    <hr>
    <h3>🔥 Wpisz dokładnie w polu Login (skopiuj i wklej):</h3>
    <ul>
        <li><code>' OR 1=1</code> ← **najprostszy i najlepszy**</li>
        <li><code>' OR '1'='1</code></li>
        <li><code>janek' OR '1'='1</code></li>
    </ul>
    <p><strong>Nie dodawaj na końcu -- ani # przy tym teście.</strong></p>
</div>

</body>
</html>