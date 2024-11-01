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
<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- css para usar Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Ejercicio Tema 3</title>
    </head>

    <body style="background: antiquewhite">
        <h3 class="text-center mt-2 font-weight-bold">Ejercicio Resuelto</h3>
        <div class="container mt-3">
        <?php
        if ( isset($_POST['enviar']) ) { //hemos enviado el formulario para consultar las unidades
            $codigo = $_POST['producto'];
            $consulta = "select unidades, tienda, producto, tiendas.nombre as nombreTienda from stocks, tiendas where tienda=tiendas.id AND producto=$codigo";
            $consulta1 = "select nombre , nombre_corto from productos where id=$codigo";
            $consultaProducto = $conProyecto->query($consulta1);
            $consultaDatos = $conProyecto->query($consulta);

            $fila = $consultaProducto->fetch(PDO::FETCH_OBJ); //no hace falta el while solo devuelve una fila
            echo "<h4 class='mt-3 mb-3 text-center '>Unidades del Producto: ";
            echo "$fila->nombre ($fila->nombre_corto)";
            echo "</h4>";
            pintarBoton();

            echo "<table class='table table-striped table-dark'>";
            echo "<thead>";
            echo "<tr class='font-weight-bold'><th class='text-center'>Nombre Tienda</th>";
            echo "<th class='text-center'>Unidades</th></tr>";
            echo "</thead>";
            echo "<tbody>";

            while ( $filas = $consultaDatos->fetch(PDO::FETCH_OBJ) ) {
                echo "<tr class='text-center'><td>$filas->nombreTienda</td>";
                echo "<td class='text-center'>";
                //creamos el formulario para modificar stock
                echo "$filas->unidades";
                echo "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            //Cerrramos conexiones.
            $conProyecto = null;

        } else { //no hemos enviado ningún formulario
        ?>
            <form name="f1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-group">
                    <label for="p" class="font-weight-bold">Elige un producto</label>
                    <select class="form-control" id="p" name="producto">
                    <?php
                        $consulta = "select id, nombre, nombre_corto from productos order by nombre";
                        $datos = $conProyecto->query($consulta);
                        while ($filas = $datos->fetch(PDO::FETCH_OBJ)) {
                            echo "<option value='{$filas->id}'>$filas->nombre</option>";
                        }

                        //cerramos las conexiones.
                        $conProyecto = null;
                    ?>
                    </select>
                </div>
                <div class="mt-2">
                    <input type="submit" class="btn btn-info mr-3" value="Consultar Stock" name="enviar">
                </div>
            </form>
        </div>
 <?php } // fin else ?>
    </body>
</html>