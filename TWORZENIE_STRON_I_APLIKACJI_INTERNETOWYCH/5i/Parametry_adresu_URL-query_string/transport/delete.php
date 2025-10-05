<?php
$id = $_GET['id'] ?? 0;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "transport";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $pdo->prepare("DELETE FROM pojazdy WHERE id=?");
    $stmt->execute([$id]);
    
    header("Location: index.php?success=delete");
    exit();
} catch(PDOException $e) {
    die("Błąd: " . $e->getMessage());
}
?>