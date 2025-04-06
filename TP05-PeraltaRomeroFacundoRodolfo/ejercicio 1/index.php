<?php

require_once('php/encabezado.php');

?>
<main>

<section class="container mt-5">
    <h2 class="text-center">Iniciar Sesión</h2>
    <form action="php/logueo.php" method="POST"> 
        <article class="mb-3">
            <label for="mail" class="form-label">Nombre de Usuario</label>
            <input type="text" class="form-control" id="mail" name="mail" required>
        </article>
        <article class="mb-3">
            <label for="contrasenia" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="contrasenia" name="contrasenia" required>
        </article>
        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
    </form>
</section>
</main>


<?php

require_once('php/pie.php');

?>
