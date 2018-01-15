<?php
/**
 * Created by PhpStorm.
 * User: Kaspar
 * Date: 15.01.18
 * Time: 15:15
 */

require_once "tabel.php";
//loon tabeli objekti
$minuTabel = new tabel(array("a", "b", "c", "d"));
//lisame read juurde
$minuTabel->lisaRida(array(1, 2, 3, 4));
$minuTabel->lisaRida(array(5, 6, 7, 8));
//väljastan tabeli objekti test kujul
echo "<pre>";
print_r($minuTabel);
echo "</pre>";