<?php

// Se define una constante para la alícuota del 2.5%
const ALICUOTA = 2.5;

// Se definen las transferencias entrantes
$transfeE1 = 240056;  // Transferencia entrante 1
$transfeE2 = 326700;  // Transferencia entrante 2

// Se calculan las retenciones por Ingresos Brutos (IIBB) aplicando la alícuota a cada transferencia entrante
$transfeE1B = $transfeE1 * ALICUOTA / 100;
$transfeE2B = $transfeE2 * ALICUOTA / 100;

// Se definen las transferencias salientes
$transfeS1 = 90454;   // Transferencia saliente 1
$transfeS2 = 126000;  // Transferencia saliente 2

// Se calcula el saldo final considerando las transferencias entrantes menos las retenciones y las transferencias salientes
$saldoF = $transfeE1 + $transfeE2 - $transfeE1B - $transfeE2B - $transfeS1 - $transfeS2;

// Se incluye un archivo externo, que usualmente contiene la cabecera HTML
require_once('php/encabezado.php');
    




?>

<table>
    <caption>Estado de Cuenta</caption>
    <thead>
       <tr> <th>Concepto</th> <th>Monto</th></tr>
    </thead>
    <tbody>
        
        <tr>
            <td>Transferencia entrante </td>
            <td>+$ <?php echo number_format($transfeE1, 2, ',' , '.') ;?></td>
        </tr>

        <tr>
            <td>Retenciób IIBB </td>
            <td>-$ <?php echo number_format( $transfeE1B, 2, ',' , '.');?></td>
        </tr>

        <tr>
            <td>Transferencia entrante </td>
            <td>+$ <?php echo number_format($transfeE2, 2, ',' , '.');?></td>
        </tr>

        <tr>
            <td>Retenciób IIBB </td>
            <td>-$ <?php echo number_format($transfeE2B, 2, ',' , '.');?></td>
        </tr>

        <tr>
            <td>Transferencia saliente </td>
            <td>-$ <?php echo number_format($transfeS1, 2, ',' , '.');?></td>
        </tr>

        <tr>
            <td>Transferencia saliente </td>
            <td>-$ <?php echo number_format($transfeS2, 2, ',' , '.');?></td>
        </tr>

        <tr>
            <td>Saldo </td>
            <td>$ <?php echo number_format($saldoF, 2, ',' , '.');?></td>
        </tr>

    </tbody>
</table>

<?php require_once ('php/pie.php'); ?>