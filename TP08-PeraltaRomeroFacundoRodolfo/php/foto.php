	<?php
	echo'<a class="btn btn-dark" href="deslogueo.php">Cerrar sesion</a>';
	echo'<header>';
	
    session_start();
    if( !empty($_SESSION['usuName']) ){
		 if(!empty($_SESSION['usuft'])){
			 echo ' <img src="../img/usuarios/'.$_SESSION['usuft'].' ">';
		 }else{
				echo ' <img src="../img/usuarios/usuario_default.png ">';
		 }
		echo'<br>';
		echo '<h3>'. $_SESSION['usuName'].'</h3>';
		
	}else {
		
		header("refresh:0; url=../index.php");
    }
    
    
    
	
    
   
	echo'</header>';
?>