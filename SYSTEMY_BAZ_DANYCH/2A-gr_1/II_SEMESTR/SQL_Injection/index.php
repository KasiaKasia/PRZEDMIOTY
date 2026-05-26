<?php
$mysqli = new mysqli("localhost", "root", "", "CTF");

if ($mysqli->connect_error) {
    die("Błąd połączenia: " . $mysqli->connect_error);
}

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';

    // BEZPIECZNE zapytanie - prepared statement
    $stmt = $mysqli->prepare("SELECT * FROM users WHERE username = ? AND password = ?");

    if (!$stmt) {
        die("Błąd prepare: " . $mysqli->error);
    }

    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();

    $result = $stmt->get_result();

    // Debug SQL (bez danych użytkownika)
    echo "<div style='background:#fff3cd;padding:15px;margin-bottom:20px;border:1px solid #ffc107;'>";
    echo "<strong>Zapytanie:</strong> Prepared Statement (bez SQL Injection)";
    echo "</div>";

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();

        $message = "
        <div style='padding:15px;background:#d4edda;color:#155724;border:1px solid #c3e6cb;'>
            <h2>✅ Zalogowano!</h2>
            <p>Witaj: <strong>{$user['username']}</strong></p>
        </div>";
    } else {
        $message = "
        <div style='padding:15px;background:#f8d7da;color:#721c24;border:1px solid #f5c6cb;'>
            ❌ Błędny login lub hasło
        </div>";
    }

    $stmt->close();
}
?>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Secure Login</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 40px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            margin-bottom: 20px;
            box-sizing: border-box;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 14px;
            background: #28a745;
            color: white;
            border: none;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #218838;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Bezpieczne logowanie (SQL Injection ZABLOKOWANE)</h1>

    <?= $message ?>

    <form method="POST">

        <label>Login:</label>
        <input type="text" name="login" required>

        <label>Hasło:</label>
        <input type="password" name="password">

        <button type="submit">Zaloguj</button>

    </form>

    <hr>

    <p><strong>Ten kod jest bezpieczny, ponieważ używa prepared statements.</strong></p>

</div>

</body>
</html>