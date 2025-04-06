<?php
    $ruta = '../';
    require("encabezado.php");
    
       
                

        

    
?>
<header>
    <?php
    if(!empty($_GET['ftU'] )){
        $ftU=$_GET['ftU'];
    echo ' <img src="../img/usuarios/'.$ftU .' ">';
    }else {
        echo ' <img src="../img/usuarios/usuario_default.png ">';
    }
        if(!empty($_GET['nameU']))
        {
        $nameU=$_GET['nameU'];
        echo '<h3> Nombre de usuario:'.$nameU.'<h3>';
        }
    
    ?>

    
   
</header>
<main class="container">
    <section>
        <article class="row text-center">
            <section class="menu_tmp pt-3 pb-3">
                <?php
                 echo' <a class="btn btn-dark" href="articulo_alta.php?nameU='.$_GET['nameU'].'&'.'ftU='.$_GET['ftU'] .'">+ Alta Articulo</a>'
                ?>
                
            </section>
            <section class="d-flex justify-content-center">
                <table class="table table-bordered table-hover table-striped w-auto">
                    <caption class="caption-top text-center bg-dark text-white">Listado de articulos</caption>
                    <tr>
                        <th class="bg-secondary text-white">Foto</th>
                        <th class="bg-secondary text-white">Producto</th>
                        <th class="bg-secondary text-white">Categoria</th>
                        <th class="bg-secondary text-white">Precio</th>
                        <th class="bg-secondary text-white">eliminar</th>
                        <th class="bg-secondary text-white">modificar</th>
                    </tr>
                    
                    <?php
                        
                        include 'conexion.php';
    
                        $conexion=conectar();
                    
                        if ($conexion) {
                            
                            
                            $consulta= 'SELECT id_articulo,nombre, categoria,precio,foto
                                        FROM articulo';
                    
                            $sentencia= mysqli_prepare($conexion, $consulta);
                            
                            $q= mysqli_stmt_execute($sentencia);
                            mysqli_stmt_bind_result($sentencia,$id,$nameP,$cate,$precio, $foto);
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
                                echo '<td><a  href="articulo_eliminar.php?id='.$id. '&'.'name='.$nameP.'&'.'foto='.$foto. '&'.'nameU='.$_GET['nameU'].'&'.'ftU='.$_GET['ftU'] .'">';
                                echo'<img class="tacho" src="../img/eliminar.png"></a></td>';
                                echo '<td><a href="modificacion-de-articulo.php?id='.$id. '&'.'nameU='.$_GET['nameU'].'&'.'ftU='.$_GET['ftU'] .'">';
                                echo'<img class="tacho" src="../img/modificar.png"></a></td>';
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