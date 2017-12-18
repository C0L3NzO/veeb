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
echo arvuSumma(44226267);