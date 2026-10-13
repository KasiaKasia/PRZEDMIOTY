<?php

$connection = mysqli_connect(
    "localhost",
    "root",
    "",
    "szkola_php"
);

if (!$connection) {
    die("Błąd połączenia: " . mysqli_connect_error());
}

mysqli_set_charset($connection, "utf8mb4");

$komunikat = "";

// Puste wartości formularza edycji.
$uczen = [
    "id" => "",
    "imie" => "",
    "nazwisko" => "",
    "klasa" => "",
    "wiek" => ""
];

// ==========================================
// DODAWANIE UCZNIA — POST i INSERT
// ==========================================

if (isset($_POST["dodaj"])) {

    // mysqli_real_escape_string() przygotowuje tekst do wstawienia do zapytania SQL, 
    // zabezpieczając znaki specjalne, np. apostrof ',
    // który mógłby zepsuć zapytanie.
    $imie = mysqli_real_escape_string($connection, $_POST["imie"]);
    $nazwisko = mysqli_real_escape_string($connection, $_POST["nazwisko"]);
    $klasa = mysqli_real_escape_string( $connection, $_POST["klasa"]);
    $wiek = (int) $_POST["wiek"];

    if (
        trim($imie) !== "" &&
        trim($nazwisko) !== "" &&
        trim($klasa) !== "" &&
        $wiek >= 1 &&
        $wiek <= 120
    ) {
        $sql = "INSERT INTO uczniowie
                (imie, nazwisko, klasa, wiek)
                VALUES ( '". $_POST["imie"] . "' , '$nazwisko', '$klasa', $wiek)";

        mysqli_query($connection, $sql);

        $komunikat = "Dodano ucznia.";
    } else {
        $komunikat = "Uzupełnij poprawnie wszystkie pola.";
    }
}

// ==========================================
// EDYCJA UCZNIA — POST i UPDATE
// ==========================================

if (isset($_POST["edytuj"])) {

    $id = (int) $_POST["id"];


    $imie = mysqli_real_escape_string($connection, $_POST["imie"]);
    $nazwisko = mysqli_real_escape_string($connection, $_POST["nazwisko"]);
    $klasa = mysqli_real_escape_string($connection, $_POST["klasa"]);
    $wiek = (int) $_POST["wiek"];

    if ($id > 0 &&
        trim($imie) !== "" &&
        trim($nazwisko) !== "" &&
        trim($klasa) !== "" &&
        $wiek >= 1 &&
        $wiek <= 120) {

        $sql = "UPDATE uczniowie
                SET imie = '".$_POST["imie"]."',
                    nazwisko = '$nazwisko',
                    klasa = '$klasa',
                    wiek = $wiek
                WHERE id = $id";

        mysqli_query($connection, $sql);

        if (mysqli_affected_rows($connection) > 0) {
            $komunikat = "Zmieniono dane ucznia.";
        } else {
            $komunikat = "Dane są identyczne lub uczeń nie istnieje.";
        }
    } else {
        $komunikat = "Uzupełnij poprawnie wszystkie pola.";
    }
}

// ==========================================
// USUWANIE UCZNIA — POST i DELETE
// ==========================================

if (isset($_POST["usun"])) {

    $id = (int) $_POST["id"];

    if ($id > 0) {

        $sql = "DELETE FROM uczniowie WHERE id = $id";

        mysqli_query($connection, $sql);

        if (mysqli_affected_rows($connection) > 0) {
            $komunikat = "Usunięto ucznia.";
        } else {
            $komunikat = "Nie znaleziono ucznia.";
        }

    } else {
        $komunikat = "Podaj prawidłowe ID.";
    }
}

// ==========================================
// POBRANIE UCZNIA DO EDYCJI — GET i SELECT
// ==========================================

if (isset($_GET["id"])) {

    $id = (int) $_GET["id"];

    $sql = "SELECT * FROM uczniowie WHERE id = $id";

    $result = mysqli_query($connection, $sql);

    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $uczen = $row;
    } else {
        $komunikat = "Nie znaleziono ucznia.";
    }
}

// ==========================================
// POBRANIE LISTY UCZNIÓW — SELECT
// ==========================================

$sql = "SELECT * FROM uczniowie ORDER BY id";

$result = mysqli_query($connection, $sql);

