<?php
    $ruta = '../';
    require("encabezado.php");
    
       
                

        

    
?>
<header>
    <?php
    if(!empty($_GET['ft'] )){
    echo ' <img src="../img/usuarios/'. $_GET['ft'] .' ">';
    }else {
        echo ' <img src="../img/usuarios/usuario_default.png ">';
    }
    
    
    ?>

    
   
</header>
<main class="container">
    <section>
        <article class="row text-center">
            <section class="menu_tmp pt-3 pb-3">
                <a class="btn btn-dark" href="articulo_alta.php">+ Alta Articulo</a>
            </section>
            <section class="d-flex justify-content-center">
                <table class="table table-bordered table-hover table-striped w-auto">
                    <caption class="caption-top text-center bg-dark text-white">Listado de articulos</caption>
                    <tr>
                        <th class="bg-secondary text-white">Foto</th>
                        <th class="bg-secondary text-white">Producto</th>
                        <th class="bg-secondary text-white">Categoria</th>
                        <th class="bg-secondary text-white">Precio</th>
                    </tr>
                    
                    <?php
                        
                        include 'conexion.php';
    
                        $conexion=conectar();
                    
                        if ($conexion) {
                            
                            
                            $consulta= 'SELECT nombre, categoria,precio,foto
                                        FROM articulo';
                    
                            $sentencia= mysqli_prepare($conexion, $consulta);
                            
                            $q= mysqli_stmt_execute($sentencia);
                            mysqli_stmt_bind_result($sentencia,$nameP,$cate,$precio, $foto);
                            if ($q) {
                                
                             while(mysqli_stmt_fetch($sentencia)){
                                echo'<tr>';
                                echo '<td>';
                                if($foto==''){
                                    echo' <img src="../img/articulos/sin_imagen.png ">';
                                }else {
                                    echo' <img src="../img/articulos/'. $foto .' ">';
                                }
                                echo '</td>';
                                echo '<td>'. $nameP . '</td>';
                                echo '<td>'. $cate . '</td>';
                                echo '<td>'. $precio . '</td>';
                                echo'</tr>';

                                };     
                            
                                desconectar($conexion);
                            }
                                

                        }
                        
                        

                        
                    ?>
                </table>
            </section>
        </article>
    </section>
</main>

<?php
    require("pie.php");
?>