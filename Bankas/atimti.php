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
    <title>Atimti nuo sąskaitos</title>
</head>
<body>
    
    <nav>
        <a href="http://localhost/manodarbai/testing/Bankas/saskaitos.php">Sąskaitų sąrašas</a>
        <a href="http://localhost/manodarbai/testing/Bankas/newsaskaita.php">Nauja sąskaita</a>
        <a href="http://localhost/manodarbai/testing/Bankas/prideti.php">Papildyti sąskaita</a>
    </nav>
</body>
</html>