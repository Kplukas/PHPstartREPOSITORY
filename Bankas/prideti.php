<?php
session_start();
if (!file_exists(__DIR__ . '/data')){
    $arr = [];
} else {
    $arr = unserialize(file_get_contents(__DIR__ . '/data'));
}
echo '<pre>';
print_r($arr);
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo '<pre>';
    print_r($_POST);
    if (isset($_POST['nr'])){
        if(number_format($_POST['nr']) == $arr){
            $nr = $arr['nr'];
            $vardas = $arr['vardas'];
            $pavarde = $arr['pavarde'];
            $suma = $arr['suma'];
            $yra = 1;
        } else {
            $yra = 0;
        }
    }

    $_SESSION['yra'] = $yra;
    $_SESSION['nr'] = $nr;
    $_SESSION['vardas'] = $vardas;
    $_SESSION['pavarde'] = $pavarde;
    $_SESSION['suma'] = $suma;
    echo '<pre>';
    print_r($_SESSION);
    header('Location: http://localhost/manodarbai/testing/Bankas/prideti.php');
    die;
}
$yra = $_SESSION['yra'] ?? 0;
$nr = $_SESSION['nr'] ?? 'Ieškokite sąskaitos.';
$vardas = $_SESSION['vardas'] ?? 'Ieškokite sąskaitos.';
$pavarde = $_SESSION['pavarde'] ?? '';
$suma = $_SESSION['suma'] ?? 'Ieškokite sąskaitos.';

echo '<pre>';
print_r($_SESSION);
unset($_SESSION['vardas']);
unset($_SESSION['pavarde']);
unset($_SESSION['suma']);
unset($_SESSION['yra']);
unset($_SESSION['nr']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pridėti prie sąskaitos</title>
</head>
<body>
    <form action="http://localhost/manodarbai/testing/Bankas/prideti.php" method="post">
        <label for="saskaitos numeris">Sąskaitos numeris:</label>
        <input type="text" id="nr" name="nr">
        <button type="submit">Ieškoti</button>
    </form>
    <?php if ($yra == 0) : ?>
        <h2>Įveskite sąskaitos numerį</h2>
    <?php elseif ($yra == 1) : ?>
        <h2>Sąskaita: <?= $nr ?> </h2>
        <h3>Priklauso: <?= $vardas ?> <?= $pavarde ?> </h3>
        <h2>Likutis: <?= $suma ?></h2>
        <p>Pridėti lėšų +</p>
        <input type="text">
    <?php endif ?>
    <nav>
        <a href="http://localhost/manodarbai/testing/Bankas/saskaitos.php">Sąskaitų sąrašas</a>
        <a href="http://localhost/manodarbai/testing/Bankas/newsaskaita.php">Nauja sąskaita</a>
        <a href="http://localhost/manodarbai/testing/Bankas/atimti.php">Sumažinti sąskaita</a>
    </nav>
</body>
</html>