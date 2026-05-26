<?php
session_start(); 
$mysqli = new mysqli("localhost", "root", "", "CTF");

// ❌ Bez ujawniania szczegółów błędów
if ($mysqli->connect_error) {
    die("Błąd połączenia z bazą danych.");
}

$message = "";

// =======================
// CSRF TOKEN - Cross-Site Request Forgery
// random_bytes(32) - generuje 32 losowe bajty (silna kryptografia)
// bin2hex(...) - zamienia bajty na zapis HEX:
// =======================
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// =======================
// BRUTE FORCE PROTECTION
// =======================
if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] = 0;
}

if (!isset($_SESSION['blocked_until'])) {
    $_SESSION['blocked_until'] = 0;
}

// blokada czasowa
if (time() < $_SESSION['blocked_until']) {
    die("Zbyt wiele prób logowania. Spróbuj ponownie później.");
}

// =======================
// LOGIN LOGIC
// =======================
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // CSRF CHECK
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die("Nieprawidłowy token CSRF.");
    }

    $username = trim($_POST['login'] ?? '');
    $password = $_POST['password'] ?? '';

    // =======================
    // WALIDACJA INPUTU
	// preg_match(...) - Sprawdza czy tekst pasuje do wzorca.
    // =======================
	//
	/*
	1. ^ początek stringa 
	2. [a-zA-Z0-9_]

		dozwolone znaki:

		a–z (małe litery)
		A–Z (duże litery)
		0–9 (cyfry)
		_ (podkreślenie)

		NIC więcej

	3. {3,20}

		długość:

		minimum 3 znaki
		maksimum 20 znaków
	4. $ - koniec stringa
	*/
    if (!preg_match('/^[a-zA-Z0-9_]{3,20}$/', $username)) {
        $message = "❌ Nieprawidłowy login.";
    } else {

        // Prepared statement (SQL Injection SAFE)
        $stmt = $mysqli->prepare("SELECT username, password FROM users WHERE username = ?");

        if (!$stmt) {
            $message = "❌ Wystąpił błąd systemu.";
        } else {

            $stmt->bind_param("s", $username);
            $stmt->execute();

            $result = $stmt->get_result();
			/*
			pobiera 1 wiersz z wyniku
			zamienia go na tablicę asocjacyjną
			*/
            $user = $result->fetch_assoc();

            // =======================
            // LOGIKA LOGOWANIA
			/*
			Sprawdza:

				czy wpisane hasło ($password) pasuje do hasła z bazy (hash)
				w bazie hasło : $2y$10$abc... (hash bcrypt)

				Użytkownik wpisuje:	admin1
			*/
            // =======================
            if ($user && password_verify($password, $user['password'])) {

                // reset prób po sukcesie
                $_SESSION['login_attempts'] = 0;
/*
htmlspecialchars() w PHP służy do zamiany znaków specjalnych na bezpieczne encje HTML, 
żeby zapobiec m.in. atakom XSS (Cross-Site Scripting).
*/
                $message = "
                <div style='padding:15px;background:#d4edda;color:#155724;border:1px solid #c3e6cb;'>
                    <h2>✅ Zalogowano!</h2>
                    <p>Witaj: <strong>" . htmlspecialchars($user['username']) . "</strong></p>
                </div>";

            } else {

                // brute force counter
                $_SESSION['login_attempts']++;

                // po 5 próbach blokada 5 minut
                if ($_SESSION['login_attempts'] >= 5) {
                    $_SESSION['blocked_until'] = time() + 300;
                    $_SESSION['login_attempts'] = 0;
                }

                $message = "
                <div style='padding:15px;background:#f8d7da;color:#721c24;border:1px solid #f5c6cb;'>
                    ❌ Błędny login lub hasło
                </div>";
            }

            $stmt->close();
        }
    }
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

    <h1>Bezpieczne logowanie (CTF – wersja zabezpieczona)</h1>

    <?= $message ?>

    <form method="POST">

        <!-- CSRF TOKEN -->
        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">

        <label>Login:</label>
        <input type="text" name="login" required>

        <label>Hasło:</label>
        <input type="password" name="password" required>

        <button type="submit">Zaloguj</button>
    </form>

    <hr>

    <p><strong>Zastosowane zabezpieczenia:</strong></p>
    <ul>
        <li>Prepared Statements (SQL Injection)</li>
        <li>password_hash / password_verify (jeśli w DB)</li>
        <li>Walidacja loginu (regex)</li>
        <li>CSRF token</li>
        <li>Brute force protection (limit prób)</li>
        <li>Bezpieczne komunikaty błędów</li>
        <li>htmlspecialchars (XSS protection)</li>
    </ul>

</div>

</body>
</html>