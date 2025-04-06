<?php

if (!empty($_POST['username']) && !empty($_POST['password'])) {
    include 'conexion.php';

    $conexion=conectar();

    if ($conexion) {
        $name=$_POST['username'];
        $contra=sha1($_POST['password']);
        
        $consulta= 'SELECT usuario,pass,foto
                    FROM usuario
                    WHERE usuario=? AND pass=?';

        $sentencia= mysqli_prepare($conexion, $consulta);
        mysqli_stmt_bind_param($sentencia, 'ss',$name, $contra);
        $q= mysqli_stmt_execute($sentencia);
        mysqli_stmt_bind_result($sentencia,$usuarioDB,$claveBD,$ftDB); 
        
        if ($q) {
            
            mysqli_stmt_fetch($sentencia);     
            
            if($name==$usuarioDB && $contra==$claveBD){
                header('refresh:0;url=articulo_listado.php?ftU='.$ftDB.'&'.'nameU='.$usuarioDB);
                desconectar($conexion);
            }else {
            header("refresh:3; url=../index.php");
            echo '<p> Error </p>';
        }
            
        }
    }
    
       
    



    
}

?>