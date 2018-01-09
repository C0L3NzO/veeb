<?php
/**
 * Created by PhpStorm.
 * User: Kaspar
 * Date: 09.01.18
 * Time: 11:41
 */

$opilane = array(
    "eesnimi" => "Mart",
    "perenimi" => "Lepp",
    "Vanus" => 15,
    "Klass" => 9
);

foreach($opilane as $i => $j){
    echo $i." - ".$j."<br>";
}

$opilased = array(
    array("eesnimi" => "Mart",
        "perenimi" => "Lepp",
        "Vanus" => 15,
        "Klass" => 9
    ),
    array(
        "eesnimi" => "Madli",
        "perenimi" => "Lederhosen",
        "Vanus" => 15,
        "Klass" => 9
    ),
    array(
        "eesnimi" => "Karl",
        "perenimi" => "Blumm",
        "Vanus" => 15,
        "Klass" => 9
    )
);

foreach($opilased as $opilane) {
    foreach ($opilane as $i => $j) {
        echo $i . " - " . $j . "<br>";
    }
}



$raamatud = array(
    array(
        'title' => 'Peppa Goes To London',
        'author' => 'Ladybird',
        'print' => 'Penguin',
        'status' => 'valjas'
    ),
    array(
        'title' => 'Toto, Joonas ja püha Mimoos',
        'author' => 'Kristiina K.',
        'print' => 'Heli Kirjastus OÜ',
        'status' => 'sees'
    ),
    array(
        'title' => 'Lugusid loomadest',
        'author' => 'Ernest Thompson Seton',
        'print' => 'Ernest Thompson Seton',
        'status' => 'sees'
    ),
    array(
        'title' => 'Miljon miksi ja miljon vastust',
        'author' => '',
        'print' => 'TEA Kirjastus',
        'status' => 'sees'
    ),
    array(
        'title' => 'Teadmiste Puu: Maailma Loodus',
        'author' => 'AJ Wood, Mike Jolley',
        'print' => 'Pikoprint',
        'status' => 'valjas'
    )
);



function raamatuteTabel($raamatud){
    echo "<table border='2'>";
    $pealkirivaljastatud = false;

        foreach($raamatud as $raamat) {
        $pealkiri = array_keys($raamat);
        echo "<tr>";
            if (!$pealkirivaljastatud) {
                foreach ($pealkiri as $nimetus) {
                    echo "<th>";
                    echo $nimetus;
                    echo "</th>";
                }
                echo "</tr>";
                $pealkirivaljastatud = true;
            }
        foreach($raamat as $i => $j){
            echo "<td>";
            echo $j;
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

raamatuteTabel($raamatud);

function otsiRaamat($raamatud, $status){
    $leitudRaamatud = array();
    foreach($raamatud as $raamat) {
        if ($raamat["status"] == $status) {
            $leitudRaamatud[] = $raamat;
        }
    }
    return $leitudRaamatud;
}

$kohalRaamatud=(otsiRaamat($raamatud, "sees"));
raamatuteTabel($kohalRaamatud);

