<?php
    $ruta = '../';
    require("encabezado.php");
    include 'conexion.php';
    include 'foto.php';
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
                        <form action="" method="GET">
                            <label for="category">Selecciona una categoría:</label>
                            <select name="cat">
                                <option value="ninguno">Ninguno</option>
                                <option value="celulares">Celulares</option>
                                <option value="lavarropas">Lavarropas</option>
                                <option value="Televisores">Televisores</option>
                            </select>
                            <button type="submit">Filtrar</button>
                        </form>
                    </nav>
                </article>
            </section>

            <section class="d-flex justify-content-center">
                <table class="table table-bordered table-hover table-striped w-auto">
                    <caption class="caption-top text-center bg-dark text-white">Listado de artículos</caption>
                    <tr>
                        <th class="bg-secondary text-white">Foto</th>
                        <th class="bg-secondary text-white">Producto</th>
                        <th class="bg-secondary text-white">Categoría</th>
                        <th class="bg-secondary text-white">Precio</th>
                        <?php
                        if ($_SESSION['admin'] == 'Administrador') {
                            echo '<th class="bg-secondary text-white">Eliminar</th>';
                            echo '<th class="bg-secondary text-white">Modificar</th>';
                        } else {
                            echo '<th class="bg-secondary text-white">Comprar</th>';
                        }
                        ?>
                    </tr>

                    <?php
                    $conexion = conectar();

                    // Filtrar por categoría
                    if (!empty($_GET['cat']) && $_GET['cat'] !== 'ninguno') {
                        $categoria = $_GET['cat'];
                        setcookie($_SESSION['usuName'], $categoria, time() + (30 * 24 * 3600), '/');
                        $consulta = 'SELECT id_articulo, nombre, categoria, precio, foto FROM articulo WHERE categoria = ?';
                        $sentencia = mysqli_prepare($conexion, $consulta);
                        mysqli_stmt_bind_param($sentencia, 's', $categoria);
                    } 
                    // Buscar productos
                    elseif (!empty($_GET['buscar'])) {
                        $buscar = '%' . $_GET['buscar'] . '%';
                        $consulta = 'SELECT id_articulo, nombre, categoria, precio, foto FROM articulo WHERE nombre LIKE ? OR categoria LIKE ?';
                        $sentencia = mysqli_prepare($conexion, $consulta);
                        mysqli_stmt_bind_param($sentencia, 'ss', $buscar, $buscar);
                    } 
                    // Sin filtros ni búsquedas
                    else {
                        $consulta = 'SELECT id_articulo, nombre, categoria, precio, foto FROM articulo';
                        $sentencia = mysqli_prepare($conexion, $consulta);
                    }

                    // Ejecutar y procesar resultados
                    mysqli_stmt_execute($sentencia);
                    mysqli_stmt_bind_result($sentencia, $id, $nameP, $cate, $precio, $foto);

                    while (mysqli_stmt_fetch($sentencia)) {
                        echo '<tr>';
                        echo '<td>';
                        if (empty($foto)) {
                            echo '<img src="../img/articulos/sin_imagen.png">';
                        } else {
                            echo '<img src="../img/articulos/' . $foto . '">';
                        }
                        echo '</td>';
                        echo '<td>' . $nameP . '</td>';
                        echo '<td>' . $cate . '</td>';
                        echo '<td>' . $precio . '</td>';

                        if ($_SESSION['admin'] == 'Administrador') {
                            echo '<td><a href="articulo_eliminar.php?id=' . $id . '&name=' . $nameP . '&foto=' . $foto . '">';
                            echo '<img class="tacho" src="../img/eliminar.png"></a></td>';
                            echo '<td><a href="modificacion-de-articulo.php?id=' . $id . '">';
                            echo '<img class="lapiz" src="../img/modificar.png"></a></td>';
                        } else {
                            echo '<td><a href="articulo_carrito.php?id=' . $id . '">';
                            echo '<img class="tacho" src="../img/carrito.png"></a></td>';
                        }
                        echo '</tr>';
                    }

                    mysqli_stmt_close($sentencia);
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
