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