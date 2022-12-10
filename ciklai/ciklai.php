<?php
// 1. a.-------------------------------------------------
//$str = '';
//$div1 = '<p style="font-size: 10px;">';
//$div2 = '</p>';
//while (strlen($str) < 400){
//    $str .= '*';
//};
//echo $div1, $str, $div2;
// 1. b.-------------------------------------------------
//$str2 = '';
// while (strlen($str2) < 428){
//    $str2 .= '*';
//    if (strlen($str2) == 50 || strlen($str2) == 104 || strlen($str2) == 158 || strlen($str2) == 212 || strlen($str2) == 266 || strlen($str2) == 320 || strlen($str2) == 374){
//        $str2 .= '<br>';
//    }
//};
//echo $str2;
// 2.-------------------------------------------------
echo '<br>';
//$sk = '';
//$kartai = 1;
//$didesni = 0;
//while ($kartai < 300) {
//    $sk = rand(0, 300);
//    $color = 'black';
//    if ($sk > 275) {
//        $color = 'red';
//    } else {
//        $color = 'black';
//    }
//    if ($sk > 150) {
//    ++$didesni;
//    }
//    echo '<i style=" width: fit-content; block-size: fit-content; color:', $color, '">', $sk, ' <i/>';
//    ++$kartai;
//}
//echo '<h2>Didesnių už 150 yra ', $didesni, '<h2/>';
// 3.-------------------------------------------------
//$ilgis = rand(3000, 4000);
//$sk = '';
//echo'<br>';
//for ($a = 1; $a <= $ilgis; $a++ ){
//    if ($a % 77 == 0){
//        $sk .= $a;
//        $sk .= ',';
//    }
//}
//echo substr($sk, 0, -1);
// 4.-------------------------------------------------

// 5.-------------------------------------------------

// 6. a)-------------------------------------------------
// 0-herbas 1-skaicius
$sk ='Reiksmes: ';
//do { 
//    $monet = rand(0,1);
//    if($monet == 0){
//        $sk .= 'H';
//    } else {
//        $sk .= 'S';
//    }
//} while ($monet > 0);
//echo $sk;
//echo '<br>';
// b)-------------------------------------------------
//$a = 0;
//for ($i = 0; $a < 3; $i++){
//    $monet = rand(0, 1);
//    if($monet == 0){
//        $sk .= 'H';
//        $a++;
//    } else {
//        $sk .= 'S';
//    } 
//}
//echo $sk;
// c)-------------------------------------------------
$a = false;
for($i = 0; $a != true; $i++){
    $monet = rand(0, 1);
    if($monet == 0){
    $sk .= 'H';
    } else {
    $sk .= 'S';
    }
    if (str_contains($sk, 'HHH')) {
    $a = true;
    } 
}
echo $sk;
echo '<br>';
// 7.
$petras = 0;
$kazys = 0;
$petrosuma = 0;
$kaziosuma = 0;
for ($i = 0; $i != true; $i++) {
    if ($petrosuma >= 222 || $kaziosuma >= 222){
        $i = true;
    }
    while ($petrosuma < 222 || $kaziosuma < 222) {
        $petras = rand(10, 20);
        $kazys = rand(5, 25);
        $petrosuma = $petrosuma + $petras;
        $kaziosuma = $kaziosuma + $kazys;
        if($petras > $kazys) {
            echo 'Partiją laimėjo: Petras. ';
            echo 'Petro taškai:', $petras, ' ';
            echo 'Kazio taškai:', $kazys;
            echo '<br>';
        } else if ($kazys > $petras) {
            echo 'Partiją laimėjo: Kazys. ';
            echo 'Petro taškai:', $petras, ' ';
            echo 'Kazio taškai:', $kazys;
            echo '<br>';
        } else {
            echo 'Lygiosios. ';
            echo 'Petro taškai:', $petras, ' ';
            echo 'Kazio taškai:', $kazys;
            echo '<br>';
        }
        if ($petrosuma >= 222 || $kaziosuma >= 222){
            if ($petrosuma > $kaziosuma) {
                echo '<br>', 'Laimėjo Petras. ';
                echo 'Taškai:', $petrosuma;
                echo '<br>';
            } else if ($kaziosuma > $petrosuma){
                echo '<br>', 'Laimėjo Kazys. ';
                echo 'Taškai:', $kaziosuma;
                echo '<br>';
            }
        }  
    };
};
