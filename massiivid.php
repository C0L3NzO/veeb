<?php
/**
 * Created by PhpStorm.
 * User: Kaspar
 * Date: 19.12.17
 * Time: 08:45
 */
$arvud = array(5, 4, 3, 2, 1);
var_dump($arvud);
echo "<hr>";
echo "<pre>";
print_r($arvud);
echo "<pre>";
$elementideArv = count($arvud);
echo 'Massiiv $arvud koosneb '.$elementideArv." elemendist.<br>";
$arvud[] = 0;
echo 'Massiiv $arvud koosneb '.count($arvud)." elemendist.<br>";
for($i = 0; $i < $elementideArv; $i++){
    echo $arvud[$i]."<br>";
}
echo "<hr>";
foreach ($arvud as $arv){
    echo "<i>".$arv."</i><br>";
}

function looMassiiv($hulk){
    $massiiv = array();
    for($kord = 0; $kord < $hulk; $kord++){
        $massiiv[] = rand(0, 99);
    }
    return $massiiv;
}
$arvudeMassiiv = looMassiiv(8);
print_r($arvudeMassiiv);

function valjastaMassiiv($massiiv){
    echo "<table border='3'>";
    echo "<tr>";
    foreach($massiiv as $i) {
        echo "<td>";
        echo "$i";
        echo "</td>";
    }
    echo "</tr>";
    echo "</table>";
}



function looMassiiv2($pikkus, $laius){
    $massiiv = array();

    for($kord = 0; $kord < $pikkus; $kord++){

        for($kord2 = 0; $kord2 < $laius; $kord2++) {

            $massiiv[] = rand(0, 99);

        }
        $massiiv2[] = $massiiv;
        $massiiv = array();

    }
    return $massiiv2;
}
//var_dump(looMassiiv2(8, 1));


function vahetaMinMax($massiiv) {
    $max = max($massiiv);
    $min = min($massiiv);
    for($kord = 0; $kord < count($massiiv); $kord++){
        if($massiiv[$kord] == $min){
            $massiiv[$kord] = $max;
        } else if($massiiv[$kord] == $max){
            $massiiv[$kord] = $min;
        }
        echo $massiiv[$kord].' - ';
    }

}
valjastaMassiiv($arvudeMassiiv);
echo '<hr>';
vahetaMinMax($arvudeMassiiv);
valjastaMassiiv($arvudeMassiiv);


$katsetus = array(1,0,6,0,0,3,5);
echo "<br>";
echo "<br>";
echo "<br>";
function elementideKorrutis($massiiv){
    $vastus = "Tulemus:";
    if ($massiiv[0] > 0){
        $korrutis = $massiiv[0];
        $vastus = $vastus." ".$massiiv[0];
    }
    if (count($massiiv) > 3) {
        for ($kord = 2; $kord < count($massiiv); $kord = $kord + 2) {
            if ($massiiv[$kord] > 0) {
                $korrutis = $korrutis * $massiiv[$kord];
                $vastus = $vastus." * ".$massiiv[$kord];
            }
        }
        echo $vastus;
        echo "<br>";
        $vastus = $vastus." = ".$korrutis;
        echo $vastus;
    }
}

elementideKorrutis($katsetus);