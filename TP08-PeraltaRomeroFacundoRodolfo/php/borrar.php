<?php
            include 'conexion.php';
    
            $conexion=conectar();
        
            if ($conexion && !empty($_GET['id'])){
                $id=$_GET['id'];
        
                $consulta='DELETE FROM articulo
                            WHERE id_articulo=?';
        
                $sentencia=mysqli_prepare($conexion,$consulta);
                mysqli_stmt_bind_param($sentencia,'i',$id);
                $resultado=mysqli_stmt_execute($sentencia);
        
                if($resultado){
                        header('refresh:3; url=articulo_listado.php');
                        echo '<p>eliminacion exitosa</p>';
                        
                }else {
                    
                    echo '<p> no eliminacion exitosa</p>';
                }
                desconectar($conexion);
            }

  
    
?>