<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach (unserialize(file_get_contents(__DIR__ . '/data')) as $user) : ?>
            <li>
                <span><?= $user['vardas'] ?> <?= $user['pavarde'] ?> Sąskaitos kodas: <?= $user['nr'] ?> Likutis: <?= $user['suma'] ?></span>
                <form action="http://localhost/manodarbai/testing/Bank/trinti.php?id=<?= $user['nr'] ?>" method="post">
                    <button type="submit">Delete</button>
                </form>
                <form action="http://localhost/manodarbai/testing/Bank/saskaita.php?nr=<?= $user['nr'] ?>" method="post">
                    <button type="submit">Apžiūrėti sąskaitą.</button>
                </form>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>