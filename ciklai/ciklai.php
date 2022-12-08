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
