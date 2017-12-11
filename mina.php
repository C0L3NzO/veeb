<?php
/**
 * Created by PhpStorm.
 * User: Kaspar
 * Date: 11.12.17
 * Time: 12:12
 */
//üherealine kommentaar
/*
mitmerealine
*/

$kaspar="Kaspar";
echo "Minu eesnimi on ".$kaspar."<br>";
print "Minu eesnimi on ".$kaspar."<br>";
print("Minu eesnimi on $kaspar<br>");

$var1 = 5;
$var2 = 5.0;
$var3 = "5";
$var4 = 2;
$var5 = 2.0;
$var6 = "2";
$var7 = true;
$var8 = false;

echo $var1." - ".gettype($var1)."<br>";
echo $var2." - ".gettype($var2)."<br>";
echo $var3." - ".gettype($var3)."<br>";
echo $var4." - ".gettype($var4)."<br>";
echo $var5." - ".gettype($var5)."<br>";
echo $var6." - ".gettype($var6)."<br>";
echo $var7." - ".gettype($var7)."<br>";
echo $var8." - ".gettype($var8)."<br>";

$tulemus = $var1 == $var2;
echo 'kas $var1 == $var2? - '.$tulemus;
echo "<br>";
$tulemus = $var1 == $var3;
echo 'kas $var1 == $var3? - '.$tulemus;
echo "<br>";
$tulemus = $var1 === $var3;
echo 'kas $var1 === $var3? - '.$tulemus;
echo "<br>";
$tulemus = $var1 != $var4;
echo 'kas $var1 != $var4? - '.$tulemus;