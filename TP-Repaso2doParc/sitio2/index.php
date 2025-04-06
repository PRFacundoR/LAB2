<?php
    $ruta = '';
    require_once 'php/encabezado.php';
	require_once 'php/conexion.php';
?>
    <section class="row justify-content-center">
        
        <article class="container mt-4 w-75">
            <table class="table table-striped table-bordered text-center table-fixed">
                <thead class="table-dark">
                <tr>
                    <th class="col-3">Usuario</th>
                    <th class="col-3">Especialidad</th>
                    <th class="col-3">Fecha de Alta</th>
                    <th class="col-3">Foto</th>
                    <th class="col-3">Modificar</th>
                </tr>
                </thead>
                <tbody>
                
                <!-- programar debajo de aquí, debe mostrar los datos de la tabla -->
	<?php			
			$conexion=conectar();
				
			if($conexion){
					
				$consulta='SELECT * FROM periodistas';
				
				$sentencia=mysqli_prepare($conexion,$consulta);
				$eje=mysqli_stmt_execute($sentencia);
				mysqli_stmt_bind_result($sentencia,$id,$usu,$clave,$especialidad,$fecha,$ft);
				
				if($eje){
				
					while( mysqli_stmt_fetch($sentencia)){
						$fechaM=date_create($fecha);
						$fechaN=date_format($fechaM, 'd/m/Y');		
						
						echo'<tr>
							<td>'.$usu.'</td>';
							if($especialidad!=NULL){
							echo '<td>'.$especialidad.'</td>';
							}else{
								echo '<td>Ninguna</td>';
							}
							
							echo'<td>'.$fechaN.'</td>';
						if($ft!=''){	
							echo'<td><img src="img/usuarios/'.$ft.'" alt="Foto de '.$usu.'" class="img-thumbnail img-fluid w-75"></td>';
						}else{
							echo'<td><img src="img/usuarios/sin_imagen.png" alt="Foto de '.$usu.'" class="img-thumbnail img-fluid w-75"></td>';
					
						}	
						echo'<td><a href="php/periodista_modificar.php?id='.$id.'">
						<img src="img/modificar.png" class="img-thumbnail img-fluid w-75"></a></td>
						</tr>';
					}desconectar($conexion);
				}
			}
    ?>            
                </tbody>
            </table>
        </article>
    </section>

<?php
    require_once 'php/pie.php';
?>