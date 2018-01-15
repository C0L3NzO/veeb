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