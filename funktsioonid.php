<?php
/**
 * Created by PhpStorm.
 * User: Kaspar
 * Date: 15.12.17
 * Time: 11:30
 */
//header("refresh: 1");
function valjastaTabel($ridadeArv, $veergudeArv){
    echo "<table border='1'>";
    for($reaNumber = 1; $reaNumber <= $ridadeArv; $reaNumber++) {
        echo "<tr>";
        for ($veeruNumber = 1; $veeruNumber <= $veergudeArv; $veeruNumber++) {
            echo "<td style='background-color: ".genereeriVarv().";'>";
            echo rand(10, 99);
            echo "</td>";
        }
        echo "<tr>";
    }
    echo "</table>";
}
//valjastaTabel(1, 1);
function genereeriVarv(){
    $varv = "#";
    for($kord = 1; $kord <= 6; $kord++){
        $juhuTaisarv = rand(0, 15);
        $juhuHex = dechex($juhuTaisarv);
        $varv = $varv.$juhuHex;

    }
    return $varv;
}
//echo genereeriVarv();

function tekstiTabel($s1, $s2, $s3, $s4){
    echo "<table border='5'>";
    for($nr = 1; $nr <= 4; $nr++) {
        echo "<tr>";
        echo "<td>";
        echo ${"s".$nr};
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
tekstiTabel("Üks", "Kana", "Kohe", "Nelik");
