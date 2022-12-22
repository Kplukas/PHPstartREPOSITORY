<?php
session_start();
if (!file_exists(__DIR__ . '/data')){
    $arr = [];
} else {
    $arr = unserialize(file_get_contents(__DIR__ . '/data'));
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if( isset($_POST['vardas']) && isset($_POST['pavarde']) && isset($_POST['asmenskodas'])){
        foreach ($arr as $user) {
            if ($_POST['asmenskodas'] == $user['asmenskodas']){
                $sukurta = 'Šis asmens kodas jau naudojamas.';
                $error = 1;
                break;
            } else {
                $error = 0;
            }
        }
        if ($error == 0) {
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
    }
    header('Location: http://localhost/manodarbai/testing/Bank/newsaskaita.php');
    $_SESSION['sukurta'] = $sukurta;
    die;
}
$sukurta = $_SESSION['sukurta'] ?? 'Sukurkite sąskaitą.';
unset($_SESSION['sukurta']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nauja sąskaita</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <img class="bank" src="./img/bank1.png" alt="bank">
        <nav class="menu">
            <a class ="menu-link" href="http://localhost/manodarbai/testing/Bank/saskaitos.php">Sąskaitų sąrašas</a>
            <a class ="menu-link"  href="http://localhost/manodarbai/testing/Bank/newsaskaita.php">Naujos sąskaitos kūrimas</a>
        </nav>
    </header>
    <main class="msk">
        <h2 class="skurimas"><?= $sukurta ?></h2>
        <form class="form-holder1" action="http://localhost/manodarbai/testing/Bank/newsaskaita.php" method="post">
            <div class="form">
                <label class="block label1" for="vardas">Kliento vardas:</label>
                <input class="block input1"  type="text" id="vardas" name="vardas" minlength="4" required>
            </div>
            <div class="form">
                <label class="block label1"  for="pavarde">Kliento pavardė:</label>
                <input class="block input1"  type="text" id="pavarde" name="pavarde" minlength="4" required>
            </div>
            <div class="form">
                <label class="block label1"  for="asmenskodas">Asmens kodas:</label>
                <input class="block input1"  type="text" id="asmenskodas" name="asmenskodas" minlength="11" required>
            </div>
            <button class="block btn1"  type="submit">sukurti</button>
        </form>
    </main>
    <footer>
        <div>

        </div>
        <div>
            <iframe src="https://free.timeanddate.com/clock/i8n7u4iy/n529/tllt22/fn15/fcfff/tct/pct/ftb/bas2/bacfff/pa5" frameborder="0" width="65" height="30" allowtransparency="true"></iframe>
        </div>
    </footer>
</body>
</html>