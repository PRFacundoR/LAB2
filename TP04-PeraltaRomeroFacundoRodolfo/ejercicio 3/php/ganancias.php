
<?php
require_once ('../intereses/encabezado.php');
$depo=$_POST['deposito'];
$day=$_POST['dias'];

require_once 'funciones.php';

if (!empty($_POST['deposito']) && !empty($_POST['dias']) ){

    $interes=calcularIntereses($depo, $day);
    $saldoF= $interes+$depo;
}

echo '<p class="alert alert-info"> Tus intereses son: $' .number_format($interes,3,',','.').'</p>' ;
echo '<p class="alert alert-info"> Tu dinero seria: $' .number_format($saldoF,3,',','.').'</p>' ;
require_once ('../intereses/pie.php');
?>