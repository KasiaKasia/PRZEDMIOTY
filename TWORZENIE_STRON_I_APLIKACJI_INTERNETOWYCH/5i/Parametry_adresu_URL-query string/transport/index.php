 
<?php
  
$servername = "localhost";
$username = "root";   
$password = ""; 
$dbname = "transport";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
 
    $stmt = $pdo->query("SELECT * FROM pojazdy ORDER BY id ASC");
    $pojazdy = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    die("Błąd połączenia: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Pojazdów</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        dialog {
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.3);
            padding: 0;
            max-width: 400px;
            width: 90%;
        }
        dialog::backdrop {
            background: rgba(0,0,0,0.5);
        }
        .modal-header {
            background-color: #007bff;
            color: white;
            padding: 15px;
            border-radius: 8px 8px 0 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .close-btn {
            background: none;
            border: none;
            color: white;
            font-size: 20px;
            cursor: pointer;
        }
        .modal-body {
            padding: 20px;
        }
        .modal-footer {
            padding: 15px 20px;
            background-color: #f8f9fa;
            border-top: 1px solid #dee2e6;
            border-radius: 0 0 8px 8px;
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            
        }
        @media (max-width: 768px) {
            table, th, td {
                font-size: 12px;
                padding: 8px;
                 
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lista Pojazdów</h1>
         
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nazwa</th>
                    <th>Typ Pojazdu</th>
                    <th>Marka</th>
                    <th>Akcje</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pojazdy as $pojazd): ?>
                <tr>
                    <td><?= htmlspecialchars($pojazd['id']) ?></td>
                    <td><?= htmlspecialchars($pojazd['nazwa']) ?></td>
                    <td><?= htmlspecialchars($pojazd['typ_pojazdu']) ?></td>
                    <td><?= htmlspecialchars($pojazd['marka']) ?></td>
                    <td>
                        <a href="edit.php?id=<?= $pojazd['id'] ?>" class="btn btn-primary">Edytuj</a>
                        <a href="delete.php?id=<?= $pojazd['id'] ?>" class="btn btn-danger" onclick="return confirm('Czy na pewno usunąć?')">Usuń</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
         
        <button class="btn btn-success" onclick="openModal()">Dodaj Pojazd</button>
    </div>
 
    <dialog id="addModal">
        <div class="modal-header">
            <h3>Dodaj Nowy Pojazd</h3>
            <button class="close-btn" onclick="closeModal()">&times;</button>
        </div>
        <form action="add.php" method="POST">
            <div class="modal-body">
                <div class="form-group">
                    <label for="nazwa">Nazwa:</label>
                    <input type="text" id="nazwa" name="nazwa" required>
                </div>
                <div class="form-group">
                    <label for="typ_pojazdu">Typ Pojazdu:</label>
                    <input type="text" id="typ_pojazdu" name="typ_pojazdu" required>
                </div>
                <div class="form-group">
                    <label for="marka">Marka:</label>
                    <input type="text" id="marka" name="marka" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="closeModal()">Anuluj</button>
                <button type="submit" class="btn btn-primary">Dodaj</button>
            </div>
        </form>
    </dialog>

    <script>
        function openModal() {
            document.getElementById('addModal').showModal();
        }
        function closeModal() {
            document.getElementById('addModal').close();
        }
    </script>
</body>
</html>