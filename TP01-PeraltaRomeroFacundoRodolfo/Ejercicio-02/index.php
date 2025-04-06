
<?php

// Se define la capacidad del Pen Drive en GB
$penDrive = 16;

// Se definen las variables para el tamaño de tres archivos en MB
$archivo1 = 2556;  // Tamaño del archivo 1 en MB
$archivo2 = 4000;  // Tamaño del archivo 2 en MB
$archivo3 = 3349;  // Tamaño del archivo 3 en MB

// Se define una constante para el factor de conversión de MB a GB
const FACTOR = 1000;

// Se calcula el tamaño total de los archivos sumando los tamaños en MB
$archivo = $archivo1 + $archivo2 + $archivo3;

// Se incluye un archivo externo que usualmente contiene la cabecera HTML
require_once('php/encabezado.php');

// Se muestra un encabezado para indicar la capacidad del Pen Drive
echo '<h1>Pen Drive de 16 GB </h1> ';

// Se muestran los tamaños de los archivos en MB
echo '<p> Archivo 1 (MB): '. $archivo1 .'</p>';
echo '<p> Archivo 2 (MB): '. $archivo2 .'</p>';
echo '<p> Archivo 3 (MB): '. $archivo3 .'</p>';

echo '<hr>';  // Línea horizontal para separar secciones

// Se muestran los tamaños de los archivos convertidos a GB (dividiendo entre el factor)
echo '<p> Archivo 1 (GB): '. number_format($archivo1 / FACTOR, 2, ',' , '.')  .'</p>';
echo '<p> Archivo 2 (GB): '. number_format($archivo2 / FACTOR, 2, ',' , '.') .'</p>';
echo '<p> Archivo 3 (GB): '. number_format($archivo3 / FACTOR, 2, ',' , '.')  .'</p>';

echo '<hr>';  // Línea horizontal para separar secciones

// Se calcula y muestra el espacio libre en el Pen Drive en GB
echo '<p>Espacio libre: '. number_format($penDrive - $archivo / FACTOR, 2, ',' , '.') .' GB</p>';

// Se incluye un archivo externo que usualmente contiene el pie de página HTML
require_once('php/pie.php');
?>

