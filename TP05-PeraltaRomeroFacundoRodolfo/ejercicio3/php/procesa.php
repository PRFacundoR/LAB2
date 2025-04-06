


<?php

require_once ('encabezado.php'); // Incluye el archivo 'encabezado.php' (probablemente un header o layout común en la página)

if (!empty($_POST['name'])) { 
    // Verifica que todos el campo del formulario esté lleno

    $nombre = $_POST['name'];   // Asigna el valor del campo 'name' al nombre de la persona
    
    require_once 'funciones.php'; // Incluye el archivo 'funciones.php', donde probablemente esté la función pagoDiario()
    
    
    $mostrar=consulta($nombre);
    if ($mostrar!=0) {
       echo '<table class="table table-bordered">
            <thead>
                <tr>
                    <th>Día</th>
                    <th>Honorario</th>
                </tr>
            </thead>
            <tbody>';
    foreach ($mostrar as $dia => $honorario) {
        echo '<tr>';
                echo '<td>' . $dia . '</td>'; // Mostrar el día sin escapar
                echo '<td>$' . number_format($honorario, 2, ',', '.') . '</td>'; 
                echo '</tr>';
    }
    echo '</tbody></table>'; 
    }else {
        echo '<p>No se encontraron datos para el nombre especificado.</p>';
    
    }
}else {
    echo '<p>No se encontraron datos para el nombre especificado.</p>';
}

require_once('pie.php');

?>
