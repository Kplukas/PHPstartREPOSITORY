<?php
// 1.
$vardas = 'Kristupas';
$pavarde = 'Plukas';
$gimMet = '1999';
$dabMet = '2022';
$manMet = $dabMet - $gimMet;
echo 'Aš esu ', $vardas,' ', $pavarde ,'. Man yra ' ,$manMet ,' metai.' ;
// 2.
echo '<br>';
$a = rand(0, 4);
$b = rand(0, 4);
if (!($a * $b)) {
    echo 'Dalyba negalima nes 0';
} elseif ($a > $b) {
    echo round($a / $b, 2);
} else {
    echo round($b / $a, 2);
}
// 3.
echo '<br>';
$pirm = rand(0, 25);
$antr = rand(0, 25);
$trec = rand(0, 25);
echo 'skaiciai: ', $pirm,' ', $antr,' ', $trec;
echo '<br>';
echo 'vidurinis skaicius:';
if($pirm > $antr && $pirm < $trec){
    echo $pirm;
} else if($pirm < $antr && $pirm > $trec){
    echo $pirm;
} else if($pirm < $antr && $antr < $trec){
    echo $antr;
} else if($pirm > $antr && $antr > $trec){
    echo $antr;
} else if($pirm > $trec && $antr < $trec){
    echo $trec;
} else if($pirm < $trec && $antr > $trec){
    echo $trec;
} else {
    echo 'nerandu vidurinio';
}
// 4.
echo '<br>';
$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);
echo 'krastines: ', $a,' ', $b,' ', $c;
echo '<br>';
if ($a + $b > $c && $a + $c > $b && $c + $b > $a) {
    echo 'trikampis gali egzistuoti';
} else {
    echo ' trikampis negali egzistuoti';
}
// 5.
echo '<br>';
$d = rand(0, 2);
$e = rand(0, 2);
$f = rand(0, 2);
$g = rand(0, 2);
echo $d,',', $e,',', $f,',', $g;
echo '<br>';
$suma = $d + $e + $f + $g;
if ($suma == 8) {
    echo 'yra 4 dvejetai';
} else if ($suma == 0) {
    echo 'nera dvejetu';
} else if ($d == 2 && $d == $e && $d != $f && $d != $g) {
    echo 'yra 2 dvejetai';
} else if ($d == 2 && $d == $f && $d != $e && $d != $g) {
    echo 'yra 2 dvejetai';
} else if ($d == 2 && $d == $g && $d != $e && $d != $f) {
    echo 'yra 2 dvejetai';
} else if ($e == 2 && $e == $f && $e != $d && $e != $g) {
    echo 'yra 2 dvejetai';
} else if ($e == 2 && $e == $g && $e != $d && $e != $f) {
    echo 'yra 2 dvejetai';
} else if ($f == 2 && $f == $g && $f != $d && $f != $e) {
    echo 'yra 2 dvejetai';
} else if ($d == 2 && $d == $e && $d == $f && $d != $g) {
    echo 'yra 3 dvejetai';
} else if ($d == 2 && $d == $e && $d == $g && $d != $f) {
    echo 'yra 3 dvejetai';
} else if ($d == 2 && $d == $f && $d == $g && $d != $e) {
    echo 'yra 3 dvejetai';
} else if ($e == 2 && $e == $d && $e == $f && $e != $g) {
    echo 'yra 3 dvejetai';
} else if ($e == 2 && $e == $g && $e == $f && $e != $d) {
    echo 'yra 3 dvejetai';
} else if ($e == 2 && $e == $d && $e == $g && $e != $f) {
    echo 'yra 3 dvejetai';
} else if ($f == 2 && $f == $d && $f == $e && $f != $g) {
    echo 'yra 3 dvejetai';
} else if ($f == 2 && $f == $g && $f == $e && $f != $d) {
    echo 'yra 3 dvejetai';
} else if ($f == 2 && $f == $d && $f == $g && $f != $e) {
    echo 'yra 3 dvejetai';
} else if ($d == 2 && $d != $e && $d != $f && $d != $g ) {
    echo 'yra 1 dvejetas';
} else if ($e == 2 && $e != $d && $e != $f && $e != $g ) {
    echo 'yra 1 dvejetas';
} else if ($f == 2 && $f != $e && $f != $d && $f != $g ) {
    echo 'yra 1 dvejetas';
} else if ($g == 2 && $g != $e && $g != $f && $g != $d ) {
    echo 'yra 1 dvejetas';
} else {
    echo 'nera dvejetu';
}
// 6.
$h = rand(1, 6);
echo '<h', $h,'>', $h,'</h',$h,'>';
// 7.
echo '<br>';
$viens = rand(-10, 10);
$du = rand(-10, 10);
$trys = rand(-10, 10);
if ($viens > 0) {
    $colorV = 'green';
} else if ($viens < 0) {
    $colorV = 'blue';
} else if ($viens == 0) {
    $colorV = 'red';
}
if ($du > 0) {
    $colorD = 'green';
} else if ($du < 0) {
    $colorD = 'blue';
} else if ($du == 0) {
    $colorD = 'red';
}
if ($trys > 0) {
    $colorT = 'green';
} else if ($trys < 0) {
    $colorT = 'blue';
} else if ($trys == 0) {
    $colorT = 'red';
}
echo '<h1 style=color:', $colorV,'>', $viens, '</h1>','<h1 style=color:', $colorD,'>', $du, '</h1>','<h1 style=color:', $colorT,'>', $trys, '</h1>';
// 8.
echo '<br>';
$zvakes = rand(5, 3000);
if($zvakes <= 1000){
    $suma = $zvakes;
    echo 'zvakiu:', $zvakes, ' suma:', $suma;
} else if($zvakes > 1000 && $zvakes <= 2000){
    $suma = $zvakes - ($zvakes / 100 * 3);
    echo 'zvakiu:', $zvakes, ' suma:', $suma;
} else if($zvakes > 2000){
    $suma = $zvakes - ($zvakes / 100 * 4);
    echo 'zvakiu:', $zvakes, ' suma:', $suma;
}
// 9.
echo '<br>';
$a = rand(0, 100);
$b = rand(0, 100);
$c = rand(0, 100);
$vidurk = round((($a + $b + $c) / 3), 0);
echo 'skaiciai:', $a,',',$b,',',$c;
echo '<br>';
echo 'vidurkis:', $vidurk;
echo '<br>';
if ($a >= 10 && $a <= 90) {
    if ($b >= 10 && $b <= 90 && ($c >= 10 && $c <= 90)){
        $vidurk2 = $vidurk;
    } else if ($b < 10 && ($c >= 10 && $c <= 90) || ($b > 90 && ($c >= 10 && $c <= 90))){
        $vidurk2 = round((($a + $c) / 2), 0);
    } else if ($c < 10 && ($b >= 10 && $b <= 90) || ($c > 90 && ($b >= 10 && $b <= 90))){
        $vidurk2 = round((($a + $b) / 2), 0);
    } else if ($c < 10 || $c > 90 && ($b < 10 || $b > 90)){
        $vidurk2 = $a;
    }
}
if ($b >= 10 && $b <= 90) {
    if ($a >= 10 && $a <= 90 && ($c >= 10 && $c <= 90)){
        $vidurk2 = $vidurk;
    } else if ($a < 10 && ($c >= 10 && $c <= 90) || ($a > 90 && ($c >= 10 && $c <= 90))){
        $vidurk2 = round((($b + $c) / 2), 0);
    } else if ($c < 10 && ($a >= 10 && $a <= 90) || ($c > 90 && ($a >= 10 && $a <= 90))){
        $vidurk2 = round((($a + $b) / 2), 0);
    } else if ($c < 10 || $c > 90 && ($a < 10 || $a > 90)){
        $vidurk2 = $b;
    }
}
if ($c >= 10 && $c <= 90) {
    if ($a >= 10 && $a <= 90 && ($b >= 10 && $b <= 90)){
        $vidurk2 = $vidurk;
    } else if ($a < 10 && ($b >= 10 && $b <= 90) || ($a > 90 && ($b >= 10 && $b <= 90))){
        $vidurk2 = round((($c + $b) / 2), 0);
    } else if ($b < 10 && ($a >= 10 && $a <= 90) || ($b > 90 && ($a >= 10 && $a <= 90))){
        $vidurk2 = round((($a + $c) / 2), 0);
    } else if ($a < 10 || $a > 90 && ($b < 10 || $b > 90)){
        $vidurk2 = $c;
    }
}
echo 'skaiciu vidurkis(jeigu skaicius >=10 arba <= 90):', $vidurk2;
// 10.
echo '<br>';
$valand = rand(0, 12);
$minut = rand(0, 59);
$sec = rand(0, 59);
echo 'Laikordis:', $valand, 'h ', $minut, 'min ', $sec, 's .';
$extra = rand(0, 300);
echo '<br>';
echo 'extra sekundes:', $extra;
echo '<br>';
if ($extra <= 60) {
    $sec2 = $sec + $extra;
    if ($sec2 >= 60) {
        $sec2 = $sec + $extra -60;
        $minut2 = $minut + 1;
        if ($minut2 >= 60) {
            $minut2 = $minut + 1 - 60;
            $valand2 = $valand +1;
        } else {
            $valand2 = $valand;
        }
    } else {
        $minut2 = $minut;
        $valand2 = $valand;
    }
} else if ($extra > 60 && $extra <= 120) {
    $sec2 = $sec + $extra;
    if ($sec2 >= 60 && $sec2 < 120) {
        $sec2 = $sec + $extra -60;
        $minut2 = $minut + 1;
        if ($minut2 >= 60) {
            $minut2 = $minut + 1 - 60;
            $valand2 = $valand +1;
        } else {
            $valand2 = $valand;
        }
    } else if ($sec2 >= 120) {
        $sec2 = $sec + $extra -120;
        $minut2 = $minut + 2;
        if ($minut2 >= 60) {
            $minut2 = $minut + 1 - 60;
            $valand2 = $valand +1;
        } else {
            $valand2 = $valand;
        }
    } else {
        $minut2 = $minut;
        $valand2 = $valand;
    }
} else if ($extra > 120 && $extra <= 180) {
    $sec2 = $sec + $extra;
    if ($sec2 >= 120 && $sec2 < 180) {
        $sec2 = $sec + $extra -120;
        $minut2 = $minut + 2;
        if ($minut2 >= 60) {
            $minut2 = $minut + 1 - 60;
            $valand2 = $valand +1;
        }
        else {
            $valand2 = $valand;
        }
    } else if ($sec2 >= 180) {
        $sec2 = $sec + $extra -180;
        $minut2 = $minut + 3;
        if ($minut2 >= 60) {
            $minut2 = $minut + 1 - 60;
            $valand2 = $valand +1;
        } else {
            $valand2 = $valand;
        }
    } else {
        $minut2 = $minut;
        $valand2 = $valand;
    }
} else if ($extra > 180 && $extra <= 240) {
    $sec2 = $sec + $extra;
    if ($sec2 >= 180 && $sec2 < 240) {
        $sec2 = $sec + $extra -180;
        $minut2 = $minut + 3;
        if ($minut2 >= 60) {
            $minut2 = $minut + 1 - 60;
            $valand2 = $valand +1;
        }
        else {
            $valand2 = $valand;
        }
    } else if ($sec2 >= 240) {
        $sec2 = $sec + $extra -240;
        $minut2 = $minut + 4;
        if ($minut2 >= 60) {
            $minut2 = $minut + 1 - 60;
            $valand2 = $valand +1;
        } else {
            $valand2 = $valand;
        }
    } else {
        $minut2 = $minut;
        $valand2 = $valand;
    }
} else if ($extra > 240 && $extra <= 300) {
    $sec2 = $sec + $extra;
    if ($sec2 >= 240 && $sec2 < 300) {
        $sec2 = $sec + $extra -240;
        $minut2 = $minut + 4;
        if ($minut2 >= 60) {
            $minut2 = $minut + 1 - 60;
            $valand2 = $valand +1;
        }
        else {
            $valand2 = $valand;
        }
    } else if ($sec2 >= 300) {
        $sec2 = $sec + $extra -300;
        $minut2 = $minut + 5;
        if ($minut2 >= 60) {
            $minut2 = $minut + 1 - 60;
            $valand2 = $valand +1;
        } else {
            $valand2 = $valand;
        }
    } else {
        $minut2 = $minut;
        $valand2 = $valand;
    }
}
echo 'Laikordis su extra secundemis:', $valand2, 'h ', $minut2, 'min ', $sec2, 's .';