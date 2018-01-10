<?php
/**
 * Created by PhpStorm.
 * User: Kaspar
 * Date: 10.01.18
 * Time: 14:23
 */

function vorm(){
    echo '
        <form action="salvestus.php" method="post">
            Eesnimi: <input type="text" name="eesnimi">
            <br>
            Perekonnanimi: <input type="text" name="perekonnanimi">
            <br>
            <input type="submit" value="salvesta">
        </form>
    ';
}

vorm();