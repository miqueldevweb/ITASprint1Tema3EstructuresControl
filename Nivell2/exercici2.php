<?php
$userMinutes = 21.143;

//Pasem les dades per parametres per poder fer variacions en el futur
function phoneCalculator($userMinutes, $initialCost = 10, $cost = 5, $callStablish = 3){
    $result;
    if($userMinutes <= $callStablish){
        $result = $initialCost;
    }else{
        $initialCall = $initialCost;
        $restCall = ceil((double)($userMinutes - $callStablish)) * $cost;
        $result = $initialCall + $restCall;
    }
    return $result / 100;   //-> Resultat en euros
}

echo "El cost de la trucada es de " . phoneCalculator($userMinutes) . " euros.<br>";
?>