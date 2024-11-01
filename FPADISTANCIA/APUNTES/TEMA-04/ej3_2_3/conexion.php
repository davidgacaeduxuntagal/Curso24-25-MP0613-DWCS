<?php
    //hacemos la conexión, sería buena idea hacerla en un archivo aparte
    //y utilizar 'require' o 'require_once' por ejemplo
    $host = "localhost";
    $db   = "proyecto";
    $user = "gestor";
    $pass = "secreto";
    $dsn  = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    $conProyecto = new PDO($dsn, $user, $pass);
    $conProyecto->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
   
    function pintarBoton()
    {
        echo "<a href='{$_SERVER['PHP_SELF']}' class='btn btn-success mb-2'>Consultar Otro Artículo</a>";
    }
?>