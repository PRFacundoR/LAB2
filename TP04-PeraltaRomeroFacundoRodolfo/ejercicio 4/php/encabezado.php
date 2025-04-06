

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    
</head>
<body>
    <section class="container mt-5">
        <h2 class="text-center">Iniciar Sesión</h2>
        <form action="php/usu.php" method="POST"> 
            <article class="mb-3">
                <label for="mail" class="form-label">Nombre de Usuario</label>
                <input type="email" class="form-control" id="mail" name="mail" required>
            </article>
            <article class="mb-3">
                <label for="contrasenia" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="contrasenia" name="contrasenia" required>
            </article>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </form>
    </section>
