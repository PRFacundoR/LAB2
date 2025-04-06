<?php

require_once('php/encabezado.php');



?>


<h1 class="text-center mb-4">Consulta de sueldo</h1>
        <form action="php/consulta.php" method="post">

        <fieldset class="border p-4 mb-4">
                <legend class="w-auto">Legajo</legend>
                <article class="mb-3">
                    <label for="nombre" class="form-label">Ingrese su numero de legajo:</label>
                    <input type="text" id="nombre" name="legajo" class="form-control"  >
                </article>
        </fieldset>
            <article class="text-center">
                <input type="submit" value="Consultar" class="btn btn-primary">
            </article>
        </form>


<?php


require_once('php/pie.php');

?>