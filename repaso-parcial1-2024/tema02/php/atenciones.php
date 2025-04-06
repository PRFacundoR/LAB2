<?php
    $ruta = '../';
    require_once('../html/header.html');
    require_once 'datos.php';
    //require_once 'surtidor.php';
    /* 2-a) Simular 500 atenciones, seleccionando al azar un tipo de transporte, 
    del array $transportes, que se encuentra en el archivo datos.php, que ya está requerido. */

    /* 2-b)	Mostrar el total de atenciones de cada tipo de transporte. */
    
    /* 2-c) c.	Determinar cuál tipo de transporte tuvo mayor cantidad de atenciones 
    y mostrarlo en un mensaje */
$i=0;
$camion=0;
$auto=0;
$moto=0;
$camioneta=0;
    while ($i<500) {
        
        $vehiculo= array_rand($transportes);
        switch ($vehiculo) {
            case 'camioneta':
                $camioneta++;
                break;
            case 'camión':
                $camion++;
                break;
            case 'auto':
                $auto++;
                break;
            case 'moto':
                $moto++;  
                break;          
            
        }

        

        $i++;
    }
$tipoTransporteMax = ''; // Variable para almacenar el tipo de transporte con más atenciones
$maxAtenciones = 0; // Inicializamos la variable que guardará el máximo

// Comparar cada tipo de transporte
if ($camioneta > $maxAtenciones) {
    $maxAtenciones = $camioneta;
    $tipoTransporteMax = 'camioneta';
}
if ($camion > $maxAtenciones) {
    $maxAtenciones = $camion;
    $tipoTransporteMax = 'camión';
}
if ($auto > $maxAtenciones) {
    $maxAtenciones = $auto;
    $tipoTransporteMax = 'auto';
}
if ($moto > $maxAtenciones) {
    $maxAtenciones = $moto;
    $tipoTransporteMax = 'moto';
}

// Mostrar el tipo de transporte con más atenciones
echo "<h3>El tipo de transporte con mayor cantidad de atenciones es: $tipoTransporteMax con $maxAtenciones atenciones.</h3>";

    require_once('../html/footer.html'); 
?>