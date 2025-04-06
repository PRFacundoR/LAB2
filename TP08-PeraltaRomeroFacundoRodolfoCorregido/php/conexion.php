<?php
//require_once 'encabezado.php';
function conectar(){

    $servidor= 'localhost';
    $usuario= 'root';
    $clave='';
    $DB='labo2';

    set_error_handler(function(){
        throw new Exception("Error");
    });

    try {
        $conexion = mysqli_connect($servidor, $usuario, $clave, $DB);
    } catch (Exception $e) {
        $conexion=false;
        echo '<p> Error, comuniquese con su administrador.</p>';
    }

    return $conexion;
};

function desconectar($conexion){
    if ($conexion) {
        mysqli_close($conexion);
    }else {
        echo '<p>No se puede desconectar, porque no hay conexión abierta</p>';
    }

};

//require_once 'pie.php';
?>