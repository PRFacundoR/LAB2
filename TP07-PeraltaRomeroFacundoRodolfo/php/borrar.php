<?php
            include 'conexion.php';
    
            $conexion=conectar();
        
            if ($conexion && !empty($_GET['id'])){
                $id=$_GET['id'];
                
                if( !empty($_GET['foto'])) {
                    $foto=$_GET['foto'];
                    }else{
                        $foto='';
                    }
                

                $consulta='DELETE FROM articulo
                            WHERE id_articulo=?';
        
                $sentencia=mysqli_prepare($conexion,$consulta);
                mysqli_stmt_bind_param($sentencia,'i',$id);
                $resultado=mysqli_stmt_execute($sentencia);
                $origenImg='../img/articulos/'.$foto;
                if($resultado){
                    header('refresh:3; url=articulo_listado.php?nameU='.$_GET['nameU'].'&'.'ftU='.$_GET['ftU']);
                        
                        if ($foto!='') {
                            unlink($origenImg);
                        }
                    
                        echo '<p>eliminacion exitosa</p>';
                        
                }else {
                    
                    echo '<p> no eliminacion exitosa</p>';
                }
                desconectar($conexion);
            }

  
    
?>