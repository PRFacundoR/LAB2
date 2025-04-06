<?php
	require_once'conexion.php';
	
	$conexion=conectar();
	
	if(!empty($_POST['usuario']) && !empty($_POST['clave']) && $conexion){
		session_start();
		
		$usu=$_POST['usuario'];
		$clave=sha1($_POST['clave']);
		
		$consulta='SELECT usuario,foto,clave FROM periodistas WHERE usuario=? AND clave=?';
		
		$sentencia=mysqli_prepare($conexion,$consulta);
		mysqli_stmt_bind_param($sentencia, 'ss', $usu, $clave);
		$eje=mysqli_stmt_execute($sentencia);
		mysqli_stmt_bind_result($sentencia,$usuBD, $fotoBD,$claveBD);
		
		if($eje && mysqli_stmt_fetch($sentencia)){
			
			if($usu==$usuBD && $clave==$claveBD){
				
				header("refresh:0;url=periodista_verificado.php");
				$_SESSION['foto']=$fotoBD;
				$_SESSION['usu']=$usuBD;
				desconectar($conexion);
			}
		}else{
			header("refresh:0;url=ingreso.php");
			}
		
	}



?>