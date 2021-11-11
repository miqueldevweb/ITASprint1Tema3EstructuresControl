<?php
$userNumber = 37;
function oddEven($number){
    $message;
    if($number == 0){
        $message = "El numero no es parell ni imparell.";
    }else if($number % 2 == 0){
        $message = "El numero es parell.";
    }else{
        $message = "El numero es imparell.";
    }
    return $message;
}

echo oddEven($userNumber);
?>