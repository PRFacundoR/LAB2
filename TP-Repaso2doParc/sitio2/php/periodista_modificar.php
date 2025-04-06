<?php
    $ruta = '../';
    require_once 'encabezado.php';
	require_once 'conexion.php';
?>
		<?php
		
		$conexion=conectar();
				
			if(!empty($_GET['id']) && $conexion){
				

				$id=$_GET['id'];	
				$consulta='SELECT usuario,especialidad,fecha_alta FROM periodistas WHERE id_periodista=?';
				
				$sentencia=mysqli_prepare($conexion,$consulta);
				mysqli_stmt_bind_param($sentencia,'i',$id);
				$eje=mysqli_stmt_execute($sentencia);
				mysqli_stmt_bind_result($sentencia,$usu,$especialidad,$fecha);
				
				if($eje){
					mysqli_stmt_fetch($sentencia);
						
						echo'<article class="container mt-4">
						  <h2>Formulario de Modificación</h2>
						  <form action="periodista_modificar_ok.php?id='.$id.'" method="post" enctype="multipart/form-data" class="container mt-3 p-4 col-md-3 bg-info bg-gradient">
							<section class="mb-3">
							  <label for="usuario" class="form-label">Usuario</label>
							  <input type="text" class="form-control" id="usuario" name="usuario" value="'.$usu.'">
							</section>
							<section class="mb-3">
							  <label for="especialidad" class="form-label">Especialidad</label>
							  <input type="text" class="form-control" id="especialidad" name="especialidad" value="'.$especialidad.'">
							</section>
							<section class="mb-3">
							  <label for="fecha_alta" class="form-label">Fecha</label>
							  <input type="date" class="form-control" id="fecha_alta" name="fecha_alta" value="'.$fecha.'">
							</section>
							<input type="submit" class="btn btn-primary" value="Actualizar">
						  </form>
						</article>';
				desconectar($conexion);		
				}
			}			
?>
<?php
    require_once 'pie.php';
?>