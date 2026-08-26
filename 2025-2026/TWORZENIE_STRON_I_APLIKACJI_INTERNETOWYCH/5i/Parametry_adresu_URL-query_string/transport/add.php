<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "transport";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $nazwa = $_POST['nazwa'];
    $typ_pojazdu = $_POST['typ_pojazdu'];
    $marka = $_POST['marka'];
    
    $stmt = $pdo->prepare("INSERT INTO pojazdy (nazwa, typ_pojazdu, marka) VALUES (?, ?, ?)");
    $stmt->execute([$nazwa, $typ_pojazdu, $marka]);
    
    header("Location: index.php?success=1");
    exit();
} catch(PDOException $e) {
    die("Błąd: " . $e->getMessage());
}
?>