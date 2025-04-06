<?php /* NO TOCAR ESTE ARCHIVO */
    function conectar () 
    {
        $servidor = 'localhost';
        $usuario = 'root';
        $clave = '';
        $nombreBaseDato = 'repaso2';

        set_error_handler (function() { 
            throw new Exception("Error");
        });

        try { 
            $conexion = mysqli_connect($servidor, $usuario, $clave, $nombreBaseDato);
        }
        catch (Exception $e) { 
            $conexion = false;
        }
        
        return ($conexion);
    }

    function desconectar ($miConexion) 
    {
        if ($miConexion) {
            mysqli_close ($miConexion);
            return true;
        } else {
            return false;
        }
    }