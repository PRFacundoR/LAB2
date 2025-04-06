<?php

$ruta = '../';
    require("encabezado.php");
    
    require( "foto.php");
   include 'conexion.php';
    
if(!empty($_SESSION['carrito'])){
		
		$conexion= conectar();
		 
		$consulta= 'SELECT nombre,categoria,precio,foto
					FROM articulo
					WHERE id_articulo=?';
					
		$sentencia=mysqli_prepare($conexion, $consulta);
		mysqli_stmt_bind_param($sentencia, 'i',$id);
		mysqli_stmt_bind_result($sentencia,$nombre,$cate,$precio,$foto);
		echo '<main>';
		echo '<h3>Su carrito contiene:</h3>';
		echo '<table style="width:80%; margin:0 auto">
			<tr><th>Nombre</th><th>Categoria</th><th>Precio</th><th>Foto</th><th>Cantidad</th><th>Subtotal</th></tr>';
			
			$suma=0;
			
			foreach($_SESSION['carrito'] as $id => $cant){
				
				mysqli_stmt_execute($sentencia);
			
				mysqli_stmt_fetch($sentencia);
				
				$carrito=$_SESSION['carrito'];
				
				echo'<tr><td class="col1">'.$nombre.'</td>';
				
				echo'<td class="col1">'.$cate.'</td>';
				
				echo'<td class="precio-s col1">$AR'.$precio.'</td>';
				
				echo'<td><img class="prod-s" src="../img/articulos/'.$foto.'"></td>';
				
				echo'<td>'.$cant.'</td>';
				
				echo'<td>$AR'.number_format($precio*$cant,2,",",".").'</td></tr>';
				$suma+=$cant*$precio;
			}
			desconectar($conexion);
			echo '</table>';
			echo '<h3 class="total">Total:$AR'.number_format($suma,2,",",".").'</h3>';
		
	}
	
	
require("pie.php");
?>