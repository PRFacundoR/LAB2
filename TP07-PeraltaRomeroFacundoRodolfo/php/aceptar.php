    <?php

        include 'conexion.php';
        $conexion=conectar();
        if($conexion && !empty($_FILES['imagen']['size']) ){

            $name= $_POST['nombre'];
            $cate= $_POST['categoria'];
            $precio= $_POST['precio'];
            $img= $_FILES['imagen']['name'];
            $id= $_POST['id'];

            $consulta= 'UPDATE articulo
                        SET nombre=?, categoria=?, precio=?, foto=?
                        WHERE id_articulo=?';

                $sentencia= mysqli_prepare($conexion,$consulta);
                mysqli_stmt_bind_param($sentencia,'ssisi',$name,$cate,$precio,$img,$id);
                $estado=mysqli_stmt_execute($sentencia);

                $origen = $_FILES['imagen']['tmp_name'];
                $destino = '../img/articulos/' . $img;
                $subir = move_uploaded_file($origen, $destino);

                if ($estado && $subir) {
                    header('refresh:3; url=articulo_listado.php?nameU='.$_GET['nameU'].'&'.'ftU='.$_GET['ftU']);
                    echo'<h3>Actualizacion Exitosa</h3>';
                }else {
                    echo'<h3>No actualizacion Exitosa</h3>';
                }
                desconectar($conexion);
        }else{
            
            $name= $_POST['nombre'];
            $cate= $_POST['categoria'];
            $precio= $_POST['precio'];
            $img=$_FILES['imagen']['name'];
            $id= $_POST['id'];

            $consulta0= 'SELECT foto
                        FROM articulo
                        WHERE id_articulo=?';
            
            $sentencia0 = mysqli_prepare($conexion, $consulta0);;
            mysqli_stmt_bind_param($sentencia0, 'i', $id);
            mysqli_stmt_execute($sentencia0);
            mysqli_stmt_bind_result($sentencia0, $imgActual);
            mysqli_stmt_fetch($sentencia0);
            mysqli_stmt_close($sentencia0);





            $consulta= 'UPDATE articulo
                        SET nombre=?, categoria=?, precio=?, foto=?
                        WHERE id_articulo=?';

                $sentencia= mysqli_prepare($conexion,$consulta);
                mysqli_stmt_bind_param($sentencia,'ssisi',$name,$cate,$precio,$img,$id);
                $estado=mysqli_stmt_execute($sentencia);
                if($imgActual){
                unlink('../img/articulos/'.$imgActual);
                }   

                if ($estado ) {
                    header('refresh:3; url=articulo_listado.php?nameU='.$_GET['nameU'].'&'.'ftU='.$_GET['ftU']);
                    echo'<h3>Actualizacion Exitosa</h3>';
                    
                }else {
                    echo'<h3>No actualizacion Exitosa</h3>';
                }
                desconectar($conexion);
        }


    ?>
