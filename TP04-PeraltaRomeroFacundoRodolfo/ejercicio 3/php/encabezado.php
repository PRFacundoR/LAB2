
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulación de Plazo Fijo</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    
</head>
<body>
    <main class="container mt-5">
        <section>
            <h1 class="text-center">Financiera</h1>
            <form action="php/ganancias.php" method="POST" class="mt-4">
                <fieldset class="border p-3">
                    <legend class="w-auto px-2">Ingrese los datos para la simulación</legend>
                    
                    <!-- Depósito Inicial -->
                    <article class="mb-3">
                        <label for="deposito" class="form-label">Depósito Inicial</label>
                        <input type="number" name="deposito" id="deposito" class="form-control" placeholder="Ingrese el monto a invertir" min=0 required>
                    </article>

                    
                    <p>Seleccione el tiempo del plazo fijo:</p>
                    <section class="mb-3">
                        <article class="form-check form-switch">
                            <input class="form-check-input" type="radio" name="dias[]" id="dias30" value="30" required>
                            <label class="form-check-label" for="dias">30 días</label>
                        </article>
                        <article class="form-check form-switch">
                            <input class="form-check-input" type="radio" name="dias[]" id="dias45" value="45">
                            <label class="form-check-label" for="dias45">45 días</label>
                        </article>
                        <article class="form-check form-switch">
                            <input class="form-check-input" type="radio" name="dias[]" id="dias60" value="60">
                            <label class="form-check-label" for="dias60">60 días</label>
                        </article>
                        <article class="form-check form-switch">
                            <input class="form-check-input" type="radio" name="dias[]" id="dias90" value="90">
                            <label class="form-check-label" for="dias90">90 días</label>
                        </article>


                    <!-- Botón de Enviar -->
                    <article class="text-center">
                        <button type="submit" class="btn btn-success">Simular Ganancias</button>
                    </article>
                </fieldset>
            </form>
        </section>
    
    
