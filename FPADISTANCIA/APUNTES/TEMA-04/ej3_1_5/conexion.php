<?php
    //hacemos la conexión, sería buena idea hacerla en un archivo aparte
    //y utilizar 'require' o 'require_once' por ejemplo
    $conProyecto = new mysqli('localhost','gestor','secreto','proyecto');

    if ( $conProyecto->connect_error ) {
        die ('Error de Conexión (' . $conProyecto->connect_errno . ') ' . $conProyecto->connect_error);
         //die() detiene la ejecución del código php
    }

    function cerrarConexion() {
        global $conProyecto;
        $conProyecto->close();
    }

    function pintarBoton(){
        echo "<a href='{$_SERVER['PHP_SELF']}' class='btn btn-success mb-2'>Consultar Otro Artículo</a>";
    }
?>