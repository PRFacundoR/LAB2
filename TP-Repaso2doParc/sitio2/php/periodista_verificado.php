<?php
    $ruta = '../';
    require_once 'encabezado.php';

	session_start();
	if(!empty($_SESSION['usu']) && !empty($_SESSION['foto']) ){
		echo'<h3>Nombre de usuario:'.$_SESSION['usu'].'</h3>';
		echo'<img src=../img/usuarios/'.$_SESSION['foto'].'>';

	}
    require_once 'pie.php';

?>