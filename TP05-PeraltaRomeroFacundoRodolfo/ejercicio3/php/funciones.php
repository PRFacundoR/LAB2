<?php




function consulta($nombre)
{
    
    $ubicacion='../../ejercicio2/txt/';
    $archivo = 'pagos.txt';
   $arch=fopen($ubicacion.$archivo, 'r');
   $datos1=[];
   
   while (!feof($arch)) {
        $linea=fgets($arch);

        if($linea !=''){
            $datos=explode(';',$linea);
        }

        if($nombre==$datos[0] ){
            $datos1+=[
                $datos[3]=>$datos[4]
              
        ];
        }
           
            
        
        
   }
   fclose($arch);
    return $datos1;
}



?>