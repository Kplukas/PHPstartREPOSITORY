<?php 
if (file_exists(__DIR__.'/data')) {
    $user = unserialize(file_get_contents(__DIR__ . '/data'));
    if (isset($user)){
        $error = 1;
    } else {
        $error = 0;
    }
} else {
    if ((__DIR__.'/data'))
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
</head>
<body>
    <nav>
        <a href="http://localhost/manodarbai/testing/Bank/saskaitos.php">Sąskaitų sąrašas</a>
        <a href="http://localhost/manodarbai/testing/Bank/newsaskaita.php">Naujos sąskaitos kūrimas</a>
    </nav>
    <?php if (isset($_GET['deleted'])) : ?>
        <h2>Sąskaita <?= $_GET['sk']?> ištrinta</h2>
        <h4>Ištrintas vartotojas: <?= $_GET['v']?> <?= $_GET['p']?>. *********<?= $_GET['k']?></h4>
    <?php endif ?>
    <?php if ($error == 0) : ?>
    <ul>
        <?php foreach (unserialize(file_get_contents(__DIR__ . '/data')) as $user) : ?>
            <li>
                <span><?= $user['vardas'] ?> <?= $user['pavarde'] ?> IBAN: <?= $user['kodas'] ?> Likutis: <?= $user['suma'] ?></span>
                <?php if ($user['suma'] == 0) : ?>
                <form action="http://localhost/manodarbai/testing/Bank/trinti.php?id=<?= $user['nr'] ?>" method="post">
                    <button type="submit">Delete</button>
                </form>
                <?php else : ?>
                    <button type="button" disabled>Delete</button>
                    <span>Sąskaitos trinti negalima (yra lėšų)</span>
                <?php endif ?>
                <form action="http://localhost/manodarbai/testing/Bank/saskaita.php?nr=<?= $user['nr'] ?>" method="post">
                    <button type="submit">Apžiūrėti sąskaitą.</button>
                </form>
            </li>
        <?php endforeach ?>
    </ul>
    <?php elseif ($error == 1) : ?>
        <h2>Aktyvių sąskaitų nėra.</h2>
        <p>Keliaukite į <a href="http://localhost/manodarbai/testing/Bank/newsaskaita.php">Naujos sąskaitos kūrimas</a> naujos sąskaitos sukūrimui.</p>
    <?php endif ?>
</body>
</html>