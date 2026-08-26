<?php
$page = $_GET['page'] ?? null;

$pages = [
    'kwerenda1' => 'zrzut1.png',
    'kwerenda2' => 'zrzut2.png',
    'kwerenda3' => 'zrzut3.png',
    'kwerenda4' => 'zrzut4.png',
];

if ($page === null) {
 
    ?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>PIEKARNIA</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- blok nawigacyjny -->
 
    <nav>
		<a href="index.php?page=kwerenda1">KWERENDA1</a>
		<a href="index.php?page=kwerenda2">KWERENDA2</a>
		<a href="index.php?page=kwerenda3">KWERENDA3</a>
		<a href="index.php?page=kwerenda4">KWERENDA4</a>
    </nav>

    <!-- blok nagłówkowy -->
    <header>
        <h1>WITAMY</h1>
        <h4>NA STRONIE PIEKARNI</h4>
        <p>
            W naszej piekarni znajdziesz szeroki wybór pieczywa: pszenne, żytnie, mieszane oraz wyroby cukiernicze.
        </p>
    </header>

    <!-- blok główny -->
    <main>
        <h4>Wybierz rodzaj wypieków:</h4>
        <form method="post" action="piekarnia.php">
            <select name="rodzaj">
                <?php
                // Skrypt 1: lista rozwijana
                $conn = mysqli_connect("localhost", "root", "", "piekarnia");
                $sql = "SELECT DISTINCT Rodzaj FROM wyroby ORDER BY Rodzaj DESC";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='".$row['Rodzaj']."'>".$row['Rodzaj']."</option>";
                }
                ?>
            </select>
            <input type="submit" value="Wybierz">
        </form>

        <table>
            <tr>
                <th>Rodzaj</th>
                <th>Nazwa</th>
                <th>Gramatura</th>
                <th>Cena</th>
            </tr>
            <?php
            // Skrypt 2: tabela z danymi
            if (isset($_POST['rodzaj'])) {
                $rodzaj = $_POST['rodzaj'];
                $sql2 = "SELECT Rodzaj, Nazwa, Gramatura, Cena FROM wyroby WHERE Rodzaj='$rodzaj'";
                $res2 = mysqli_query($conn, $sql2);
                while ($w = mysqli_fetch_assoc($res2)) {
                    echo "<tr>
                        <td>".$w['Rodzaj']."</td>
                        <td>".$w['Nazwa']."</td>
                        <td>".$w['Gramatura']."</td>
                        <td>".$w['Cena']."</td>
                    </tr>";
                }
            }
            mysqli_close($conn);
            ?>
        </table>
    </main>

    <!-- blok stopki -->
    <footer>
        <p>AUTOR: 123456</p>
        <p>Data: 21.09.2025</p>
    </footer>

</body>
</html>
   <?php
} elseif (isset($pages[$page])) {

    echo "<img src='{$pages[$page]}' alt='{$page}'>";
} else {

    http_response_code(404);
    include '404.php';
}