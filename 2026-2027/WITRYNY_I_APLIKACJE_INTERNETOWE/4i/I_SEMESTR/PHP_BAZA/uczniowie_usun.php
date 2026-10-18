
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

        th, td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: lightgray;
        }
    </style>
</head>

<body>

    <h1>Usuń ucznia</h1>

    <form method="POST" action="">

        <label for="id">Podaj ID ucznia:</label>

        <input
            type="number"
            id="id"
            name="id"
            min="1"
            required>

        <input
            type="submit"
            name="usun"
            value="Usuń ucznia">

    </form>

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

    // USUWANIE UCZNIA

    if (isset($_POST["usun"])) {

        $id = filter_var(
            $_POST["id"] ?? null,
            FILTER_VALIDATE_INT
        );

        if ($id !== false && $id > 0) {
         
            $sql = "DELETE FROM uczniowie
                    WHERE id = $id";

            if (mysqli_query($connection, $sql)) {

				// mysqli_affected_rows() – zwraca liczbę rekordów,
				// które zostały dodane, zmienione lub usunięte
				// przez ostatnio wykonane zapytanie SQL.

				// $liczba = mysqli_affected_rows($connection);

                if (mysqli_affected_rows($connection) > 0) {
                    echo "<p>Uczeń został usunięty.</p>";
                } else {
                    echo "<p>Nie znaleziono ucznia o podanym ID.</p>";
                }

            } else {
                echo "<p>Błąd podczas usuwania ucznia.</p>";
            }
        
 /*

		$sql = "DELETE FROM uczniowie WHERE id = ?";

        // Przygotowanie zapytania SQL
        $stmt = mysqli_prepare($connection, $sql);

        // Przypisanie wartości do parametru
        mysqli_stmt_bind_param($stmt, "i", $id);

        // Wykonanie zapytania SQL
        if (mysqli_stmt_execute($stmt)) {

            if (mysqli_stmt_affected_rows($stmt) > 0) {
                echo "<p>Uczeń został usunięty.</p>";
            } else {
                echo "<p>Nie znaleziono ucznia o podanym ID.</p>";
            }

        } else {
            echo "<p>Błąd podczas usuwania ucznia.</p>";
        }

        // Zamknięcie przygotowanego zapytania
        mysqli_stmt_close($stmt);

 
*/
        } else {
            echo "<p>Podaj poprawne ID ucznia.</p>";
        }
    }

    // POBIERANIE UCZNIÓW

    $sql = "SELECT * FROM uczniowie";

    $result = mysqli_query($connection, $sql);

    ?>

    <h1>Lista uczniów</h1>

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

            echo "<td>" . htmlspecialchars((string)$row["id"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["imie"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["nazwisko"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["klasa"]) . "</td>";
            echo "<td>" . htmlspecialchars((string)$row["wiek"]) . "</td>";

            echo "</tr>";
        }

        ?>

    </table>

    <?php
    mysqli_close($connection);
    ?>

</body>
</html>
