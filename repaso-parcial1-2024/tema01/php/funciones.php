<?php
    /*2-d) Desarrollar el procedimiento mencionado mencionado, 
    cuya tarea será recibir y  guardar todos los datos, incluido el costo, 
    en un archivo de texto de nombre turnos.csv. 
    Luego de guardar, mostrar el mensaje "Guardado exitoso", 
    esperar 3 segundos y redireccionar a la página index.php. */

//para guardar un archivo
//1) se lo comprime en una linea/datos con implode
    function reservarTurno($precio,$datos){
        
        $linea= $datos.';'. $precio; //concateno datos y precio en linea

        $carpeta='../txt/';
        
        //2) se verifica que exista la carpeta donde se va a guardar
        if (!file_exists($carpeta)) {
            mkdir($carpeta);
        }
        
        //3) se declara donde se va aguardar el archivo, nombre del archivo
        $nombre='turnos.csv';
        
        //4) se abre el archivo en modo a, donde se van a guardar los datos
        $archivo=fopen($carpeta.$nombre,'a');

        //5) se verifica que se haya abierto
        if ($archivo) {
          
            //6) lo guardo con fpust lo que esta en datos, salto de linea PHP_EOL
            $guardar=fputs($archivo,$linea.PHP_EOL);

            //7) verifico que se haya guardado
            if ($guardar) {

                
                fclose($archivo); // cierro lo que abri
                header('refresh:5;url=../index.php');
                echo '<p>GUARDADO EXITOSO</p>';
            }
        }


    }
?>