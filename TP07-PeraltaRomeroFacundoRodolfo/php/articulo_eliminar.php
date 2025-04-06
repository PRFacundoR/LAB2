<?php
    $ruta = '../';
    require("encabezado.php");

    if(!empty($_GET['id'])){
        $id=$_GET['id'];

        if( !empty($_GET['foto'])) {
        $foto=$_GET['foto'];
        }else{
            $foto='';
        }
    }



    
    
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
    <main class="d-flex justify-content-center align-items-center login">
        <section class="text-center">
            <article>
                <h1 class="mb-3 text-white">Eliminar artículo</h1>
                <p class="mb-4 text-white">¿Está seguro que quiere eliminar el artículo <strong><?php if(!empty($_GET['name'])){echo$_GET['name'];}?></strong>?</p>
            </article>

            <section>

                <?php
                    echo '<a href="borrar.php?id='.$id. '&'.'foto='.$foto. '&'.'nameU='.$_GET['nameU'].'&'.'ftU='.$_GET['ftU'] .'">Aceptar</a>'
                ?>
                <!---<a class="btn btn-primary me-2" href="borrar.php?id=">Aceptar</a>-->
                <a class="btn btn-secondary" href="articulo_listado.php">Cancelar</a>
            </section>
        </section>
    </main>
   
<?php
    require("pie.php");
?>