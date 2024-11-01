<?php
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
?>
   