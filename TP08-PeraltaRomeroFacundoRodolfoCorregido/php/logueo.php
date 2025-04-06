<?php

if (!empty($_POST['username']) && !empty($_POST['password'])) {
	session_start();
    include 'conexion.php';

    $conexion=conectar();
    
    if ($conexion) {
        $name=$_POST['username'];
        $contra=sha1($_POST['password']);
        
        $consulta= 'SELECT usuario,pass,foto,tipo
                    FROM usuario
                    WHERE usuario=? AND pass=?';

        $sentencia= mysqli_prepare($conexion, $consulta);
        mysqli_stmt_bind_param($sentencia, 'ss',$name, $contra);//el parama se usa
        $q= mysqli_stmt_execute($sentencia);
        mysqli_stmt_bind_result($sentencia,$usuarioDB,$claveBD,$ftDB,$admin); 
        
        if ($q) {
            
            mysqli_stmt_fetch($sentencia);     
            
            if($name==$usuarioDB && $contra==$claveBD){
                header("refresh:0;url=articulo_listado.php");
				
				$_SESSION['usuName']=$usuarioDB;
				$_SESSION['usuft']=$ftDB;
				$_SESSION['admin']=$admin;
                desconectar($conexion);
            }else {
            header("refresh:0; url=../index.php");
            
			}
            
        }
    }
    
       
    



    
}

?>