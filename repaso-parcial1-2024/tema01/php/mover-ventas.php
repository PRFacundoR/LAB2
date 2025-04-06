<?php

/*
1.a) Recibir la fecha y el archivo del formulario de admin.php,
 crear la carpeta de nombre año, el cual será tomado 
 del formulario. Si la carpeta no existe, 
 deberá crearla por medio de código.

 Nota: Individualice el año, trabajando con función de cadena 
 para separar las partes de la fecha.
*/

/* 1-b)	Mediante código, mover el archivo a la carpeta indicada.
 El nombre del archivo será año-mes-dia-ventas.txt */

 
/* 1-c)Sin demoras, redireccionar a la página listar.php
*/


    if(!empty($_POST['fecha']) && !empty($_FILES['archivo']['size'])){

        $fecha=$_POST['fecha'];
        $arch=$_FILES['archivo']['size'];

        //corregir fecha
        $lineaF= explode('-', $fecha); // lo vuelve un array
        $year=$lineaF[0];
        $month=$lineaF[1];
        $day=$lineaF[2];

       
        




        if ($_FILES['archivo']['type'] ==  'text/plain') { //esto envia el archivo .txt
            
            $nombre = $_FILES['archivo']['name'];
            $ext = explode(".",$nombre);

            $rutaOrigen=$_FILES['archivo']['tmp_name'];
            $ubicacion='../txt/';
        
            if (!file_exists($ubicacion)) {
                mkdir($ubicacion);
            }

            $nombreArch='año-mes-dia-ventas';
            $destino=$ubicacion.$nombreArch . '.' . $ext[1];

            $envio=move_uploaded_file($rutaOrigen,$destino);
 
            if ($envio) {
                header('refresh:0; url=listar.php?dia='.$day. '&'.'anio='.$year. '&'.'mes='.$month);
            }
            
                

        }
        



    }




 ?>