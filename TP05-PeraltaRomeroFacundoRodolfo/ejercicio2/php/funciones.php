<?php

const PH = 4000;


function pagoDiario($horas, $dias, $turno)
{

    
    
       
        switch ($dias) {
            case 'lunes':
            case 'martes':
            case 'miercoles':
            case 'jueves':     
            case 'viernes':                
                
                if ($turno =='nocturno'){
                    $pago= $horas* PH* 1.28;
                }else{
                    $pago= $horas* PH;
                }
                break;

            case 'sabado':
                
                if ($turno =='nocturno'){
                    $pago= $horas* PH* 1.12 * 1.28;
                }else{
                  $pago= $horas * PH*1.12;  
                }
                break;

            
            case 'domingo':
                
                if ($turno =='nocturno'){
                    $pago= $horas* PH* 1.26 * 1.28;
                }else{
                    $pago= $horas * PH * 1.26 ;
                }
                break;
        }
       
    
    
    return $pago;
}



?>