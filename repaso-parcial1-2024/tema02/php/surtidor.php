<?php
    $ruta = '../';
    require_once '../html/header.html';

/* 1-a)	Controle los datos que provienen del formulario que se encuentra en el archivo index.php. */

/* 1-b) Llame a la función fnCobro ($tipo, $litros), que se encontrará en el archivo 
funciones.php */ 

/* 1-d) A continuación, en surtidor.php, mostrar DNI, tipo de combustible, litros y precio total.*/

    if(!empty($_POST['combustible']) && !empty($_POST['dni']) && !empty($_POST['litros'])){

    require_once 'funciones.php';
        $tipo=$_POST['combustible'];
        $litros=$_POST['litros'];

        echo '<p>El precio a pagar es igual a $'.$cargo=fnCobro ($tipo, $litros).'</p>';
        
    }
    require_once '../html/footer.html';
?>