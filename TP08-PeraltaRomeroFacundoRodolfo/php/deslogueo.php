<?php

session_start();

if(!empty($_SESSION['usuName'])){
	header("refresh:2; url=../index.php");
	echo '<h2>sesion cerrada</h2>';
	session_destroy();
	
}


?>