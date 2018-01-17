<?php
/**
 * Created by PhpStorm.
 * User: Kaspar
 * Date: 15.01.18
 * Time: 15:07
 */

class tabel
{
    //klassi muutujad
    var $pealkirjad = array();
    var $tabeliSisu = array();
    var $tulpadeArv;
    /**
     * tabel constructor.
     * @param array $pealkirjad
     */
    public function __construct(array $pealkirjad){
        $this->pealkirjad = $pealkirjad;
        $this->veergudeArv = count($pealkirjad);
    }
    function lisaRida($rida){
        if(count($rida) != $this->veergudeArv) {
            return false;
        }
        array_push($this->tabeliSisu, $rida);
        return true;
    }
    function lisaRidaPealkirjadega($ridaPealkirjadega){
        $jarjestatudRida = array();
        foreach($this->pealkirjad as $pealkiri){
            $jarjestatudRida[] = $ridaPealkirjadega[$pealkiri];
        }
        array_push($this->tabeliSisu, $jarjestatudRida);
        return true;
    }
    function prindiTabel(){
        echo "<pre>";
        foreach($this->pealkirjad as $pealkiri){
            echo "<b>".$pealkiri."</b>"," ";
        }
        echo "\n";
        foreach ($this->tabeliSisu as $reaelemendid){
            foreach ($reaelemendid as $reaElement){
                echo $reaElement." ";
            }
            echo "\n";
        }
        echo "</pre>";
    }
}