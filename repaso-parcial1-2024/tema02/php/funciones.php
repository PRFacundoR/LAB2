<?php
    function fnCobro ($tipo, $litros) 
    {
       $costos = [
                    'Super' => 240.5,
                    'Premium' => 308.7,
                    'Gasoil' => 258.4,
                    'Euro' => 352.7 
                ]; 

    /* 1-c) c.	En el archivo funciones.php, desarrollar la función mencionada,  
    cuya tarea será trabajar con el arreglo $costos, para calcular y retornar 
    el importe del combustible cargado.*/

                
                foreach($costos as $tipoC=> $precio){

                   switch ($tipoC) {
                    case $tipo:
                        $pago=$precio*$litros;
                        return $pago;
                        break;
                    case $tipo:
                        $pago=$precio*$litros;
                        return $pago;
                        break;
                    case $tipo:
                        $pago=$precio*$litros;
                        return $pago; 
                        break;
                    case $tipo:
                        $pago=$precio*$litros;
                        return $pago;
                        break;
                    
                   }
                }

                
    }
    

?>