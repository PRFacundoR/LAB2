<?php
	$ruta = '../';
    require("encabezado.php");
    
    require( "foto.php");
	include 'conexion.php';

	if(!empty($_GET['cat'])){
		
		
		$_COOKIE[$_SESSION['usuName']]=$_GET['cat'];
		$tiempoExp= time()+30*24*3600;
		
		setcookie($_SESSION['usuName'], $_GET['cat'],$tiempoExp, '/');
		
		
			if (!empty($_COOKIE[$_SESSION['usuName']]) && isset($_COOKIE[$_SESSION['usuName']]) && $_COOKIE[$_SESSION['usuName']]!=='ninguna')
			{
				$conexion=conectar();
				$consulta='SELECT id_articulo, nombre, precio, foto
						FROM articulo
						WHERE categoria = ?';
				mysqli_set_charset($conexion, "utf8");
				$sentencia = mysqli_prepare($conexion, $consulta);
				mysqli_stmt_bind_param($sentencia, 's', $_COOKIE[$_SESSION['usuName']]); 
				mysqli_stmt_execute($sentencia); 
				mysqli_stmt_bind_result($sentencia, $id, $nombre, $precio, $foto); 
			
				echo '<h3>Productos en la categoría: ' . $_COOKIE[$_SESSION['usuName']] . '</h3>';
				echo '<table>';
				echo '<tr><th>Nombre</th><th>Categoría</th><th>Precio</th><th>Foto</th></tr>';
				
				while (mysqli_stmt_fetch($sentencia)) {
			
				echo '<tr>';
				echo '<td>' . $nombre . '</td>';
				echo '<td>' .  $_GET['cat'] . '</td>';
				echo '<td>$AR' . $precio . '</td>';
				echo '<td><img src="../img/articulos/' . $foto. '"></td>';
				echo '</tr>';
				}
				echo '</table>';
				
				
				if($_COOKIE[$_SESSION['usuName']]=='ninguna'){
					unset($_COOKIE[$nombre]);
					setcookie($nombre, '', time() - 3600, '/');
					}
			}
	}
	
	desconectar($conexion);
require("pie.php");
?>