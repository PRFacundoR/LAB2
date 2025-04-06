<?php

function cambiarFecha($fecha){


    $partesFecha = explode('-', $fecha);
    
    $dia=$partesFecha[2];
    $mes=$partesFecha[1];
    $anio=$partesFecha[0];

    switch ($mes) {
        case '01':
            $mesS = 'Enero';
            break;
        case '02':
            $mesS = 'Febrero';
            break;
        case '03':
            $mesS = 'Marzo';
            break;
        case '04':
            $mesS = 'Abril';
            break;
        case '05':
            $mesS = 'Mayo';
            break;
        case '06':
            $mesS = 'Junio';
            break;
        case '07':
            $mesS = 'Julio';
            break;
        case '08':
            $mesS = 'Agosto';
            break;
        case '09':
            $mesS = 'Septiembre';
            break;
        case '10':
            $mesS = 'Octubre';
            break;
        case '11':
            $mesS = 'Noviembre';
            break;
        case '12':
            $mesS = 'Diciembre';
            break;
    }

   return $nuevaF= $dia.' de '.$mesS.' de '.$anio;
}




?>