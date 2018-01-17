<?php
/**
 * Created by PhpStorm.
 * User: Kaspar
 * Date: 17.01.18
 * Time: 11:08
 */

require_once "tekst.php";

class vTekst extends tekst
{
    var $tekstiVarv = "";

    public function __construct($sonad = "", $varv = "")
    {
        parent::__construct($sonad);
        $this->maaraVarv($varv);
    }

    function maaraVarv($varv){
        $this->tekstiVarv = $varv;

    }
}