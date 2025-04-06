<?php
session_start(); 

echo '<a class="btn btn-dark" href="deslogueo.php">Cerrar sesión</a>';
echo '<header class="d-flex justify-content-between p-3 bg-light">';

include_once 'funciones.php'; 

$fechaActual = date('Y-m-d');
$fechaFormateada = cambiarFecha($fechaActual);

echo '<article>' . $fechaFormateada . '</article>';

if (!empty($_SESSION['usuName'])) {
    if (!empty($_SESSION['usuft'])) {
        echo '<figure>';
        echo '<img src="../img/usuarios/' . $_SESSION['usuft'] . '">';
        echo '</figure>';
    } else {
        echo '<img src="../img/usuarios/usuario_default.png">';
    }
    echo '<br>';
    echo '<h3>' . $_SESSION['usuName'] . '</h3>';
} else {
    header("refresh:0; url=../index.php");
}

echo '</header>';
?>




