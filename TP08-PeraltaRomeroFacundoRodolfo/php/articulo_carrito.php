<?php

    session_start();
	
	if(!empty($_SESSION['usuName']) && !empty($_GET['id']) ){
		
		if( empty($_SESSION['carrito']) ){
			$_SESSION['carrito']=array();
		}
		if(empty($_SESSION['carrito'][$_GET['id']])){
			
			$_SESSION['carrito'][$_GET['id']]=1;
			
			}else{
			
			$_SESSION['carrito'][$_GET['id']]++;
		}
		
		header("refresh:0; url=mostrar_carrito.php" );
	}
	
	

    
?>