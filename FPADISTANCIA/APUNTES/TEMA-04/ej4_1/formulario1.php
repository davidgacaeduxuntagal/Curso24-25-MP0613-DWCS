
<?php
    $codigo = $_POST['producto'];
    $consulta = "select unidades, tienda, producto, tiendas.nombre as nombreTienda from stocks, tiendas where tienda=tiendas.id AND producto=:prod";
    $consulta1 = "select nombre , nombre_corto from productos where id=:id";
    $stmt = $conProyecto->prepare($consulta);
    $stmt1 = $conProyecto->prepare($consulta1);

    try {
        $stmt->execute([':prod' => $codigo]);
    } catch (PDOException $ex) {
        $error = true;
        $mensaje = $ex->getMessage();
        $conProyecto = null;
    }

    try {
        $stmt1->execute([':id' => $codigo]);
    } catch (PDOException $ex) {
        $error = true;
        $mensaje = $ex->getMessage();
        $conProyecto = null;
    }

    if (!$error) {
        $fila = $stmt1->fetch(PDO::FETCH_OBJ); //solo nos devuelve una fila es innecesario el while
        echo "<h4 class='mt-3 mb-3 text-center '>Unidades del Producto: ";
        echo "$fila->nombre ($fila->nombre_corto)";
        echo "</h4>";
        pintarBoton();
        echo "<table class='table table-striped table-dark'>";
        echo "<thead>";
        echo "<tr class='font-weight-bold'><th class='text-center'>Nombre Tienda</th>";
        echo "<th>Unidades</th><th class='text-center'>Acciones</th></tr>";
        echo "</thead>";
        echo "<tbody>";

        while ( $filas = $stmt->fetch(PDO::FETCH_OBJ) ) {
            echo "<tr class='text-center'><td>$filas->nombreTienda</td>";
            echo "<td class='text-center m-auto'>";

            //creamos el formulario para modificar stock
            echo "<form name='a' action='{$_SERVER['PHP_SELF']}' method='POST' class='form-inline'>";
            echo "<input type='number' class='form-control' step='1' min='0' name='stock' value='{$filas->unidades}'>";
            echo "<input type='hidden' name='ct' value='{$filas->tienda}'>";
            echo "<input type='hidden' name='cp' value='{$filas->producto}'>";
            echo "</td><td>";
            echo "<input type='submit' class='btn btn-warning ml-2' name='enviar1' value='Actualizar'>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
        
        //Cerrramos conexiones.
        $stmt = null;
        $stmt1 = null;
        $conProyecto = null;
    }
?>