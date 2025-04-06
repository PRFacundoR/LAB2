<?php
require_once('php/encabezado.php');
?>

            <?php
    
            $carton=[];

            for ($i = 0; $i < 10; $i++) { 
              do {
                  $numeros = mt_rand(1, 22);  
              } while (in_array($numeros, $carton));
              
              $carton[] = $numeros;  
          }
  
          
          sort($carton);
  
          
          for ($i = 0; $i < 10; $i++) {
              if ($i % 2 == 0) {
                  echo '<tr>';
              }
  
              echo '<td>' . $carton[$i] . '</td>';
  
              if ($i % 2 == 1) {
                  echo '</tr>';
              }
          }
            ?>
        </tbody>
    </table>
</article>

<article class="col-md-6 mb-4">
                <h2 class="h4 text-center mb-3">Sorteo y Aciertos</h2>
                <table class="table table-bordered table-striped text-center">
        <tbody >
            <?php
                $cartonWin=[];
                for ($z=0; $z <10 ; $z++) { 
                    do {
                    $numerosWin=mt_rand(1,22);
                } while (in_array($numerosWin,$cartonWin));
                    
                  $cartonWin[$z]=$numerosWin;
                }

                sort($cartonWin);

            
              for ($j=0; $j < 2 ; $j++) { 
                
                echo '<tr>'; 
                
               
              for ($z=0; $z < 5 ; $z++) { 
                 
                if ($j % 2 == 0) {
                   echo '<td>' . $cartonWin[$z] . '</td>'; 
                } else {
                    echo '<td>' . $cartonWin[$z+5] . '</td>';
                }
                  
                  
              }

                echo'</tr>';
            }



            ?>
        </tbody>
    </table>
<?php
    $aciertos=0;
    foreach ($carton as $puntos) {
        if (in_array($puntos, $cartonWin)) {
            $aciertos++;
        }
        
    }if ($aciertos===10) {
            echo '<p> Usted es el ganador del pozo de $35.000.000.</p>';
        }else {
            echo '<p>Cantidad de aciertos: '. $aciertos. '</p>';
        }
?>
    

<?php

require_once('php/pie.php');
?>