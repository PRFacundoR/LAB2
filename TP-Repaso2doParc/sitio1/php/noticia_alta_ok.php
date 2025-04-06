<?php
    require_once 'conexion.php';

    $conexion = conectar();
	
	if(!empty($_POST['titulo']) && !empty($_POST['contenido']) && !empty($_POST['fecha_publicacion']) && !empty($_POST['categoria']) && $conexion ){
		
		$titulo=$_POST['titulo'];
		$conte=$_POST['contenido'];
		$fecP=$_POST['fecha_publicacion'];
		$categ=$_POST['categoria'];
		
		
		
		if(!empty($_FILES['foto']['size']) ){
			$foto=$_FILES['foto']['name'];
			$carpeta = '../img/';
			
			if(!file_exists($carpeta)){
				mkdir($carpeta);
			}
			$ruta_foto = $carpeta . $foto;
			if(!file_exists($ruta_foto)){
				
				move_uploaded_file($_FILES['foto']['tmp_name'], $ruta_foto);
			}
			
		}else{
			$foto='';
		}//se hace esto de la foto?
		
		$consulta='INSERT INTO noticias(titulo,contenido,foto,categoria,fecha_publicacion) VALUES(?,?,?,?,?) ';
		
		$sentencia=mysqli_prepare($conexion, $consulta);
		mysqli_stmt_bind_param($sentencia,'sssss',$titulo, $conte, $foto ,$categ,$fecP);
		$ejec=mysqli_stmt_execute($sentencia);
		
		if($ejec){
			header("refresh:0; url=../index.php");
		}
		
		desconectar($conexion);
	}else{
		header("refresh:0; url=noticia_alta.php");
	}
	
   

    
    
?>