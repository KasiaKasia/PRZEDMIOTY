<?php
$id = $_GET['id'] ?? 0;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "transport";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    if ($_POST) {
      
        $nazwa = $_POST['nazwa'];
        $typ_pojazdu = $_POST['typ_pojazdu'];
        $marka = $_POST['marka'];
        
        $stmt = $pdo->prepare("UPDATE pojazdy SET nazwa=?, typ_pojazdu=?, marka=? WHERE id=?");
        $stmt->execute([$nazwa, $typ_pojazdu, $marka, $id]);
        header("Location: index.php?success=edit");
        exit();
    }
     
    $stmt = $pdo->prepare("SELECT * FROM pojazdy WHERE id=?");
    $stmt->execute([$id]);
    $pojazd = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$pojazd) {
        die("Pojazd nie znaleziony.");
    }
} catch(PDOException $e) {
    die("Błąd: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Edytuj Pojazd</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .container {
            max-width: 600px;
        }
        h1 {
            text-align: left;
        }
        .btn {
            padding: 10px 15px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edytuj Pojazd</h1>
        <form method="POST">
            <div class="form-group">
                <label for="nazwa">Nazwa:</label>
                <input type="text" id="nazwa" name="nazwa" value="<?= htmlspecialchars($pojazd['nazwa']) ?>" required>
            </div>
            <div class="form-group">
                <label for="typ_pojazdu">Typ Pojazdu:</label>
                <input type="text" id="typ_pojazdu" name="typ_pojazdu" value="<?= htmlspecialchars($pojazd['typ_pojazdu']) ?>" required>
            </div>
            <div class="form-group">
                <label for="marka">Marka:</label>
                <input type="text" id="marka" name="marka" value="<?= htmlspecialchars($pojazd['marka']) ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Zapisz</button>
            <a href="index.php" class="btn btn-secondary">Anuluj</a>
        </form>
    </div>
</body>
</html>