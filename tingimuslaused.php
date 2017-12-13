<?php
/**
 * Created by PhpStorm.
 * User: Kaspar
 * Date: 13.12.17
 * Time: 08:55
 */
$ilm= 'sajab';
if($ilm=='sajab'){
    $tuju="halb";
} else {
    $tuju="hea";
}
echo "Väljas ".$ilm."<br>" ;
echo "Minul on tuju väärtus ".$tuju."<br>";
//
$vanus=rand(0,100);
if ($vanus >= 0 and $vanus < 11){
    $staatus="laps";
} elseif ($vanus >= 11 and $vanus <18){
    $staatus="noorus";
} elseif ($vanus >= 18 and $vanus <65){
    $staatus="täiskasvanu";
} else {
    $staatus="seenior";
}
echo "Oled ".$vanus." aastat vana.<br>";
echo "Oled ".$staatus."<br>";
?>