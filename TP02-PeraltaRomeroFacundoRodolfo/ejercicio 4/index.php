<?php
require_once('php/encabezado.php');
$pesos= mt_rand(200000, 400000);
const COMI = 0.90;
const COMI1 = 0.95;
const CRIPTO = 1322.74;
echo '<p> Dinero disponible: $'. $pesos . '</p>';
if($pesos<300000){
  $pesos1= $pesos*COMI;
  echo '<p> comision: 0.10% </p>';
  echo '<p> Dinero Restante: $'.number_format($pesos1, 2, ',', '.'). '</p>';
}else{
  $pesos1=$pesos*COMI1;
  echo '<p> comision: 0.05%</p>';
  echo '<p> Dinero Restante: $'. number_format($pesos1, 2, ',', '.') . '</p>';
}

$ustd=$pesos1/CRIPTO;


echo '<p> Cotizacion USTD: $'. CRIPTO . '</p>';
echo '<p> USTD adquiridos: '. number_format($ustd, 4, ',', '.') . '</p>';


?>
<?php
    require_once('php/pie.php');
?>
