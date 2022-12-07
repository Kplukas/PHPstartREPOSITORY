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
echo '<br>';
$d = str_ireplace('a', '*', 'An American in Paris');
echo $d;
//6.
echo '<br>';
$e = 'An American in Paris';
