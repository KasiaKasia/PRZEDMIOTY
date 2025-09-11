<?php
$host     = "localhost";
$user     = "root";
$password = "";
$dbname   = "firma";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}
?>
