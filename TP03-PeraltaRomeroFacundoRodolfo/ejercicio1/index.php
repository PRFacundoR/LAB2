<?php
require_once('php/encabezado.php');
?>


<article>
<?php

$a= mt_rand(8,16);
$contra = "";
for ($i=0; $i < $a ; $i++) {
    $caracteres=chr(mt_rand(48,122));
    
   
    
    if( $caracteres < chr(58)  ){

        $contra = $contra . $caracteres;

    } else if (  $caracteres > chr(64) && $caracteres < chr(91)) {

        $contra = $contra . $caracteres;

    } else if ( $caracteres > chr(96)) {

        $contra = $contra . $caracteres;
    } else{
        $i--;
    }
    

}
    
    



?>
</article>

<?php
echo '<p> tu contraseña es: ' . $contra . '</P>';
require_once('php/pie.php');
?>