<?php
//Encara que l'exercici no ho especifica entenc que l'usuari posaria una nota ordinaria del 0 al 10 i no el percentatge, per tant faig una funcio extra que faci la conversio:
function convert($number){
    return $number * 10;
}

//Si el rang de notes es diferent (max es la nota maxima possible):
function convert2($number, $max){
    return ($number * 100) / $max;
}

//Inici de l'exercici:
$noteUser = 8.64;

function results($note){
    $percentNote = convert($note);
    if($percentNote >= 60){
        echo "Grau de primera divisio.";
    }else if($percentNote >= 45){
        echo "Grau de segona divisio.";
    }else if($percentNote >= 33){
        echo "Grau de tercera divisio.";
    }else{
        echo "Estudiant reprova.";
    }
}

results($noteUser);
?>