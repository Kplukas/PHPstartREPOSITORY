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
// 2.
echo '<br>';
$sk = '';
$kartai = 1;
$didesni = 0;
while ($kartai < 300) {
    $sk = rand(0, 300);
    $color = 'black';
    if ($sk > 275) {
        $color = 'red';
    } else {
        $color = 'black';
    }
    if ($sk > 150) {
    ++$didesni;
    }
    echo '<i style=" width: fit-content; block-size: fit-content; color:', $color, '">', $sk, ' <i/>';
    ++$kartai;
}
echo '<h2>Didesnių už 150 yra ', $didesni, '<h2/>';