


<?php

require_once ('encabezado.php'); // Incluye el archivo 'encabezado.php' (probablemente un header o layout común en la página)

if (!empty($_POST['legajo'])) { 
    // Verifica que todos el campo del formulario esté lleno

    $legajo= $_POST['legajo']; 
    
    $archivo = '../sueldos.csv';
   $arch=fopen($archivo, 'r');
   $bandera=0;
   
   while (!feof($arch)) {
        $linea=fgets($arch);

        if($linea !=''){
            $palabra=explode(';',$linea);
        }

        if($legajo==$palabra[0] ){
            $legajo1=$palabra[0];
            $apellido=$palabra[1];
            $nombre= $palabra[2];
            $sueldo= $palabra[3];
            $bandera=1;

        } 
        
   }
   
   fclose($arch);
   if ($bandera==1) {
    ?>  

<section class="container mt-3">
    <article class="row">
        <article class="col-6 border border-primary text-center">
            <h5>Legajo</h5>
            <p><?php echo $legajo1; ?></p>
        </article>
        <article class="col-6 border border-success text-center">
            <h5>Apellido y Nombre</h5>
            <p><?php echo $apellido . ' ' . $nombre; ?></p>
        </article>
    </article>
    <article class="row">
        <article class="col-12 border border-danger text-center">
            <h5>Sueldo</h5>
            <p><?php echo $sueldo . ' pesos'; ?></p>
        </article>
    </article>
</section>





    <?php
   }else{
    header('refresh:3; url=../index.php');
    echo 'Legajo inexistente';
   } 
   

}

require_once('pie.php');

?>
