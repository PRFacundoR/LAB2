<?php

function calcularIntereses($depo, $day){

    if($dias=30){
        return $intereses= $depo*((117/100)*$dias/365);
    }
    if($dias=45){
        return $intereses= $depo*((125/100)*$dias/365);
    }
    if($dias=60){
        return $intereses= $depo*((137/100)*$dias/365);
    }
    if($dias=90){
    return $intereses= $depo*((150/100)*$dias/365);
    }
}

?>