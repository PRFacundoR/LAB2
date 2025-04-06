<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Horas Trabajadas</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>
<body>
    <main class="container mt-5">
        <h1 class="text-center mb-4">Formulario de Horas Trabajadas</h1>
        <form action="php/procesa.php" method="post">
            <fieldset class="border p-4 mb-4">
                <legend class="w-auto">Horas Trabajadas</legend>
                <article class="mb-3">
                    <label for="horas" class="form-label">Cantidad de horas trabajadas:</label>
                    <input type="number" id="horas" name="horas" class="form-control" min="0" max="12" required>
                </article>
            </fieldset>

            <fieldset class="border p-4 mb-4">
                <legend class="w-auto">Turno</legend>
                <article class="mb-3 form-check">
                    <input type="radio" id="turno-matutino" name="turno" value="matutino" class="form-check-input" required>
                    <label for="turno-matutino" class="form-check-label me-3">Turno matutino</label>
                </article>
                <article class="mb-3 form-check">
                    <input type="radio" id="turno-nocturno" name="turno" value="nocturno" class="form-check-input" required>
                    <label for="turno-nocturno" class="form-check-label me-3">Turno nocturno</label>
                </article>
            </fieldset>

            <fieldset class="border p-4 mb-4">
                <legend class="w-auto">Días Trabajados</legend>
                <article class="mb-3 form-check">
                    <input type="checkbox" id="lunes" name="dias[]" value="lunes" class="form-check-input">
                    <label for="lunes" class="form-check-label">Lunes</label>
                </article>
                <article class="mb-3 form-check">
                    <input type="checkbox" id="martes" name="dias[]" value="martes" class="form-check-input">
                    <label for="martes" class="form-check-label">Martes</label>
                </article>
                <article class="mb-3 form-check">
                    <input type="checkbox" id="miercoles" name="dias[]" value="miercoles" class="form-check-input">
                    <label for="miercoles" class="form-check-label">Miércoles</label>
                </article>
                <article class="mb-3 form-check">
                    <input type="checkbox" id="jueves" name="dias[]" value="jueves" class="form-check-input">
                    <label for="jueves" class="form-check-label">Jueves</label>
                </article>
                <article class="mb-3 form-check">
                    <input type="checkbox" id="viernes" name="dias[]" value="viernes" class="form-check-input">
                    <label for="viernes" class="form-check-label">Viernes</label>
                </article>
                <article class="mb-3 form-check">
                    <input type="checkbox" id="sabado" name="dias[]" value="sabado" class="form-check-input">
                    <label for="sabado" class="form-check-label">Sábado</label>
                </article>
                <article class="mb-3 form-check">
                    <input type="checkbox" id="domingo" name="dias[]" value="domingo" class="form-check-input">
                    <label for="domingo" class="form-check-label">Domingo</label>
                </article>
            </fieldset>

            <article class="text-center">
                <input type="submit" value="Calcular" class="btn btn-primary">
            </article>
        </form>