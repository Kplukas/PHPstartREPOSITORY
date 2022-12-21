<?php
echo '<pre>';
print_r($_GET);
$users = unserialize(file_get_contents(__DIR__ . '/data'));

$id = $_GET['nr'];
$plus = (int)$_GET['plus'];

foreach ($users as $user){
    if($user == $users[$id]){
        (int)$user['suma'] += $plus;
        break;
    }
}

file_put_contents(__DIR__ . '/data', serialize($users));

header('Location: http://localhost/manodarbai/testing/Bank/saskaita.php?nr='.$id);
