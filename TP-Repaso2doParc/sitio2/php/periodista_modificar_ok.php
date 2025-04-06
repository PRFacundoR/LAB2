<?php
   
	require_once 'conexion.php';
	
	
	$conexion=conectar();
				
			if(!empty($_GET['id']) && !empty($_POST['usuario']) && !empty($_POST['especialidad']) && !empty($_POST['fecha_alta']) && $conexion){
				

				$id=$_GET['id'];
				$usuario=$_POST['usuario'];
				$espec=$_POST['especialidad'];
				$fech=$_POST['fecha_alta'];

				$consulta='UPDATE periodistas SET usuario=?, especialidad=?, fecha_alta=? WHERE id_periodista=? ';
				$sentencia=mysqli_prepare($conexion,$consulta);
				mysqli_stmt_bind_param($sentencia,'sssi',$usuario,$espec,$fech,$id);
				$eje=mysqli_stmt_execute($sentencia);
				
				if ($eje) {
                    header('refresh:0; url=../index.php');
                    echo'<h3>Actualizacion Exitosa</h3>';
                }
				
			}
?>