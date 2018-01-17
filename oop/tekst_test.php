<?php
/**
 * Created by PhpStorm.
 * User: Kaspar
 * Date: 15.01.18
 * Time: 14:27
 */

require_once "tekst.php";
//loome teksti objekti
$minuTekst = new tekst("Tere maailm");
//väljastan objekti sisu test kujul
echo '<pre>';
print_r($minuTekst);
echo '<pre>';
//väljastan objekti korralikul kujul
$minuTekst->prindiTekst();

echo "<hr>";

require_once "vTekst.php";
//loome teksti objekti
$varvituTekst = new vTekst("Värvitu tekst");
//väljastan objekti sisu test kujul
echo '<pre>';
print_r($varvituTekst);
echo '<pre>';
//väljastan objekti korralikul kujul
$varvituTekst->prindiTekst();