?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Lista uczniów</title>

    <style>
        table {
            border-collapse: collapse;
            width: 600px;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: lightgray;
        }

        form {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <h1>Lista uczniów</h1>

    <p>
        <!--
        htmlspecialchars() w PHP konwertuje znaki specjalne na encje HTML, aby zapobiec atakom XSS.
        ENT_QUOTES oznacza, że zarówno pojedyncze, jak i podwójne cudzysłowy zostaną zamienione na encje HTML.
        "UTF-8" - określa kodowanie tekstu, obsługujące m.in. polskie znaki.
        
        $tekst = "O'Connor mówi: \"Cześć\"";

        echo htmlspecialchars($tekst, ENT_QUOTES, 'UTF-8');

        W kodzie HTML otrzymamy:
        O&#039;Connor mówi: &quot;Cześć&quot;

        W przeglądarce nadal zobaczymy:
        O'Connor mówi: "Cześć"
        -->
        <?php echo htmlspecialchars($komunikat, ENT_QUOTES, "UTF-8"); ?>
    </p>

    <!-- DODAWANIE -->

    <h2>Dodaj ucznia</h2>

    <form action="uczniowie.php" method="post">

        <label>Imię:
            <input type="text" name="imie" required>
        </label>
        <br><br>

        <label>Nazwisko:
            <input type="text" name="nazwisko" required>
        </label>
        <br><br>

        <label>Klasa:
            <input type="text" name="klasa" required>
        </label>
        <br><br>

        <label>Wiek:
            <input type="number" name="wiek" min="1" max="120" required>
        </label>
        <br><br>

        <button type="submit" name="dodaj" value="1">Dodaj ucznia</button>

    </form>

    <!-- POBRANIE DANYCH DO EDYCJI -->

    <h2>Edytuj ucznia</h2>

    <form action="uczniowie.php" method="get">

        <label> ID ucznia:
            <input type="number" name="id" min="1" required>
        </label>

        <button type="submit">Pobierz dane</button>

    </form>

    <!-- ZAPIS ZMIAN -->

    <form action="uczniowie.php" method="post">

        <label>ID ucznia: 
            <input
                type="number"
                name="id"
                min="1"
                value="<?php echo (int) $uczen['id']; ?>"
                required>
        </label>
        <br><br>

        <label>Imię:
            <input
                type="text"
                name="imie"
                value="<?php echo htmlspecialchars($uczen['imie'], ENT_QUOTES, 'UTF-8'); ?>"
                required>
        </label>
        <br><br>

        <label>Nazwisko:
            <input
                type="text"
                name="nazwisko"
                value="<?php echo htmlspecialchars($uczen['nazwisko'], ENT_QUOTES, 'UTF-8'); ?>"
                required>
        </label>
        <br><br>

        <label>Klasa:
            <input
                type="text"
                name="klasa"
                value="<?php echo htmlspecialchars($uczen['klasa'], ENT_QUOTES, 'UTF-8'); ?>"
                required>
        </label>
        <br><br>

        <label>Wiek:
            <input
                type="number"
                name="wiek"
                min="1"
                max="120"
                value="<?php echo htmlspecialchars((string) $uczen['wiek'], ENT_QUOTES, 'UTF-8'); ?>"
                required>
        </label>
        <br><br>

        <button type="submit" name="edytuj" value="1">Zapisz zmiany</button>

    </form>

    <!-- USUWANIE -->

    <h2>Usuń ucznia</h2>

    <form action="uczniowie.php" method="post">

        <label>
            ID ucznia:
            <input type="number" name="id" min="1" required>
        </label>

        <button type="submit" name="usun" value="1">
            Usuń ucznia
        </button>

    </form>

    <!-- LISTA UCZNIÓW -->

    <h2>Wszyscy uczniowie</h2>

    <a href="uczniowie.php">Wyświetl aktualną listę</a>
    <br><br>

    <table>

        <tr>
            <th>ID</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Klasa</th>
            <th>Wiek</th>
        </tr>

        <?php

        while ($row = mysqli_fetch_assoc($result)) {

            echo "<tr>";

            echo "<td>" . (int) $row["id"] . "</td>";

            echo "<td>"
                . htmlspecialchars($row["imie"], ENT_QUOTES, "UTF-8")
                . "</td>";

            echo "<td>"
                . htmlspecialchars($row["nazwisko"], ENT_QUOTES, "UTF-8")
                . "</td>";

            echo "<td>"
                . htmlspecialchars($row["klasa"], ENT_QUOTES, "UTF-8")
                . "</td>";

            echo "<td>" . (int) $row["wiek"] . "</td>";

            echo "</tr>";
        }

        ?>

    </table>

</body>

</html>

<?php
mysqli_close($connection);
?>