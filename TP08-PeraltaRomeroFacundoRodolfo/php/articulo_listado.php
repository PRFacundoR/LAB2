<?php
    $ruta = '../';
    require("encabezado.php");
    require("foto.php");
    include 'conexion.php';
?>

<main class="container">
    <section>
        <article class="row text-center">
            <section class="menu_tmp pt-3 pb-3 d-flex justify-content-between">
                <?php
                if ($_SESSION['admin'] == 'Administrador') {
                    echo '<a class="btn btn-dark" href="articulo_alta.php">+ Alta Articulo</a>';
                } else {
                    echo '<a class="btn btn-dark" href="mostrar_carrito.php">Mi carrito</a>';
                }
                ?>
                <form action="" method="get">
                    <input type="search" id="busq" name="buscar" placeholder="Buscar">
                    <input type="submit" value="Buscar">
                </form> 
                <article class="menu">
                    <nav id="navbar">
                        <form action="filtrar.php" method="GET">
                            <label for="category">Selecciona una categoría:</label>
                            <select name="cat">
                                <option value="ninguno">Ninguno</option>
                                <option value="celular">Celulares</option>
                                <option value="lavarropas">Lavarropas</option>
                                <option value="Televisores">TVs</option>
                            </select>
                            <button type="submit">Filtrar</button>
                        </form>
                    </nav>
                </article>
            </section>
            <section class="d-flex justify-content-center">
                <table class="table table-bordered table-hover table-striped w-auto">
                    <caption class="caption-top text-center bg-dark text-white">Listado de articulos</caption>
                    <tr>
                        <th class="bg-secondary text-white">Foto</th>
                        <th class="bg-secondary text-white">Producto</th>
                        <th class="bg-secondary text-white">Categoria</th>
                        <th class="bg-secondary text-white">Precio</th>
                        <?php
                        if ($_SESSION['admin'] == 'Administrador') {
                            echo '<th class="bg-secondary text-white">Eliminar</th>';
                            echo ' <th class="bg-secondary text-white">Modificar</th>';
                        } else {
                            echo ' <th class="bg-secondary text-white">Comprar</th>';
                        }
                        ?>
                    </tr>
                    
                    <?php
                    // Conexión a la base de datos
                    $conexion = conectar();

                    if (!empty($_GET['buscar'])) { 
                        $cat = '%' . $_GET['buscar'] . '%';
                        $nom = '%' . $_GET['buscar'] . '%';

                        // Consulta con búsqueda
                        $sql = 'SELECT id_articulo, nombre, categoria, precio, foto
                                FROM articulo
                                WHERE categoria LIKE ? OR nombre LIKE ?';
                        $sent = mysqli_prepare($conexion, $sql);
                        mysqli_stmt_bind_param($sent, 'ss', $cat, $nom);
                        mysqli_stmt_execute($sent);
                        mysqli_stmt_bind_result($sent, $id, $nameP, $cate, $precio, $foto);

                        while (mysqli_stmt_fetch($sent)) {
                            echo '<tr>';
                            echo '<td>';
                            if ($foto == '') {
                                echo '<img src="../img/articulos/sin_imagen.png ">';
                            } else {
                                echo '<img src="../img/articulos/' . $foto . ' ">';
                            }
                            echo '</td>';
                            echo '<td>' . $nameP . '</td>';
                            echo '<td>' . $cate . '</td>';
                            echo '<td>' . $precio . '</td>';

                            if ($_SESSION['admin'] == 'Administrador') {
                                echo '<td><a href="articulo_eliminar.php?id=' . $id . '&name=' . $nameP . '">';
                                echo '<img class="tacho" src="../img/eliminar.png"></a></td>';
                                echo '<td><a href="modificacion-de-articulo.php?id=' . $id . '">';
                                echo '<img class="lapiz" src="../img/modificar.png"></a></td>';
                            } else {
                                echo '<td><a href="articulo_carrito.php?id=' . $id . ' ">';
                                echo '<img class="tacho" src="../img/carrito.png"></a></td>';
                            }
                            echo '</tr>';
                        }
                    } else { 
                        // Consulta sin búsqueda
                        $consulta = 'SELECT id_articulo, nombre, categoria, precio, foto FROM articulo';
                        $sentencia = mysqli_prepare($conexion, $consulta);
                        mysqli_stmt_execute($sentencia);
                        mysqli_stmt_bind_result($sentencia, $id, $nameP, $cate, $precio, $foto);

                        while (mysqli_stmt_fetch($sentencia)) {
                            echo '<tr>';
                            echo '<td>';
                            if ($foto == '') {
                                echo '<img src="../img/articulos/sin_imagen.png ">';
                            } else {
                                echo '<img src="../img/articulos/' . $foto . ' ">';
                            }
                            echo '</td>';
                            echo '<td>' . $nameP . '</td>';
                            echo '<td>' . $cate . '</td>';
                            echo '<td>' . $precio . '</td>';

                            if ($_SESSION['admin'] == 'Administrador') {
                                echo '<td><a href="articulo_eliminar.php?id=' . $id . '&name=' . $nameP . '">';
                                echo '<img class="tacho" src="../img/eliminar.png"></a></td>';
                                echo '<td><a href="modificacion-de-articulo.php?id=' . $id . '">';
                                echo '<img class="lapiz" src="../img/modificar.png"></a></td>';
                            } else {
                                echo '<td><a href="articulo_carrito.php?id=' . $id . ' ">';
                                echo '<img class="tacho" src="../img/carrito.png"></a></td>';
                            }
                            echo '</tr>';
                        }
                    }

                    desconectar($conexion);
                    ?>
                </table>
            </section>
        </article>
    </section>
</main>

<?php
    require("pie.php");
?>
