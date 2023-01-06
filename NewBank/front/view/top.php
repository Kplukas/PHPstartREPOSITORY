<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'Untitled Page' ?></title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <div>
            <img src="#" alt="logo">
            <iframe class="clock" src="https://free.timeanddate.com/clock/i8n7u4iy/n529/tllt22/fn15/fcfff/tct/pct/ftb/bas2/bacfff/pa5" frameborder="0" width="65" height="30" allowtransparency="true"></iframe>
        </div>
        <nav class="menu">
            <a class ="menu-link" href="<?= URL . 'titulinis/' ?>">Titulinis</a>
            <a class ="menu-link" href="<?= URL . 'saskaitos/create/' ?>">Nauja sąskaita</a>
            <a class ="menu-link" href="<?= URL . 'saskaitos/' ?>">Sąskaitų sąrašas</a>
        </nav>
    </header>