<?php
session_start(); 
$conn = new mysqli("localhost", "root", "", "gry");
if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}
mysqli_set_charset($conn, "utf8");
 
// Obsługa formularza (tylko jeśli POST i nazwa istnieje)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nazwa'])) {
    // Walidacja: wyczyść spacje i sprawdź puste
    $nazwa = $conn->real_escape_string(($_POST['nazwa']));
    $opis = $conn->real_escape_string(($_POST['opis']));
    $cena = (float)$_POST['cena'];
    $zdjecie = $conn->real_escape_string(($_POST['zdjecie']));
 
    if (empty($nazwa) || empty($opis) || empty($zdjecie) || $cena <= 0) {
        $_SESSION['blad'] = "Wypełnij wszystkie pola poprawnie (cena > 0)!";
        header('Location: gry.php');
        exit();
    }
    // INSERT z query (jak chcesz)
    if ($conn->query("INSERT INTO gry (nazwa, opis, cena, zdjecie) 
                      VALUES ('$nazwa', '$opis', $cena, '$zdjecie')")) {
        $_SESSION['sukces'] = "Gra '$nazwa' dodana pomyślnie!";
        header('Location: gry.php');
        exit();
    } else {
        $_SESSION['blad'] = "Błąd dodawania: " . $conn->error;
        header('Location: gry.php');
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
                // Skrypt 1: Top 5 po punktach
                $wynik = $conn->query("SELECT nazwa FROM gry ORDER BY punkty DESC LIMIT 5");
                while ($row = $wynik->fetch_assoc()) {
                    echo "<li>{$row['nazwa']}</li>";
                }
                ?>
            </ul>
            <h3>Nasz sklep</h3>
            <a href="http://sklep.gry.pl">Tu kupisz gry</a>
            <h3>Stronę wykonał</h3>
            <p>000000000</p>
        </section>
        <section id="srodek">
            <?php
            // Skrypt 2: Wyświetlenie wszystkich gier w blokach
            $wynik = $conn->query("SELECT nazwa, opis, punkty, cena FROM gry");
            while ($row = $wynik->fetch_assoc()) {
                $opis_skrot = substr($row['opis'], 0, 100) . '...';
                echo "<div class='gra'>";
                echo "<h3>{$row['nazwa']}</h3>";
                echo "<p>{$opis_skrot}</p>";
                echo "<span class='punkty'>{$row['punkty']}</span>";
                echo "<p>Cena: {$row['cena']} PLN</p>";
                echo "</div>";
            }
            ?>
        </section>
        <section id="prawa">
            <h3>Dodaj nową grę</h3>
            <form method="post" action="gry.php">
                <label for="nazwa">Nazwa:</label><br>
                <input type="text" id="nazwa" name="nazwa" required><br>
                <label for="opis">Opis:</label><br>
                <input type="text" id="opis" name="opis" required><br>
                <label for="cena">Cena:</label><br>
                <input type="number" step="0.01" id="cena" name="cena" required><br>
                <label for="zdjecie">Zdjęcie:</label><br>
                <input type="text" id="zdjecie" name="zdjecie" required><br>
                <button type="submit">DODAJ</button>
            </form>
        </section>
    </main>
    <footer>
        <form method="post" action="gry.php">
            <label>ID gry: <input type="number" name="szukaj"></label>
            <button type="submit">Pokaż opis</button>
        </form>
        <?php
        // Efekt skryptu 3: Wyświetlenie opisu po submicie
        if ($opisGra) {
            echo "<h4>{$opisGra['nazwa']}</h4>";
            echo "<p>{$opisGra['opis']}</p>";
        }
        ?>
    </footer>
</body>
</html>
<?php
$conn->close();
?>
