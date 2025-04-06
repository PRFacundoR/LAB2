<?php
require_once('php/encabezado.php');
?>


<table >
    
    <tbody>

    <?php
        $casillas=[];
    
        for ($i=1; $i <11 ; $i++) { 
            for ($j=1; $j <11 ; $j++) { 
                $casillas[$i][$j]='-';

            }
        }

        for ($z=1; $z < 11 ; $z++) { 
            
            $casillas[mt_rand(1,10)][mt_rand(1,10)]='B';
        }
        
        

        foreach ($casillas as $filas) {
            echo '<tr>';
            foreach ($filas as $columnas) {
                echo '<td>';
                    if ($columnas == '-') {
                echo '<img src="img/vacio.jpg">';
                } else{
                echo '<img src="img/mina.jpg">';
                    
                }
                echo '</td>';
                
            }
        
            echo '</tr>';
        }
        
    ?>
    </tbody>
</table>
 </article>
 </section>

  <section>
    <article>
<?php
        $bomba='';
        $puntos=0;
        while($bomba != 'B'){
            $num1=mt_rand(1,10);
            $num2=mt_rand(1,10);
            if($casillas[$num2][$num1]== '-'){
                $puntos++;
                $bomba= $casillas[$num2][$num1];
            } else{
                $bomba= $casillas[$num2][$num1];
                echo '¡Has encontrado una bomba en las coordenadas '. 'fila: ' .$num2. ', columna: '. $num1 . '<br>';
            }

        }
?>
</article>
<article class="score-bar text-center">
                    <span>Tu puntaje es: <?php echo $puntos; ?></span>
                </>
            
        </section>
    </main>
<?php

require_once('php/pie.php');
?>    