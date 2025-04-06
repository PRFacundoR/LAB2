


<?php

require_once ('encabezado.php'); // Incluye el archivo 'encabezado.php' (probablemente un header o layout común en la página)

if (!empty($_POST['horas']) && !empty($_POST['dias']) && !empty($_POST['turno']) && !empty($_POST['name'])) { 
    // Verifica que todos los campos del formulario ('horas', 'dias', 'turno', 'name') estén llenos

    $horas = $_POST['horas'];   // Asigna el valor del campo 'horas' del formulario a la variable $horas
    $dias = $_POST['dias'];     // Asigna el valor del campo 'dias' (un array de días) a la variable $dias
    $turno = $_POST['turno'];   // Asigna el valor del campo 'turno' a la variable $turno
    $nombre = $_POST['name'];   // Asigna el valor del campo 'name' al nombre de la persona
    
    require_once 'funciones.php'; // Incluye el archivo 'funciones.php', donde probablemente esté la función pagoDiario()

    $pagoTotal = 0; // Inicializa el pago total en 0

    // Muestra en pantalla información del turno y las horas trabajadas
    echo '<p class="alert alert-info"> Turno: '. $turno. '</p>';
    echo '<p class="alert alert-info"> Horas: '. $horas. '</p>';
    
    // Comienza la tabla HTML para mostrar los días y los honorarios
    echo '<table class="table table-bordered">
        <thead>
          <tr>
          <th>dia</th><th>honorario</th>
        </tr>
        </thead>
        <tbody>';
    
    // Recorre cada día seleccionado (contenido en el array $dias)
    foreach ($dias as $value) {

        // Calcula el honorario diario usando la función pagoDiario() y lo suma al total
        $pagoTotal += pagoDiario($horas, $value, $turno);
       
        // Muestra en una fila de la tabla el día actual y el honorario para ese día
        echo '<tr>';
        echo '<td>'. $value. '</td>'; // Muestra el día
        echo '<td>$'. pagoDiario($horas, $value, $turno) . '</td>'; // Muestra el honorario para ese día
        echo '</tr>';

        // Calcula el honorario para ese día de nuevo (duplicación de cálculo, pero necesario para el siguiente paso)
        $honorario = pagoDiario($horas, $value, $turno);

        // Crea un array con los datos a guardar en el archivo de texto
        $datos = [$nombre, $horas, $turno, $value, $honorario];

        // Convierte el array a una cadena de texto separada por punto y coma
        // para guardar
        $linea = implode(';', $datos) . PHP_EOL;

        // Define la carpeta donde se guardará el archivo
        $carpeta = '../txt/';

        // Si la carpeta no existe, la crea
        if (!file_exists($carpeta)) {
            mkdir($carpeta);
        }

        // Nombre del archivo donde se guardarán los datos
        $nameArchivo = 'pagos.txt';

        // Abre el archivo en modo 'append' (agregar al final)
        $archivo = fopen($carpeta.$nameArchivo, 'a');

        if ($archivo) { // Si el archivo se abrió correctamente
            // Escribe la línea de datos en el archivo
            $control = fputs($archivo, $linea . PHP_EOL);

            if ($control) {
                // Si la escritura fue exitosa, cierra el archivo
                fclose($archivo);
            }
        }
    }

    // Muestra el total de sueldo acumulado en una fila de la tabla
    echo '<tr>';
    echo '<td> Sueldo total:</td> <td> $'.$pagoTotal.'</td>';
    echo '</tr>';

} else {
    // Si no se completaron todos los campos del formulario, muestra este mensaje
    echo 'complete el formulario';
    
    // Redirige al usuario a otra página 
    header('refresh:3; url=../index.php');
}

require_once('pie.php');

?>
