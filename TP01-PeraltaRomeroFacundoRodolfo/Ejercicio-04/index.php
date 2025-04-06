<?php

// Se declara una variable para almacenar el nombre del empleado
$nombre = 'Juan Perez';

// Se definen dos constantes para los porcentajes de descuento
const APORTE_JUBILATORIO = 13; // Porcentaje para el aporte jubilatorio
const OBRA_SOCIAL = 3.5;        // Porcentaje para la obra social

// Se define la variable con el sueldo básico del empleado
$sueldoBasico = 742560;

// Cálculo del monto correspondiente al aporte jubilatorio
$aporteJubi = $sueldoBasico * APORTE_JUBILATORIO / 100;

// Cálculo del monto correspondiente a la obra social
$aporteOS = $sueldoBasico * OBRA_SOCIAL / 100;

// Cálculo del sueldo neto (sueldo básico menos los descuentos)
$sueldoNeto = $sueldoBasico - $aporteJubi - $aporteOS;

// Se incluye un archivo externo que probablemente contiene la cabecera del documento HTML
require_once('php/encabezado.php');

?>

<table>
    <caption><?php echo $nombre?></caption>
    <thead>
       <tr> <th>Concepto</th> <th>Remuneración</th> <th>Descuento</th> </tr>
    </thead>
    <tbody>
        
        <tr>
            <td>Sueldo básico </td>
            <td>$ <?php echo number_format($sueldoBasico, 2, ',' , '.') ;?></td>
            <td></td>
        </tr>

        <tr>
            <td>Aporte Jubilatorio </td>
            <td></td>
            <td>$ <?php echo number_format( $aporteJubi, 2, ',' , '.');?></td>
        </tr>

        <tr>
            <td>Obra social </td>
            <td></td>
            <td>$ <?php echo number_format($aporteOS, 2, ',' , '.');?></td>
        </tr>


        <tr>
            <td><strong>Sueldo Neto </strong> </td>
            <td>$ <?php echo number_format($sueldoNeto, 2, ',' , '.');?></td>
        </tr>

    </tbody>
</table>

<?php require_once ('php/pie.php'); ?>