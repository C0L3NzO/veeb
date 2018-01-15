<?php
/**
 * Created by PhpStorm.
 * User: Kaspar
 * Date: 15.01.18
 * Time: 14:20
 */

class tekst
{
    //klassi muutujad
    //klasi omadused
    //class variables
    /**
     * @var string
     */
    var $sonad = "";

    /**
     * tekst constructor.
     * @param string $sonad
     */
    public function __construct($sonad)
    {
        $this->maaraTekst($sonad);
    }
    //klassi tegevus
    //klassi meetodid
    //class methods
    function maaraTekst($sonad){
        $this->sonad = $sonad;
    }

}