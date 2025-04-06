<?php

	if(!empty($_POST['categoria'])){
		header("refresh:2; url=preferencia_mostrar.php");
		$categoria=$_POST['categoria'];
		setcookie('mi-tipo', $categoria, time() + (1 * 24 * 3600), '/');
		
		echo $_COOKIE['mi-tipo'];
	}else{
		header("refresh:0; url=preferencias.php");
	}




?>