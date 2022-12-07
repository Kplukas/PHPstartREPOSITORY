<?php
// 1.
$a = 'Vardis';
$b = 'Pavardis';
if (mb_strlen($a) > mb_strlen($b)){
    echo $a;
} else {
    echo $b;
}
// 2.
echo '<br>';
$a = 'Vardis';
$b = 'Pavardis';
echo strtoupper($a),' ', strtolower($b);
// 3.
echo '<br>';
$c = $a.$b;
echo $c;
// 4.
echo '<br>';
echo mb_substr($a, -3), mb_substr($b, -3);
// 5.
echo '<br>', '5';
$d = 'An American in Paris';
$d = str_ireplace('a', '*', $d);
echo $d;
//6.
echo '<br>';
$e = 'An American in Paris';
$re = '/a/mi';
echo preg_match_all($re, $e, $matches, PREG_SET_ORDER, 0);
//7.
echo '<br>';
$f = 'An American in Paris';
$f = str_ireplace('a', '', $f);
$f = str_ireplace('e', '', $f);
$f = str_ireplace('i', '', $f);
$f = str_ireplace('u', '', $f);
$f = str_ireplace('o', '', $f);
echo $f;
echo '<br>';
$g = "Breakfast at Tiffany's";
$g2 = preg_replace('#[aeiou\s]+#i', '', $g);
echo $g2;
echo '<br>';
$h = '2001: A Space Odyssey';
$h2 = preg_replace('#[aeiou\s]+#i', '', $h);
$j = "It's a Wonderful Life";
$j2 = preg_replace('#[aeiou\s]+#i', '', $j);
echo $h2, '------', $j2;
// 8.
echo '<br>';
$str = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
$epi = mb_substr($str, 19, 3);
echo $str, '--- episode-', $epi;