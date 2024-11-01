<?php
    $codProd = $_POST['producto'];
    $stmt = $conProyecto->stmt_init();
    $stmt1 = $conProyecto->stmt_init();
    $consulta1 = "select nombre , nombre_corto from productos where id=?";
    $consulta  = "select unidades, tienda, producto, tiendas.nombre as nombreTienda from stocks, tiendas where tienda=tiendas.id AND producto=?";

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
?>