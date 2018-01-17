<?php
/**
 * Created by PhpStorm.
 * User: Kaspar
 * Date: 17.01.18
 * Time: 11:46
 */

require_once "tabel.php";

class htmlTabel extends tabel
{
    var $taustaVarv = "";

    public function __construct(array $pealkirjad, $varv = "")
    {
        parent::__construct($pealkirjad);
        $this->maaraVarv($varv);
    }

    function maaraVarv($varv)
    {
        $this->taustaVarv = $varv;

    }

    function prindiTabel()
    {
        if($this->taustaVarv == "") {
            parent::prindiTabel();
        } else {
            echo "<table border=1>";
            echo "<tr bgcolor='".$this->taustaVarv."'>";
            foreach($this->pealkirjad as $pealkiri) {
                echo "<td><b>" . $pealkiri . "</b></td>", " ";
            }
            echo "</tr>";
            foreach ($this->tabeliSisu as $reaelemendid) {
                echo "<tr bgcolor='".$this->taustaVarv."'>";
                foreach ($reaelemendid as $reaElement) {
                    echo "<td>".$reaElement."</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }

}