<?php
    $ruta = '../';
    require_once 'encabezado.php';
/*
1-c) Sin demoras, redireccionar a la página listar.php, 
cuya tarea será mostrar, en una tabla, los datos del archivo
subido, pero sólo de aquellas líneas que coincidan 
con el mes y el año ingresados (pasar estos datos por url).
Los datos del archivo son: año-mes-dia;dni;vacuna;cantidad

*/
if(!empty($_GET['dia']) && !empty($_GET['anio']) && !empty($_GET['mes'])){
    $dia=$_GET['dia'];
    $mes=$_GET['mes'];
    $año=$_GET['anio'];
   // $fecha='';


    //para leer un archivo
    //1)se declara la ubicacion opcional
   $ubicacion=$ruta .'txt/año-mes-dia-ventas.txt';

   //2) se lo abre para lectura, modo r
   $archivo=fopen($ubicacion, 'r');

   echo "<table border='1'>";
   echo "<tr><th>Fecha</th><th>DNI</th><th>Vacuna</th><th>Cantidad</th></tr>";
  
   //3) se lo recorre entero
   while (!feof($archivo)) {
    //4) se obtiene una linea
    $linea=fgets($archivo);

    //5) se ve que esa linea no este vacia y se separa la linea en un separador segun el separar del archivo ejemplo h; o, el separador seria';'
    if($linea != ''){
       $separadorD=explode(';',$linea); 
       // separadorD separa todo lo que este entre ; entonces separador[0] seria la fecha lo que debo separar
       $separadorF=explode('-',$separadorD[0]);

        

        //6) aca se hace lo que se quiere
        if($año== $separadorF[0] && $mes== $separadorF[1]  && $dia== $separadorF[2]){
            $fecha=$separadorF[0].'/'.$separadorF[1].'/'.$separadorF[2]; // Formatear la fecha
            echo "<tr>";
            echo "<td>" . $fecha . "</td>"; // Fecha
            //echo "<td>" . $separadorD[0] . "</td>"; // Fecha
            echo "<td>" . $separadorD[1] . "</td>"; // DNI
            echo "<td>" . $separadorD[2] . "</td>"; // Vacuna
            echo "<td>" . $separadorD[3] . "</td>"; // Cantidad
            echo "</tr>";
        } 
           
    }
   }
    // 7) Cerrar el archivo
    fclose($archivo);

    // Cerrar la tabla
    echo "</table>";
}
    require_once 'pie.php';
?>