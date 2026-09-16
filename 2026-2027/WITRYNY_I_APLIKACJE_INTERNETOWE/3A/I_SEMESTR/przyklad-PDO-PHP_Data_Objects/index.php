<?php

try {

    // 1. Połączenie z bazą danych
    $pdo = new PDO(
        "mysql:host=localhost;dbname=szkola_php;charset=utf8mb4",
        "root",
        ""
    );

    // 2. Ustawienie obsługi błędów
    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    // 3. Zapytanie SQL
    $sql = "SELECT * FROM uczniowie";

    // 4. Wykonanie zapytania
    $result = $pdo->query($sql);

} catch (PDOException $e) {

    die("Błąd połączenia: " . $e->getMessage());
}

?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Lista uczniów</title>
</head>

<body>

<h1>Lista uczniów</h1>

<table border="1">

    <tr>
        <th>ID</th>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Klasa</th>
    </tr>

    <?php

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

        echo "<tr>";

        echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["imie"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["nazwisko"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["klasa"]) . "</td>";

        echo "</tr>";
    }

    ?>

</table>

</body>
</html>