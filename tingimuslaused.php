<?php
/**
 * Created by PhpStorm.
 * User: Kaspar
 * Date: 13.12.17
 * Time: 08:55
 */
//header("Refresh: 2");
$ilm = 'sajab';
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
$tuju = ($ilm = 'sajab')? "halb":"hea";

echo "Oled ".$vanus." aastat vana.<br>";
echo "Oled ".$staatus."<br>";
//
$number = rand(1, 10);
echo $number." - ";
switch ($number){
    case 1: echo "üks";
    break;
    case 2: echo "kaks";
    break;
    case 3: echo "kolm";
    break;
    case 4: echo "neli";
    break;
    case 5: echo "viis";
    break;
    default: echo "Antud numbrit ei tea";
}
?>