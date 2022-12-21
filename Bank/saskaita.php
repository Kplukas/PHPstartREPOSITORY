<?php 
$nr = $_GET['nr'];
$users = unserialize(file_get_contents(__DIR__ . '/data'));
$user = $users[$nr];
echo '<pre>';
print_r($user);
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['plus'])){
        $_SESSION['plus'] = $_POST['plus'];
        die;
    }
}
$plus = 0;
if(isset($_SESSION['plus'])){
    $plus = $_SESSION['plus'];
    unset($_SESSION['plus']);
}
file_put_contents(__DIR__ . '/data', serialize($users));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sąskaita Nr.: <?= $nr ?></title>
</head>
<body>
    <h2><?= $user['vardas'] ?> <?= $user['pavarde'] ?></h2>
    <h3>Likutis: <?= $user['suma'] ?></h3>
    <form action="http://localhost/manodarbai/testing/Bank/add.php">
        <label for="suma">Pridedama suma:</label>
        <input type="text" name="plus">
        <input type="hidden" name="nr" value="<?= $nr ?>">
        <button type="submit">Pridėti</button>
    </form>
</body>
</html>