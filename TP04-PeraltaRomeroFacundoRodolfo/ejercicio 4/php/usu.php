
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../bootstrap/bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>
<body>
    <main>

    
<?php

$user = $_POST['mail'];
$pass = $_POST['contrasenia'];


    
echo '<h3 class="text-center">Información Ingresada:</h3>';
echo '<p class="alert alert-info">Nombre de Usuario: ' . $user. '</p>';
echo '<p class="alert alert-info">Contraseña: ' . $pass . '</p>';


?>
</main>
</body>
</html>