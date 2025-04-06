<?php



function calculoPromedio($comision)
{
    $promedio = 0;
    $cant = 0;
    
        
    foreach ($comision as $nota) {
        $promedio += $nota;
        $cant++;
    }
    $promedioF =   $promedio / $cant ;
            
    return $promedioF;

}

function cantidadAprobados($comision){
    $aprobados=0;
    foreach ($comision as $nota) {
        if ($nota >= 4){
            $aprobados++;
        }
    }

    return $aprobados;
}

function cantidadDesaprobados($comision){
    $desaprobados=0;
    foreach ($comision as $nota) {
        if ($nota <= 4){
            $desaprobados++;
        }
    }

    return $desaprobados;
}

function verEstadisticas($comision){
    $promedioF= calculoPromedio($comision);
    
    $aprobados=  cantidadAprobados($comision);

    $desaprobados= cantidadDesaprobados($comision);

    echo '<p> Promedio: '.$promedioF.'</p>';
    echo '<p>Cantidad de aprobados: '.$aprobados.'</p>';
    echo '<p> Cantidad de desaprobado: '.$desaprobados.'</p>';


}

?>