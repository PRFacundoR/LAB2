<?php
    $ruta = '../';
    require_once 'encabezado.php';
?>

<form action="preferencia_cargar.php" method="post" enctype="multipart/form-data" class="container mt-3 p-4 col-md-3 bg-info bg-gradient ">

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

  <input type="submit" class="btn btn-primary" value="Publicar">
</form>

<?php
  require_once 'pie.php';
?>