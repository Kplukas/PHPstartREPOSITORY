<?php 
if (file_exists(__DIR__.'/data')) {
    $user = unserialize(file_get_contents(__DIR__ . '/data'));
    $error = 1;
    foreach ($user as $users) {
        if (is_array($users)) {
            $error = 0;
        } else {
            $error = 1;
        }
    }
} else {
    $error = 1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banko sąskaitos</title>
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
    <div style="display: flex; justify-content: center;">
        <main style="width: fit-content; display: inline-block;">
            <?php if (isset($_GET['deleted'])) : ?>
                <div class="list-istrinta">
                    <h2>Sąskaita <?= $_GET['sk']?> ištrinta</h2>
                    <h4>Ištrintas vartotojas: <?= $_GET['v']?> <?= $_GET['p']?>. *********<?= $_GET['k']?></h4>
                </div>
            <?php endif ?>
            <?php if ($error == 0) : ?>
            <h2 class="nera">Aktyvios sąskaitos:</h2>
            <ul class="list">
                <?php foreach (unserialize(file_get_contents(__DIR__ . '/data')) as $user) : ?>
                    <li  class="list-item">
                        <h4 class="list-name"><?= $user['vardas'] ?> <?= $user['pavarde'] ?></h4>
                        <p class="list-iban"><strong>IBAN:</strong> <?= $user['kodas'] ?></p>
                        <p class="list-iban" style="display: inline; float: left;"><strong>LĖŠOS:</strong> <p class="list-suma"><?= $user['suma'] ?> &euro;</p></p>
                        <?php if ($user['suma'] == 0) : ?>
                        <form action="http://localhost/manodarbai/testing/Bank/trinti.php?id=<?= $user['nr'] ?>" method="post">
                            <button type="submit" class="btn-list">Ištrinti sąskaitą</button>
                        </form>
                        <?php else : ?>
                            <button type="button" disabled class="btn-list" style="color: red;">Ištrinti sąskaitą <span style="font-size: 10px; color: black;">(yra lėšų)</span></button>
                        <?php endif ?>
                        <form action="http://localhost/manodarbai/testing/Bank/saskaita.php?nr=<?= $user['nr'] ?>" method="post">
                            <button type="submit" class="btn-list">Apžiūrėti sąskaitą.</button>
                        </form>
                    </li>
                <?php endforeach ?>
            </ul>
            <?php elseif ($error == 1) : ?>
                <h2 class="nera">Aktyvių sąskaitų nėra.</h2>
                <p class="nera-p">Keliaukite į <a class="nera-a" href="http://localhost/manodarbai/testing/Bank/newsaskaita.php">Naujos sąskaitos kūrimas</a> naujos sąskaitos sukūrimui.</p>
            <?php endif ?>
        </main>
    </div>
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