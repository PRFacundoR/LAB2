<?php
    $ruta = '../';
    require_once 'encabezado.php';

    /*2-a) Controle los datos que provienen del formulario que se encuentra en 
    el archivo index.php. */

    /*2-b) Si tiene todos los datos, deberá buscar el costo de la vacuna elegida 
    en el arreglo $costos (que está en el archivo datos.php). 
    No copiar el arreglo, usarlo desde donde está. */

    /* 2-c) Luego llame al procedimiento reservarTurno, que se encontrará 
    en el archivo funciones.php. Pasele todos los datos necesarios*/

    require_once 'datos.php'; // Incluir el archivo con el arreglo $costos

    require_once 'funciones.php';

    if(!empty($_POST['apellido']) && !empty($_POST['nombre']) && !empty($_POST['dni']) && !empty($_POST['correo']) && !empty($_POST['celular']) && !empty($_POST['fecha']) && !empty($_POST['vacuna']) && !empty($_POST['hora'])){
        
        $name= $_POST['nombre'];
        $ape=$_POST['apellido'];
        $docI=$_POST['dni'];
        $mail= $_POST['correo'];
        $cel=$_POST['celular'];


        $vacuna=$_POST['vacuna'];
        $fecha= $_POST['fecha'];
        $hora=$_POST['hora'];

        $datos=implode(';',$_POST);//para guardar muchos datos que llegan de un formulario

        foreach($costos as $vacunaT=> $valor){
            switch ($vacunaT) {
                case 'Qdenga':
                    $precio=$valor;
                    break;
                
                case 'Neumococo':
                    $precio=$valor;
                    break;
                case 'Antitetánica':
                    $precio=$valor;
                    break;
            }
        }
            reservarTurno($precio,$datos);
        
    } 
    
    require_once 'pie.php';
?>