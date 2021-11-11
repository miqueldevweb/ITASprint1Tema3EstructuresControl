<?php
//Definim constants per el preus dels productes
define("PREU_XOCOLATA", 1);
define("PREU_XICLETS", 0.5);
define("PREU_CARMELS", 1.50);

function xocolata($number){
    return $number * PREU_XOCOLATA;
}
function xiclets($number){
    return $number * PREU_XICLETS;
}
function carmels($number){
    return $number * PREU_CARMELS;
}

function total($xocolata, $xiclets, $carmels){
    return xocolata($xocolata) + xiclets($xiclets) + carmels($carmels);
}

//Prova
echo "El preu dels productes es de: " . total(5, 3, 8) . " euros.<br>";
?>