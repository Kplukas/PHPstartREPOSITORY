<?php
session_start();
if (!file_exists(__DIR__ . '/data')){
    $arr = [];
} else {
    $arr = unserialize(file_get_contents(__DIR__ . '/data'));
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['nr'])){
        if($_POST['nr'] == $arr[$naujas]['nr']){
            $nr = $arr[$naujas]['nr'];
            $vardas = $arr[$naujas]['vardas'];
            $pavarde = $arr[$naujas]['pavarde'];
            $suma = $arr[$naujas]['suma'];
            $yra = true;
        } else {
            $yra = false;
        }
    }
    header('Location: http://localhost/manodarbai/testing/Bankas/prideti.php');
    $_SESSION['yra'] = $yra;
    $_SESSION['nr'] = $nr;
    $_SESSION['vardas'] = $vardas;
    $_SESSION['pavarde'] = $pavarde;
    $_SESSION['suma'] = $suma;
    die;
}
if(isset($_SESSION['yra'])){
    $yra = $_SESSION['yra'];
    $nr = $_SESSION['nr'];
    $vardas = $_SESSION['vardas'];
    $pavarde = $_SESSION['pavarde'];
    $suma = $_SESSION['suma'];
}
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
    <?php if ($yra = true) : ?>
        <h2>Sąskaita: <?= $nr ?> </h2>
        <h3>Priklauso: <?= $vardas ?> <?= $pavarde ?> </h3>
        <h2>Likutis: <?= $suma ?></h2>
        <p>Pridėti lėšų +</p>
        <input type="text">
    <?php else : ?>
        <h2>Įveskite sąskaitos numerį</h2>
    <?php endif ?>
    <nav>
        <a href="http://localhost/manodarbai/testing/Bankas/saskaitos.php">Sąskaitų sąrašas</a>
        <a href="http://localhost/manodarbai/testing/Bankas/newsaskaita.php">Nauja sąskaita</a>
        <a href="http://localhost/manodarbai/testing/Bankas/atimti.php">Sumažinti sąskaita</a>
    </nav>
</body>
</html>