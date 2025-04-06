<?php
    $ruta = '';
    require_once 'php/encabezado.php';
	require_once 'php/conexion.php';//paso 1
?>
    <section class="row justify-content-center">
        <!-- programar debajo de aquí, debe mostrar los datos de la tabla -->
<?php		
		$conexion=conectar();
		
		if($conexion){
			$consulta='SELECT * FROM noticias';
			
			$sentencia=mysqli_prepare($conexion, $consulta);
			$ejecucion=mysqli_stmt_execute($sentencia);
			mysqli_stmt_bind_result($sentencia,$id,$titulo,$contenido,$foto,$cate,$fechaP);
		
			if($ejecucion){
				while(mysqli_stmt_fetch($sentencia)){
			
			$fechaN=date_create($fechaP);
			$fecha=date_format($fechaN,'d/m/Y');
			echo'<article class="card mb-4 mx-4 col-md-3">
				<section class="card-body">
					<h2 class="card-title">'.$titulo.'</h2>
					<p class="card-subtitle mb-2">Fecha:'.$fecha.'</p>
					<img src = "img/'.$foto.'" class="card-img-top">
					<p class="card-text">'.$contenido.'</p>
				</section>
			</article>';//foto vacia?
			
			}
			}
			desconectar($conexion);
		}
?>		
    </section>
	
	
<?php
    require_once 'php/pie.php';
?>