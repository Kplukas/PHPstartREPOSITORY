<?php
// 1. a.
$str = '';
$div1 = '<p style="font-size: 10px;">';
$div2 = '</p>';
while (strlen($str) < 400){
    $str .= '*';
};
echo $div1, $str, $div2;
// 1. b.
$str2 = '';
 while (strlen($str2) < 428){
    $str2 .= '*';
    if (strlen($str2) == 50 || strlen($str2) == 104 || strlen($str2) == 158 || strlen($str2) == 212 || strlen($str2) == 266 || strlen($str2) == 320 || strlen($str2) == 374){
        $str2 .= '<br>';
    }
};
echo $str2;