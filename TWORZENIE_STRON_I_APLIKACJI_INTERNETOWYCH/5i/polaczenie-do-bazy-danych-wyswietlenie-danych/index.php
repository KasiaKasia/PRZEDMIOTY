<?php

echo "<h1>Witaj w moim pierwszym projekcie w PHP!</h1>";
echo "<p>Działa poprawnie, bo widzę ten tekst w przeglądarce 🎉</p>";


$imie = "Ania";
echo "<p>Twoje imię to: <b>$imie</b></p>";

echo "<p>Aktualna data i godzina: " . date("Y-m-d H:i:s") . "</p>";
  
$host = "localhost";
$user = "root";
$password = "";
$dbname = "test_1";
 
$conn = new mysqli($host, $user, $password, $dbname);
 
if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}
 
$sql = "SELECT id, imie, nazwisko, wiek, klasa FROM uczniowie";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    echo "<h2>Lista uczniów</h2>";
    echo "<table border='1' cellpadding='5'>
            <tr>
                <th>ID</th>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Wiek</th>
                <th>Klasa</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["imie"]."</td>
                <td>".$row["nazwisko"]."</td>
                <td>".$row["wiek"]."</td>
                <td>".$row["klasa"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Brak wyników.";
}
 
$conn->close();
?> 

