<?php
    //hacemos la conexión, sería buena idea hacerla en un archivo aparte
    //y utilizar 'require' o 'require_once' por ejemplo
    $conProyecto = new mysqli('localhost','gestor','secreto','proyecto');

    if ( $conProyecto->connect_error ) {
        die('Error de Conexión (' . $conProyecto->connect_errno . ') ' . $conProyecto->connect_error );
    //die() detiene la ejecución del código php
    }

    function cerrarConexion(){
        global $conProyecto;
        $conProyecto->close();
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
        <title>Ejercicio Tema 3: Conjuntos de resultados en MySQLi</title>
    </head>

    <body style="background: antiquewhite">
        <h3 class="text-center mt-2 font-weight-bold">Ejercicio Resuelto</h3>
        <div class="container mt-3">
        <?php
            if (isset($_POST['enviar'])) {
                $codProd=$_POST['producto'];
                $consulta1="select nombre , nombre_corto from productos where id=$codProd";
                $consulta="select unidades, tiendas.nombre as tienda from stocks, tiendas where tienda=tiendas.id AND producto=$codProd";
    
                if( !( $resultado1=$conProyecto->query($consulta1) ) || 
                   !( $resultado=$conProyecto->query($consulta)) ) { 
                    die("Error al recuperar el Stock!!! o recuperar el producto!!! ".
                    $conProyecto->error);
                }
                
                $fila = $resultado1->fetch_assoc(); //sabemos que esta consulta solo   devuelve una fila
                echo "<h4 class='mt-3 mb-3 text-center '>Unidades del Producto: ";
                echo $fila['nombre'] . " ({$fila['nombre_corto']})";
                echo "</h4>";
                echo "<a href='{$_SERVER['PHP_SELF']}' class='btn btn-success mb-2'>Consultar Otro Artículo</a>";
                echo "<table class='table table-striped table-dark'>";
                echo "<thead>";
                echo "<tr class='text-center font-weight-bold'><th>Nombre Tienda</th>";
                echo "<th>Stock</th></tr>";
                echo "</thead>";
                echo "<tbody>";

                while ( $filas=$resultado->fetch_assoc() ){
                   echo "<tr><td>{$filas['tienda']}</td><td class='textcenter'>{$filas['unidades']}</td></tr>";
                }
                echo "</tbody>";
                echo "</table>";
                cerrarConexion();

            } else {
        ?>
            <form name="f1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-group">
                    <label for="p" class="font-weight-bold">Elige un producto</label>
                    <select class="form-control" id="p" name="producto">
                    <?php
                        $consulta="select id, nombre, nombre_corto from productos order by nombre";
                        if ( !($resultado=$conProyecto->query($consulta) ) ) {
                            die("Error al recuperar los productos!!! ". $conProyecto->error);
                        }

                        while ( $fila=$resultado->fetch_assoc() ) {
                            echo "<option value='{$fila['id']}'>".$fila['nombre']."</option>";
                        }

                        cerrarConexion();
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
