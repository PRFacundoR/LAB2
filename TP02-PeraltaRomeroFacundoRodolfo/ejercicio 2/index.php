<?php
require_once('php/encabezado.php');
const PATENTE= 'AG';
$numerRan= mt_rand(0,999);
$letra1= chr(mt_rand(65,90));
$letra2= chr(mt_rand(65,90));
 
if ($numerRan<10) {
    $numerRan = '00'. $numerRan;
 } else if( $numerRan>=10 && $numerRan<100 ){
    $numerRan = '0'. $numerRan;
 }else{
   $numerRan;
 }

 echo '<p>Patente: '. PATENTE . $numerRan . $letra1 . $letra2. '</p>';  
?>
<?php
    require_once('php/pie.php');
?>
