<?php
echo '<pre>';
print_r($_GET);
$users = unserialize(file_get_contents(__DIR__ . '/data'));
$id = $_GET['nr'];
$minus = (int)$_GET['minus'];
foreach ($users as $user){
    if($user == $users[$id]){
        $users[$id]['suma'] = $users[$id]['suma'] - (int)$minus;
        break;
    }
}
file_put_contents(__DIR__ . '/data', serialize($users));
header('Location: http://localhost/manodarbai/testing/Bank/saskaita.php?nr='.$id);