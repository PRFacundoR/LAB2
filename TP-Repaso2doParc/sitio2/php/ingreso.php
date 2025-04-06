<?php
    $ruta = '../';
    require_once 'encabezado.php';
?>

<form action="periodista_logueo.php" method="post" class="container mt-3 p-4 col-md-3 bg-info bg-gradient">
    <section class="mb-3">
      <label for="usuario" class="form-label">Usuario</label>
      <input type="text" class="form-control" id="usuario" name="usuario">
    </section>
    <section class="mb-3">
      <label for="clave" class="form-label">Clave</label>
      <input type="password" class="form-control" id="clave" name="clave">
    </section>
    <input type="submit" class="btn btn-primary" value="Ingresar">
  </form>

<?php
    require_once 'pie.php';
?>


