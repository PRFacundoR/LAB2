


<?php

require_once ('../vistaTabla/tabla.php');

$horas = $_POST['horas'];
$dias = $_POST['dias'];
$turno = $_POST['turno'];
require_once 'funciones.php';

$pagoTotal=0;



if (!empty($_POST['horas']) && !empty($_POST['dias']) && !empty($_POST['turno']) ) {
   echo '<p class="alert alert-info"> Turno: '. $turno. '</p>';
   echo '<p class="alert alert-info"> Horas: '. $horas. '</p>';
    echo '<table class="table table-bordered">
        <thead>
          <tr>
          <th>dia</th><th>honorario</th>
        </tr>
        </thead>
        <tbody>';
    foreach ($dias as $dias => $value) {
       
        $pagoTotal +=pagoDiario($horas, $value, $turno);
       
        echo '<tr>';
        echo '<td>'. $value. '</td>';
        echo '<td>$'. pagoDiario($horas, $value, $turno) . '</td>';
        echo '<tr>';
    }
    echo '<tr>';
    echo '<td> Sueldo total:</td> <td> $'.$pagoTotal.'</td>';
    echo '<tr>';
}

include ('../vistaTabla/pieTabla.php');



?>
