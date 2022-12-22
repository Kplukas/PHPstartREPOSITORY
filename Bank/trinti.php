<?php

$users = unserialize(file_get_contents(__DIR__ . '/data'));

$id = (int)$_GET['id'];

foreach ($users as $user){
    if($user == $users[$id]){
        $sk = $user['kodas'];
        $v = $user['vardas'];
        $p = $user['pavarde'][0];
        $k = strval($user['asmens kodas'])[9].strval($user['asmens kodas'])[10];
        unset($users[$id]);
        break;
    }
}

file_put_contents(__DIR__ . '/data', serialize($users));

header('Location: http://localhost/manodarbai/testing/Bank/saskaitos.php?deleted=yes&k='.$k.'&v='.$v.'&p='.$p.'&sk='.$sk);

