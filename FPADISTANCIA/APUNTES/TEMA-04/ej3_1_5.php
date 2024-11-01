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
<!doctype html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- css para usar Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Ejercicio Tema 3: Conjuntos de resultados en MySQLi</title>
    </head>

    <body style="background: antiquewhite">
        <h3 class="text-center mt-2 font-weight-bold">Ejercicio Resuelto</h3>
        <div class="container mt-3">
        <?php
        if ( isset($_POST['enviar']) ) { //hemos enviado el formulario para consultar las unidades
            $codProd = $_POST['producto'];
            $stmt = $conProyecto->stmt_init();
            $stmt1 = $conProyecto->stmt_init();
            $consulta1 = "select nombre , nombre_corto from productos where id=?";
            $consulta = "select unidades, tienda, producto, tiendas.nombre as nombreTienda from stocks, tiendas where tienda=tiendas.id AND producto=?";

            if ( !($stmt->prepare($consulta)) || !($stmt1->prepare($consulta1)) ) {
                die("Error al recuperar los productos ". $conProyecto->error);
            }

            $stmt->bind_param('i', $codProd);
            $stmt1->bind_param('i', $codProd);

            if(!$stmt1->execute()){
               die("Error al recuperar producto: ".$stmt1->error);
            }

            $stmt1->bind_result($n, $nc); //$n=nombre, $nc=nombre_corto
            $stmt1->fetch(); //esta consulta solo devuelve una fila, no es necesario el while
            $stmt1->close();

            if (!$stmt->execute()) {
                die("Error al recuperar unidades: ".$stmt->error);
            }

            $stmt->bind_result($u, $ct, $cp, $nt);

            echo "<h4 class='mt-3 mb-3 text-center '>Unidades del Producto: ";
            echo "$n ($nc)";
            echo "</h4>";
            pintarBoton();
            echo "<table class='table table-striped table-dark'>";
            echo "<thead>";
            echo "<tr class='font-weight-bold'><th class='text-center'>Nombre Tienda</th>";
            echo "<th>Unidades</th><th class='text-center'>Acciones</th></tr>";
            echo "</thead>";
            echo "<tbody>";

            while( $stmt->fetch() ) {
                echo "<tr class='text-center'><td>$nt</td>";
                echo "<td class='text-center m-auto'>";
                //creamos el formulario para modificar stock
                echo "<form name='a' action='{$_SERVER['PHP_SELF']}' method='POST' class='form-inline'>";
                echo "<input type='number' class='form-control' step='1' min='0' name='stock' value='$u'>";
                echo "<input type='hidden' name='ct' value='$ct'>";
                echo "<input type='hidden' name='cp' value='$cp'>";
                echo "</td><td>";
                echo "<input type='submit' class='btn btn-warning ml-2' name='enviar1' value='Actualizar'>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
            $stmt->close();
            cerrarConexion();  

        } elseif ( isset($_POST['enviar1']) ) { //Hemos enviado el formulario para modificar las unidades
            $codTienda = $_POST['ct'];
            $codProducto = $_POST['cp'];
            $unidades = $_POST['stock'];
            $update = "update stocks set unidades=? where producto=? AND tienda=?";
            $stmt = $conProyecto->stmt_init();
            if( !($stmt)->prepare($update) ) {
                die("Error al actualizar unidades: " . $conProyecto->error);
            }

            $stmt->bind_param('iii', $unidades, $codProducto, $codTienda);
            if ( !$stmt->execute() ) {
                die("Error al actualizar unidades: ".$stmt->error);
            }

            echo "<p class='font-weight-bold text-success mt-3'>Unidades Actualizadas Correctamente</p>";
            
            $stmt->close();
            cerrarConexion();
            pintarBoton();

        } else { //no hemos enviado ningún formulario
    ?>
            <form name="f1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-group">
                    <label for="p" class="font-weight-bold">Elige un producto</label>
                    <select class="form-control" id="p" name="producto">
                <?php
                    $consulta = "select id, nombre, nombre_corto from productos order by nombre";

                    if ( !( $resultado = $conProyecto->query($consulta) ) ) {
                        die("Error al recuperar los productos!!! " . $conProyecto->error);
                    }

                    while ( $fila = $resultado->fetch_assoc() ) {
                        echo "<option value='{$fila['id']}'>" . $fila['nombre'] . "</option>";
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
        <?php } ?>
    </body>
</html>