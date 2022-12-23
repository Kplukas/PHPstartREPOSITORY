<?php 
$nr = $_GET['nr'];
$users = unserialize(file_get_contents(__DIR__ . '/data'));
$user = $users[$nr];
file_put_contents(__DIR__ . '/data', serialize($users));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sąskaita Nr.: <?= $nr ?></title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <img class="bank" src="./img/bank1.png" alt="bank">
        <iframe class="clock" src="https://free.timeanddate.com/clock/i8n7u4iy/n529/tllt22/fn15/fcfff/tct/pct/ftb/bas2/bacfff/pa5" frameborder="0" width="65" height="30" allowtransparency="true"></iframe>
        <nav class="menu">
            <a class ="menu-link" href="http://localhost/manodarbai/testing/Bank/saskaitos.php">Sąskaitų sąrašas</a>
            <a class ="menu-link"  href="http://localhost/manodarbai/testing/Bank/newsaskaita.php">Naujos sąskaitos kūrimas</a>
        </nav>
    </header>
    <main>
        <h2 class="useris-saskaita"><?= $user['kodas'] ?></h2>
        <div class="useris-col1">
            <h3 class="useris"><?= $user['vardas'] ?> <?= $user['pavarde'] ?></h3>
            <h3 class="useris">Lėšos:     <span class="useris-suma"><?= $user['suma'] ?> &euro;</span></h3>
            <form class="useris" action="http://localhost/manodarbai/testing/Bank/add.php">
                <label for="suma">Pridedama suma:</label>
                <input class="input-user" type="text" name="plus">
                <input type="hidden" name="nr" value="<?= $nr ?>">
                <button type="submit" class="btn-user">Pridėti</button>
            </form>
            <form class="useris" action="http://localhost/manodarbai/testing/Bank/minus.php">
                <label for="suma">Minusuojama suma:</label>
                <input class="input-user" type="text" name="minus">
                <input type="hidden" name="nr" value="<?= $nr ?>">
                <button type="submit" class="btn-user">Sumažinti</button>
            </form>
            <?php if (isset($_GET['error'])) :?>
                <h3>Sąskaitos likutis negali būti mažesnis už 0 eur.</h3>
            <?php endif ?>
        </div>
    </main>
    <footer>
        <div class="div1">
            <h2 class="h-citata">Dienos citata:</h2>
            <p class="citata">Jeigu bankas ne mūsų - tai ne bankas.</p>
        </div>
        <div class="div2">
            <h2 class="citata">Darbo laikas:</h2>
            <p class="citata">I-V: 8:00-19:00</p>
            <p class="citata">VI-VII: 6:00-24:00</p>
        </div>
    </footer>
</body>
</html>