


    
<?php

if (!empty($_POST['mail']) && !empty($_POST['contrasenia'])) {
    
    $user = $_POST['mail'];     
    $pass = $_POST['contrasenia'];
   
    trim($pass);
    trim($user);

    $NameArch = '../usuarios.txt';
    $archivo = fopen($NameArch, 'r'); // Abrimos el archivo en modo lectura ('r').
    $verificacion=0;

    while(!feof($archivo)){// Leemos el archivo línea por línea hasta el final (fin de archivo).
       
        $linea=fgets($archivo); // Leemos una línea del archivo y la asignamos a la variable $linea.
        
        if ($linea !='') {
            $arrayLinea=explode(';', $linea);// Dividimos la línea leída en un array usando ';' como delimitador.
                                            // $arrayLinea[0] contendrá el mail, $arrayLinea[1] la contraseña, y $arrayLinea[2] la foto.
            
            if($user == $arrayLinea[0] && $pass== $arrayLinea[1]){
              
                $verificacion=1;
                $foto=$arrayLinea[2];
            }
        }
    }
    fclose($archivo);
    if ($verificacion==1) {
        header('refresh:0; url=listado.php?usu='. $user . '&' . 'ft='.$foto);
    }else{
        header('refresh:3; url=index.php');
        echo '<p> Datos incorrectos </p>';
    }

}

    



?>
