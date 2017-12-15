<?php
/**
 * Created by PhpStorm.
 * User: Kaspar
 * Date: 15.12.17
 * Time: 11:09
 */
for($rida = 1; $rida <= 5; $rida++){
    $varv = "#";
    for($kord = 1; $kord <= 6; $kord++){
        $juhuTaisarv = rand(0, 15);
        $juhuHex = dechex($juhuTaisarv);
        $varv = $varv.$juhuHex;
    }
    echo "<font color='.$varv.'>Värviline tekst</font><br>";
}