<?php
/**
 * Created by PhpStorm.
 * User: Kaspar
 * Date: 11.01.18
 * Time: 09:20
 */

require_once "fnk.php";


andmeteKontroll();

echo "salvestan: ".ajaTootlus($_POST["paev"], $_POST["kuu"], $_POST["aasta"])."<br>";

salvestaAeg("andmed.txt", ajaTootlus($_POST["paev"], $_POST["kuu"], $_POST["aasta"]));