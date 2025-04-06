<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diario FACET</title>
    <link rel="stylesheet" href="<?php echo $ruta ?>bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <h1 class=" row justify-content-center">Diario FACET</h1>
    </header>
    <nav class="navbar bg-body-tertiary mb-2">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo $ruta;?>index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $ruta;?>php/noticia_alta.php">+ Agregar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $ruta;?>php/preferencias.php">Preferencias</a>
            </li>
        </ul>
    </nav>