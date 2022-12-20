<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if( isset($_POST['vardas']) && isset($_POST['pavarde']) && isset($_POST['asmenskodas'])){
        $sukurta = 'Sukurta.';
    }
    header('Location: http://localhost/manodarbai/testing/Bankas/newsaskaita.php');
    $_SESSION['sukurta'] = $sukurta;
    die;
}
$sukurta = $_SESSION['sukurta'] ?? 'Sukurkite saskaita.';
unset($_SESSION['sukurta']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nauja sąskaita</title>
</head>
<body>
    <h2><?= $sukurta ?></h2>
    <form action="http://localhost/manodarbai/testing/Bankas/newsaskaita.php" method="post">
        <label for="vardas">Vardas:</label>
        <input type="text" id="vardas" name="vardas">
        <label for="pavarde">Pavarde:</label>
        <input type="text" id="pavarde" name="pavarde">
        <label for="asmenskodas">Asmens kodas:</label>
        <input type="text" id="asmenskodas" name="asmenskodas">
        <button type="submit">sukurti</button>
    </form>
</body>
</html>