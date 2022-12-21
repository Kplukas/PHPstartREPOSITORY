<?php
session_start();
if (!file_exists(__DIR__ . '/data')){
    $arr = [];
} else {
    $arr = unserialize(file_get_contents(__DIR__ . '/data'));
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if( isset($_POST['vardas']) && isset($_POST['pavarde']) && isset($_POST['asmenskodas'])){
        $sukurta = 'Sukurta.';
        $naujas = [];
        $naujas['vardas'] = $_POST['vardas'];
        $naujas['pavarde'] = $_POST['pavarde'];
        $naujas['asmenskodas'] = $_POST['asmenskodas'];
        $naujas['nr'] = rand(10000, 99999);
        $naujas['kodas'] = 'LT'.'01'.'55555'.rand(10000000000,99999999999);
        $naujas['suma'] = 0;
        $arr[$naujas['nr']] = $naujas;
        file_put_contents(__DIR__ . '/data', serialize($arr));
    }
    header('Location: http://localhost/manodarbai/testing/Bank/newsaskaita.php');
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
    <nav>
        <a href="http://localhost/manodarbai/testing/Bank/saskaitos.php">Sąskaitų sąrašas</a>
        <a href="http://localhost/manodarbai/testing/Bank/newsaskaita.php">Naujos sąskaitos kūrimas</a>
    </nav>
    <h2><?= $sukurta ?></h2>
    <form action="http://localhost/manodarbai/testing/Bank/newsaskaita.php" method="post">
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