<?php
if (!file_exists(__DIR__ . '/data')){
    $arr = [];
} else {
    $arr = unserialize(file_get_contents(__DIR__ . '/data'));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sąskaitų sarašas</title>
</head>
<body>
    <h2>Sąskaitos:</h2>
    <ul>
    <?php foreach ($arr as $li) : ?>
        <li>
            <ul>
                <li>Vardas: <?= $li['vardas'] ?></li>
                <li>Pavardė: <?= $li['pavarde'] ?></li>
                <li>Asmens kodas: <?= $li['asmenskodas'] ?></li>
                <li>Sąskaitos numeris: <?= $li['nr'] ?></li>
                <li>Sąskaitos likutis: <?= $li['suma'] ?></li>
            </ul>
        </li>
    <?php endforeach ?>
    </ul>
    <nav>
        <a href="http://localhost/manodarbai/testing/Bankas/newsaskaita.php">Nauja sąskaita</a>
        <a href="http://localhost/manodarbai/testing/Bankas/prideti.php">Papildyti sąskaita</a>
        <a href="http://localhost/manodarbai/testing/Bankas/atimti.php">Sumažinti sąskaita</a>
    </nav>
</body>
</html>