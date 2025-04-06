<?php

require_once('encabezado.php');





?>


<header>
    <?php
    if(!empty($_GET['ft'] && $_GET['usu'])){
    echo ' <img src="../img/'. $_GET['ft'] .' ">';
    echo '<h2> Nombre de usuario:'. $_GET['usu']. '</h2>';
    }
    
    ?>
   
</header>





<?php

require_once('pie.php');

?>