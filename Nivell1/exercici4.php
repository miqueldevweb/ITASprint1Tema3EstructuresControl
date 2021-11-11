<?php
$numberUser = 50;
function amagatall($limit = 10){
    for($i = 0; $i <= $limit; $i = $i + 2){
        if($i != 0){
            echo $i . "<br>";
        }
    }
}

amagatall();
?>