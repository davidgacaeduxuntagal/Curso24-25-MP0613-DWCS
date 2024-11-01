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
?>

<!doctype html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- css para usar Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Ejercicio Tema 3 PDO</title>
    </head>

    <body style="background: antiquewhite">
        <h3 class="text-center mt-2 font-weight-bold">Ejercicio Transacción con PDO</h3>
        <div class="container mt-3">
            <?php
            // Definimos la variable para comprobar ejecución.
            $isOk = true;

            // Iniciamos la transacción
            $conProyecto->beginTransaction();
            $update = "update stocks set unidades=1 where producto=(select id from productos where nombre_corto='PAPYRE62GB') AND tienda=1";
            if ( !$conProyecto->exec($update) ) $isOk = false;
            $insert = "insert into stocks select id, 2, 1 from productos where nombre_corto='PAPYRE62GB'"; //es equivalente a insert into stocks values(15, 2, 1)
            if ( !$conProyecto->exec($insert) ) $isOk = false;
          
            // Si fue bien, confirmamos los cambios
            // y en caso contrario los deshacemos
            if ($isOk) {
                $conProyecto->commit();
                echo "<p class='text-primary font-weight-bold'>Los cambios se realizaron correctamente.</p>";
            } else {
                $conProyecto->rollBack();
                echo "<p class='text-danger font-weight-bold'>No se han podido realizar los cambios.</p>";
            }

            //Cerramos la conexión.
            $conProyecto = null;
            ?>
        </div>
    </body>
</html>