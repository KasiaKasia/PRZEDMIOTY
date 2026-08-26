<?php
session_start();
// Połączenie z bazą danych
$conn = new mysqli("localhost", "root", "", "gry");
if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}
mysqli_set_charset($conn, "utf8");
 
// Obsługa formularza (tylko jeśli POST i nazwa istnieje)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nazwa'])) {
    // Walidacja: wyczyść spacje i sprawdź puste
    $nazwa = $conn->real_escape_string(trim($_POST['nazwa']));
    $opis = $conn->real_escape_string(trim($_POST['opis']));
    $cena = (float)$_POST['cena'];
    $zdjecie = $conn->real_escape_string(trim($_POST['zdjecie']));

    // Jeśli puste lub cena <=0 – błąd
    if (empty(trim($_POST['nazwa'])) || empty(trim($_POST['opis'])) || empty(trim($_POST['zdjecie'])) || $cena <= 0) {
        $_SESSION['blad'] = "Wypełnij wszystkie pola poprawnie (cena > 0)!";
        header('Location: index.php');
        exit();
    }

    // INSERT z query (jak chcesz)
    if ($conn->query("INSERT INTO gry (nazwa, opis, cena, zdjecie) 
                      VALUES ('$nazwa', '$opis', $cena, '$zdjecie')")) {
        // Po sukcesie przekieruj na tę samą stronę (GET)
        $_SESSION['sukces'] = "Gra '$nazwa' dodana pomyślnie!";
        header('Location: index.php');
        exit();  // Zatrzymaj wykonanie skryptu
    } else {
        $_SESSION['blad'] = "Błąd dodawania: " . $conn->error;
        header('Location: index.php');
        exit();
    }
}

// Wyświetl komunikaty z sesji
if (isset($_SESSION['sukces'])) {
    echo "<div style='color: green; background: #d4edda; padding: 10px; margin: 10px; border: 1px solid #c3e6cb;'>";
    echo $_SESSION['sukces'];
    echo "</div>";
    unset($_SESSION['sukces']);  // Wyczyść flagę po wyświetleniu
}
if (isset($_SESSION['blad'])) {
    echo "<div style='color: red; background: #f8d7da; padding: 10px; margin: 10px; border: 1px solid #f5c6cb;'>";
    echo $_SESSION['blad'];
    echo "</div>";
    unset($_SESSION['blad']);  // Wyczyść flagę
}
// Obsługa formularza w stopce – wyświetlenie opisu gry
$opisGra = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['szukaj'])) {
    $id = (int)$_POST['szukaj'];
    $wynik = $conn->query("SELECT nazwa, opis FROM gry WHERE id = $id");
    if ($wynik && $wynik->num_rows > 0) {
        $opisGra = $wynik->fetch_assoc();
    }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Gry komputerowe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Ranking gier komputerowych</h1>
    </header>
    <main>
        <section id="lewa">
            <h3>Top 5 gier w tym miesiącu</h3>
            <ul>
                <?php
                $wynik = $conn->query("SELECT id, nazwa, zdjecie FROM gry LIMIT 5");
                while ($row = $wynik->fetch_assoc()) {
                    echo "<li>{$row['nazwa']} <img src='{$row['zdjecie']}' alt='gra' height='50'></li>";
                }
                ?>
            </ul>
            <h3>Nasz sklep</h3>
            <a href="http://sklep.gry.pl" target="_blank">Tu kupisz gry</a>

            <h3>Stronę wykonał</h3>
            <p>000000000 (Twój numer zdającego)</p>
        </section>

        <section id="srodek">
            <?php
            $wynik = $conn->query("
                SELECT nazwa, LEFT(opis,100) AS opis_skrot, punkty, cena
                FROM gry WHERE id = 1
            ");
            if ($wynik && $wynik->num_rows > 0) {
                $row = $wynik->fetch_assoc();
                echo "<h3>{$row['nazwa']}</h3>";
                echo "<p>{$row['opis_skrot']}...</p>";
                echo "<p>Punkty: {$row['punkty']}, Cena: {$row['cena']} PLN</p>";
            }
            ?>
        </section>

        <section id="prawa">
            <h3>Dodaj nową grę</h3>
            <form method="post" action="index.php" >
                <div>Nazwa: </div> <input type="text" name="nazwa" required> 
                <p>Opis: </p><input type="text" name="opis" required> 
                <p>Cena:</p> <input type="number" step="0.01" name="cena" required> 
                <p>Zdjęcie: </p><input type="text" name="zdjecie" required> 
                <button type="submit" name="Wyślij">DODAJ</button>
            </form>
        </section>
    </main>
    <footer>
        <form method="post" action="gry.php">
            <label>ID gry: <input type="number" name="szukaj"></label>
            <button type="submit">Pokaż opis</button>
        </form>

        <?php
        if ($opisGra) {
            echo "<h4>{$opisGra['nazwa']}</h4>";
            echo "<p>{$opisGra['opis']}</p>";
        }

        echo "<h3>Najlepsze gry</h3>";
        $wynik = $conn->query("
            SELECT nazwa, punkty, cena
            FROM gry
            ORDER BY punkty DESC
            LIMIT 5
        ");
        while ($row = $wynik->fetch_assoc()) {
            echo "<p>{$row['nazwa']} - Punkty: {$row['punkty']} - Cena: {$row['cena']} PLN</p>";
        }
        ?>
    </footer>
</body>
</html>
<?php
$conn->close();
?>
