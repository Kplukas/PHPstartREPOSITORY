<?php

$users = unserialize(file_get_contents(__DIR__ . '/data'));

$id = (int)$_GET['id'];

foreach ($users as $user){
    if($user == $users[$id]){
        unset($users[$id]);
        break;
    }
}

file_put_contents(__DIR__ . '/data', serialize($users));

header('Location: http://localhost/manodarbai/testing/Bank/saskaitos.php');

