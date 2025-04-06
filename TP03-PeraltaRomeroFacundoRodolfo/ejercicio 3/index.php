<?php
require_once('php/encabezado.php');
require_once 'php/juegos.php';


Const DESCUENTO=0.20;
Const DESCUENTO1=0.4;
Const DESCUENTO2=0.6;
Const DESCUENTO3=0.7;
Const PRODUCTOS= 1000;



$ventasAOMR=0;
$ventasNBA=0;
$ventasBaldurGate=0;
$ventasFallout76=0;
$ventasCODBO6=0;

$recauAOMR=0;
$recauNBA=0;
$recauBaldurGate=0;
$recauFallout76=0;
$recauCODBO6=0;

    for ($i=0; $i<1000; $i++) { 
        $games= $clave= array_rand($juegos);
        $precioGame=$juegos[$games];
        if ($i < 10) {
            switch ($games) {
                case 'Age Of Mythology Retold':
                    $ventasAOMR++;
                    $recauAOMR = $recauAOMR + $precioGame*DESCUENTO;
                    
                    break;

                case 'NBA 2K25':
                    $ventasNBA++;
                    $recauNBA=$recauNBA + $precioGame*DESCUENTO;
                    
                    break;
                
                case 'Baldurs Gate III':
                    $ventasBaldurGate++;
                    $recauBaldurGate=$recauBaldurGate + $precioGame*DESCUENTO;
                    
                    break;
                
                case 'Fallout 76' :
                    $ventasFallout76++;
                    $recauFallout76= $recauFallout76 + $precioGame*DESCUENTO;
                    
                    break;
                case 'CoD Black Ops 6':
                    $ventasCODBO6++;
                    $recauCODBO6= $recauCODBO6 + $precioGame*DESCUENTO;
                    
                    break;        
            }

        } else if ($i > 10 && $i < 200) {
            switch ($games) {
                case 'Age Of Mythology Retold':
                    $ventasAOMR++;
                    $recauAOMR = $recauAOMR + $precioGame*DESCUENTO1;
                    
                    break;

                case 'NBA 2K25':
                    $ventasNBA++;
                    $recauNBA=$recauNBA + $precioGame*DESCUENTO1;
                    
                    break;
                
                case 'Baldurs Gate III':
                    $ventasBaldurGate++;
                    $recauBaldurGate=$recauBaldurGate + $precioGame*DESCUENTO1;
                    
                    break;
                
                case 'Fallout 76' :
                    $ventasFallout76++;
                    $recauFallout76= $recauFallout76 + $precioGame*DESCUENTO1;
                    
                    break;
                case 'CoD Black Ops 6':
                    $ventasCODBO6++;
                    $recauCODBO6= $recauCODBO6 + $precioGame*DESCUENTO1;
                    
                    break;        
            }

        } else if ($i > 200 && $i < 500) {
            switch ($games) {
                case 'Age Of Mythology Retold':
                    $ventasAOMR++;
                    $recauAOMR = $recauAOMR + $precioGame*DESCUENTO2;
                    
                    break;

                case 'NBA 2K25':
                    $ventasNBA++;
                    $recauNBA=$recauNBA + $precioGame*DESCUENTO2;
                    
                    break;
                
                case 'Baldurs Gate III':
                    $ventasBaldurGate++;
                    $recauBaldurGate=$recauBaldurGate + $precioGame*DESCUENTO2;
                    
                    break;
                
                case 'Fallout 76' :
                    $ventasFallout76++;
                    $recauFallout76= $recauFallout76 + $precioGame*DESCUENTO2;
                    
                    break;
                case 'CoD Black Ops 6':
                    $ventasCODBO6++;
                    $recauCODBO6= $recauCODBO6 + $precioGame*DESCUENTO2;
                    
                    break;        
            }

        } else if ($i > 500) {
            switch ($games) {
                case 'Age Of Mythology Retold':
                    $ventasAOMR++;
                    $recauAOMR = $recauAOMR + $precioGame*DESCUENTO3;
                    
                    break;

                case 'NBA 2K25':
                    $ventasNBA++;
                    $recauNBA=$recauNBA + $precioGame*DESCUENTO3;
                    ;
                    break;
                
                case 'Baldurs Gate III':
                    $ventasBaldurGate++;
                    $recauBaldurGate=$recauBaldurGate + $precioGame*DESCUENTO3;
                   
                    break;
                
                case 'Fallout 76' :
                    $ventasFallout76++;
                    $recauFallout76= $recauFallout76 + $precioGame*DESCUENTO3;
                    
                    break;
                case 'CoD Black Ops 6':
                    $ventasCODBO6++;
                    $recauCODBO6= $recauCODBO6 + $precioGame*DESCUENTO3;
                    
                    break;        
            }
        } 

    }
    $recauT= $recauAOMR+ $recauBaldurGate+ $recauCODBO6+ $recauFallout76+$recauNBA;
   
   
?>
  <section class="col-md-8">
                <table class="table table-bordered">
                    
                    <thead class="table-header">
                        <tr>
                            <th>Juego</th>
                            <th>Cantidad Vendida</th>
                            <th>Monto Recaudado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Age Of Mythology Retold</td>
                            <td><?php echo $ventasAOMR; ?></td>
                            <td>$<?php echo number_format($recauAOMR, 2, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td>NBA 2K25</td>
                            <td><?php echo $ventasNBA; ?></td>
                            <td>$<?php echo number_format($recauNBA, 2, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td>Baldurs Gate III</td>
                            <td><?php echo $ventasBaldurGate; ?></td>
                            <td>$<?php echo number_format($recauBaldurGate, 2, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td>Fallout 76</td>
                            <td><?php echo $ventasFallout76; ?></td>
                            <td>$<?php echo number_format($recauFallout76, 2, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td>CoD Black Ops 6</td>
                            <td><?php echo $ventasCODBO6; ?></td>
                            <td>$<?php echo number_format($recauCODBO6, 2, ',', '.'); ?></td>
                        </tr>
                    </tbody>
                </table>
    <?php

require_once('php/pie.php');
?>