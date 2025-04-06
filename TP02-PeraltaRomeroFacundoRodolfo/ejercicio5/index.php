<?php

    require_once('php/encabezado.php');

    $num1=mt_rand(1, 12);
    $num2=mt_rand(1, 12);

    
    if( $num1>9 && $num2<10){
        $sum= $num2 + 0.5;
    } else if($num2>9 && $num1<10){
        $sum= $num1 + 0.5;
    }else if($num1>9 && $num2>9){
        $sum= 0.5 + 0.5;
    }
    else{
        $sum = $num1 + $num2;
    }   
      
    switch ($num1) {
        case 10 :
            $num1 = 'sota';
            break;
            case 11 :
                $num1 = 'caballo';
                break;
                case 12 :
                    $num1 = 'rey';
                    break;
                    
        default:
            $num1;
            break;
    }
    switch ($num2) {
        case 10 :
            $num2 = 'sota';
            break;
            case 11 :
                $num2 = 'caballo';
                break;
                case 12 :
                    $num2 = 'rey';
                    break;
                    
        default:
            $num2;
            break;
    }


    if($sum== 9.5 ){
        echo '<p>Naipe 1: '.$num1 . '</p>';
        echo '<p>Naipe 2: '. $num2 . '</p>';  
        echo '<h2>GANADOR</h2>';
    }else{
        echo '<p>Naipe 1: '. $num1 . '</p>';
        echo '<p>Naipe 2: '. $num2 . '</p>'; 
        echo '<h2> PUNTAJE OBTENIDO: '.$sum. '</h2>';
    }
?>
 
           

<?php
    require_once('php/pie.php');
?>
