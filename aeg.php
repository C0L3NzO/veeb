<?php
/**
 * Created by PhpStorm.
 * User: Kaspar
 * Date: 11.01.18
 * Time: 08:48
 */


date_default_timezone_set("Europe/Tallinn");
$aegHetkel = time();
$kellaaeg = date("G:i", $aegHetkel);
echo $kellaaeg."<br>";
$kuupaev = date("j.m.Y");
echo $kuupaev."<br>";

require_once "fnk.php";

vormB();