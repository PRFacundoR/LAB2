<?php
require_once("encabezado.php");

    if (!empty($_POST['nombre']) && !empty($_POST['categoria'])  &&  !empty($_POST['precio']) && !empty($_FILES['imagen']['size'])) {
        include 'conexion.php';
        $conexion=conectar();

        if($conexion){

            $name=$_POST['nombre'];
            $cate=$_POST['categoria'];
            $prec=$_POST['precio'];
            $img=$_FILES['imagen']['name'];

            $consulta= 'INSERT INTO articulo(nombre,categoria,precio,foto)
                        VALUES (?,?,?,?)';

            $sentencia= mysqli_prepare($conexion, $consulta);
            mysqli_stmt_bind_param($sentencia,'ssis',$name, $cate,$prec,$img);
            $q= mysqli_stmt_execute($sentencia);

            if ($q) {
                $origen = $_FILES['imagen']['tmp_name'];
                $destino = '../img/articulos/' . $img;
                $subir = move_uploaded_file($origen, $destino);
                header('refresh:3; url=articulo_listado.php?nameU='.$_GET['nameU'].'&'.'ftU='.$_GET['ftU']);
                echo '<p> guardado exitoso</p>'; 
               

            }else {
                echo '<p> error al guardar</p>';
            }

            desconectar($conexion);
        }
        
        
    }

    require_once("pie.php");

?>