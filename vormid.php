<?php
/**
 * Created by PhpStorm.
 * User: Kaspar
 * Date: 09.01.18
 * Time: 13:31
 */

//function valjastaVorm(){
//    echo '
//        <form action="'.$_SERVER[PHP_SELF].'" method="post">
//            Kasutaja: <input type="text" name="kasutaja">
//            <br>
//            Parool <input type="password" name="parool">
//            <br>
//            <input type="submit" value="saada">
//        <form>
//    ';
//}
//
//function vormiAndmed(){
//    echo "<pre>";
//    print_r($_POST);
////    print_r($_GET);
////    print_r($_REQUEST);
////    print_r($_SERVER);
//    echo "</pre>";
//    if(!empty($_POST)) {
//        extract($_POST);
//        foreach($_POST as $i=>$j) {
//            if (empty($_POST[$i])) {
//                echo "Andmed peavad olema sisestatud";
//                exit;
//            }
//        }
//        echo "<br>Tere, " . $kasutaja . "<br>";
//        echo "Sinu parooliks on " . $parool . "<br>";
//    }
//}
//
//valjastaVorm();
//
//vormiAndmed();


function valjastaVorm(){
    echo '
        <form action="'.$_SERVER[PHP_SELF].'" method="post">
            number: <input type="text" name="number">
        <form>
    ';
}

$nr = 13;
valjastaVorm();
echo "<br>";
echo $nr;
a($nr);
function a($nr)
{
    $tulebVagaSuur = 0;
    $number = ($_POST["number"]);
    if ($nr > $number) {
        echo "Pakkusid väiksema";
        $tulebVagaSuur++;
        if ($nr - 5 < $number) {
            echo ", kuid oled üsna lähedal";
            $tulebVagaSuur++;
        }
    } else if ($nr < $number) {
        echo("Pakkusid suurema");
        $tulebVagaSuur++;
        if ($nr + 5 > $number) {
            echo(", kuid oled üsna lähedal");
            $tulebVagaSuur++;
        }
    } else if ($nr == $number) {
        echo "See on õige arv. Vastuse said " . $tulebVagaSuur . " korraga.";

    } //else {
//            alert("Valesti");
//        }
}