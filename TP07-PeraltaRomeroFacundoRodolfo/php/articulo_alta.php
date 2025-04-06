<?php
    $ruta = '../';
    require("encabezado.php");
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
        echo '<form class="p-4 border rounded w-50" action="articulo_alta_ok.php?nameU='.$_GET['nameU'].'&'.'ftU='.$_GET['ftU'] .'" method="POST" enctype="multipart/form-data">'
        ?>  
        <fieldset>
                    <legend class="text-center mb-4">Alta de Artículo</legend>

                    <label for="nombre" class="form-label">Nombre del artículo</label>
                    <input type="text" id="nombre" name="nombre" class="form-control mb-3" required>

                    <label for="categoria" class="form-label">Categoría</label>
                    <input type="text" id="categoria" name="categoria" class="form-control mb-3" required>

                    <label for="precio" class="form-label">Precio</label>
                    <input type="number" step="0.01" id="precio" name="precio" class="form-control mb-3" required>

                    <label for="imagen" class="form-label">Subir imagen del artículo</label>
                    <input type="file" id="imagen" name="imagen" class="form-control mb-4" required>

                    <button type="submit" class="btn btn-primary w-100">Dar de alta</button>
                </fieldset>
            </form>
        </section>
    </main>

<?php
    require("pie.php");
?>