<?php
function isBitten(){
    $result = rand(0,100);
    $check;
    if($result >= 50){
        $check = TRUE;
    }else{
        $check = FALSE;
    }
    return $check;
}

//Prova
if(isBitten()){
    echo "Charlie t'ha mossegat.";
}else{
    echo "Charlie no t'ha mossegat.";
}
?>