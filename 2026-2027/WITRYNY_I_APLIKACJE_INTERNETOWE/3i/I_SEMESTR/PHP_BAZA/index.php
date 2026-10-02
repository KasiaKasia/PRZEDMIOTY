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
    </style>
</head>

<body>

    <h1>Lista uczniów</h1>

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

    $sql = "SELECT * FROM uczniowie";

    $result = mysqli_query($connection, $sql);

    ?>

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

            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["imie"] . "</td>";
            echo "<td>" . $row["nazwisko"] . "</td>";
            echo "<td>" . $row["klasa"] . "</td>";
            echo "<td>" . $row["wiek"] . "</td>";

            echo "</tr>";
        }

        ?>

    </table>

    <?php

    mysqli_close($connection);

    ?>

</body>

</html>