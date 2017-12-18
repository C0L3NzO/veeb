<?php
/**
 * Created by PhpStorm.
 * User: Kaspar
 * Date: 18.12.17
 * Time: 14:11
 */
function arvuSumma($arv){
    $summa = 0;
    while($arv > 0) {
        $summa = $summa + $arv % 10;
        $arv = floor($arv/10);
    }
    return $summa;
}
//for ($kord = 1; $kord <= 5; $kord++) {
//    $seeArv = rand(0, 1000);
//    echo "Arvu " . $seeArv . " numbrite summa on " . arvuSumma($seeArv) . "<br>";
//}
function otsiNumber($arv, $nr){
    $kordi = 0;
    while($arv > 0) {
        if ($nr == ($arv % 10)) {
            $kordi++;
        }
        $arv = floor($arv/10);
    }
    return $kordi;
}
$nr = 3;
$suvaArv = rand(0, 9999999999);
echo "Numbrit " . $nr . " leidub arvus " . $suvaArv . " ".otsiNumber($suvaArv, $nr)." korda<br>";
