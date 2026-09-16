<?php
 
$mysqli = new mysqli(
    "localhost",
    "root",
    "",
    "szkola_php"
);
 
if ($mysqli->connect_errno) {
    die("Błąd połączenia: " . $mysqli->connect_error);
}
 
$mysqli->set_charset("utf8mb4");

$sql = "SELECT * FROM uczniowie";

 
$result = $mysqli->query($sql);

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
    if ($result && $result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["imie"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["nazwisko"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["klasa"]) . "</td>";
            echo "</tr>";
        }

    } else {
        echo "<tr><td colspan='4'>Brak danych</td></tr>";
    }

 
    $mysqli->close();
    ?>

</table>

</body>
</html>