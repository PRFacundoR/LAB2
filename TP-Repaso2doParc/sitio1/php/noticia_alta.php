<?php
    $ruta = '../';
    require_once 'encabezado.php';
?>

<form action="noticia_alta_ok.php" method="post" enctype="multipart/form-data" class="container mt-3 p-4 col-md-3 bg-info bg-gradient ">
  <section class="mb-2">
    <label for="titulo" class="form-label">Título</label>
    <input type="text" class="form-control" id="titulo" name="titulo" maxlength="70">
  </section>

  <section class="mb-2">
    <label for="contenido" class="form-label">Contenido</label>
    <textarea class="form-control" id="contenido" name="contenido" rows="5" maxlength="200"></textarea>
  </section>

  <section class="mb-2">
    <label for="fecha_publicacion" class="form-label">Fecha de Publicación</label>
    <input type="date" class="form-control" id="fecha_publicacion" name="fecha_publicacion">
  </section>

  <section class="mb-2">
    <label for="categoria" class="form-label">Categoría</label>
    <select class="form-select" id="categoria" name="categoria" maxlength="20">
      <option selected disabled>Seleccioná una categoría</option>
      <option value="politica">Política</option>
      <option value="economia">Economía</option>
      <option value="deportes">Deportes</option>
      <option value="cultura">Cultura</option>
      <option value="tecnologia">Tecnología</option>
    </select>
  </section>

  <section class="mb-2">
    <label for="foto" class="form-label">Foto</label>
    <input type="file" class="form-control" id="foto" name="foto" accept="image/*" maxlength="40">
  </section>

  <input type="submit" class="btn btn-primary" value="Publicar">
</form>



<?php
    require_once 'pie.php';
?>