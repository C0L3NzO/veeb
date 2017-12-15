<?php
/**
 * Created by PhpStorm.
 * User: Kaspar
 * Date: 13.12.17
 * Time: 09:31
 */
header("Refresh: 2");
$number = rand(1, 20);
echo $number." - ";
switch ($number){
    case 1: echo "jaanuar - näärikuu";
        break;
    case 2: echo "veebruar - vastlakuu";
        break;
    case 3: echo "märts - kõige igavam kuu";
        break;
    case 4: echo "aprill - kevadkuu";
        break;
    case 5: echo "mai - jõulud ka";
        break;
    case 6: echo "juuni - vaheajakuu";
        break;
    case 7: echo "juuli - hästi palju päikest-kuu";
        break;
    case 8: echo "august - sünnipäevakuu";
        break;
    case 9: echo "september - koolikuu";
        break;
    case 10: echo "oktoober - sügiskuu";
        break;
    case 11: echo "november - porikuu";
        break;
    case 12: echo "detsember - jõulukuu";
        break;
    default: echo "Ainult 12 kuud on.";
}