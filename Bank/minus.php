<?php
echo '<pre>';
print_r($_GET);
$users = unserialize(file_get_contents(__DIR__ . '/data'));
$id = $_GET['nr'];
$minus = (int)$_GET['minus'];
$error = 0;
foreach ($users as $user){
    if($user == $users[$id]){
        if(($users[$id]['suma'] - (int)$minus) < 0 ){
            $error = 1;
            break;
        } else {
            $users[$id]['suma'] = $users[$id]['suma'] - (int)$minus;
            break; 
        }
    }
}
if ($error == 1){
    file_put_contents(__DIR__ . '/data', serialize($users));
    header('Location: http://localhost/manodarbai/testing/Bank/saskaita.php?nr='.$id.'&error=1');    
} else {
    file_put_contents(__DIR__ . '/data', serialize($users));
    header('Location: http://localhost/manodarbai/testing/Bank/saskaita.php?nr='.$id); 
}