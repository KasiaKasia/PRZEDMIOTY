<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>Firma szkoleniowa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">

        <header class="header">
            <div class="header-left">
                <img src="baner.jpg" alt="Szkolenia">
            </div>
            <div class="header-right">
                <h1>Firma szkoleniowa</h1>
            </div>
        </header>


        <div class="content">

            <aside>
                <nav>
                    <ul>
                        <li><a href="index.html">Strona główna</a></li>
                        <li><a href="szkolenia.php">Szkolenia</a></li>
                    </ul>
                </nav>
            </aside>

            <main class="dashboard">
                <?php 
            
                include "db.php";

                $sql    = "SELECT data, temat FROM szkolenia";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) { 
                    $plik = fopen("harmonogram.txt", "w");

                    echo "<table border='1' cellpadding='5'>
                            <tr>
                                <th>Data</th>
                                <th>Temat</th> 
                            </tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["data"] . "</td>
                                <td>" . $row["temat"] . "</td>
                              </tr>";

                        $linia = $row["data"] . " " . $row["temat"] . PHP_EOL;
                        fwrite($plik, $linia);
                    }

                    echo "</table>";
                    fclose($plik);
                } else {
                    echo "<p>Brak wyników.</p>";
                }

                $conn->close();
                ?>
            </main>
        </div>

        <footer>
            <h2>Firma szkoleniowa, ul. Główna 1, 23-456 Warszawa</h2>
            <p>Autor: 12345</p>
        </footer>

    </div>
</body>
</html>
