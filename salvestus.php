<?php
/**
 * Created by PhpStorm.
 * User: Kaspar
 * Date: 10.01.18
 * Time: 14:27
 */
function andmeteKontroll(){
    if(!empty($_POST)) {
        foreach($_POST as $i=>$j) {
            if (empty($_POST[$i])) {
                echo "Andmed peavad olema sisestatud<br>";
                echo "<a href='sisend.php'>Sisesta andmed</a><br>";
                exit;
            }
        }
        $kontroll = true;
    }
    return $kontroll
}


function salvestaFaili($failinimi){
    if(andmetekontroll()) {
        if (file_exists($failinimi) and is_file($failinimi) and is_writable($failinimi)) {
            echo "Salvestus on võimalik<br>";
            $fail = fopen($failinimi, "a");
            foreach ($_POST as $vaartus){
                fwrite($fail, $vaartus." ");
            }
            fwrite($fail, "\n");
            echo "Andmed on salvestatud<br>";
            echo "<a href='valjund.php'>Vaata faili sisu</a>";
            fclose($fail);
        } else {
            echo "Probleem " . $failinimi . " failiga.";
        }
    }
}

andmeteKontroll();

salvestaFaili("andmed.txt");