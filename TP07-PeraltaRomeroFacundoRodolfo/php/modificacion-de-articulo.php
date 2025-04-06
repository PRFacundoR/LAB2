<?php
    $ruta = '../';
    require("encabezado.php");

    include 'conexion.php';
    
    $conexion=conectar();

    if($conexion && !empty($_GET['id'])){
        $id=$_GET['id'];

        $consulta= 'SELECT nombre, categoria, precio, foto
                    FROM articulo
                    WHERE id_articulo= ?';
        
        $sentencia= mysqli_prepare($conexion, $consulta);
        mysqli_stmt_bind_param($sentencia, 'i', $id);
        mysqli_execute($sentencia);
        mysqli_stmt_bind_result($sentencia, $nombre,$cate,$precio,$ft);
        mysqli_stmt_store_result($sentencia);
        $cantFilas=mysqli_stmt_num_rows($sentencia);

        if ($cantFilas>0) {
            mysqli_stmt_fetch($sentencia);
      
?>
<header>
    <?php
    if(!empty($_GET['ftU'] )){
        $ftU=$_GET['ftU'];
    echo ' <img src="../img/usuarios/'. $ftU .' ">';
    }else {
        echo ' <img src="../img/usuarios/usuario_default.png ">';
    }
        if(!empty($_GET['nameU']))
        {
        $nameU=$_GET['nameU'];
        echo '<h3> Nombre de usuario:'.$_GET['nameU'].'<h3>';
        }
    
    ?>

    
   
</header>
<main class="container py-3">
        <section class="d-flex justify-content-center">
            <?php
           echo' <form class="p-4 border rounded w-50" action="aceptar.php?nameU='.$_GET['nameU'].'&'.'ftU='.$_GET['ftU'] .'" method="POST" enctype="multipart/form-data">'
            ?>
            <fieldset>
                    <legend class="text-center mb-4">Alta de Artículo</legend>

                    <label for="nombre" class="form-label">Nombre del artículo</label>
                    <input type="text" value="<?php echo $nombre?>" id="nombre" name="nombre" class="form-control mb-3" >

                    <label for="categoria" class="form-label">Categoría</label>
                    <input type="text" value="<?php echo $cate?>" id="categoria" name="categoria" class="form-control mb-3" >

                    <label for="precio" class="form-label">Precio</label>
                    <input type="number" value="<?php echo $precio?>" step="0.01" id="precio" name="precio" class="form-control mb-3" >

                   <label for="imagen" class="form-label">Subir imagen del artículo</label>
                    <input type="file" id="imagen" name="imagen" class="form-control mb-4" >

                    <input type="hidden" value="<?php echo $id?>" name="id">    
                    <input type="submit" value="aceptar">
                    <?php
                    echo' <a class="btn btn-secondary" href="articulo_listado.php?nameU='.$_GET['nameU'].'&'.'ftU='.$_GET['ftU'] .'">Cancelar</a>'
                    ?>
                </fieldset>
            </form>
        </section>
    </main> 
<?php
    desconectar($conexion);
}

    }
    require("pie.php");
?>
