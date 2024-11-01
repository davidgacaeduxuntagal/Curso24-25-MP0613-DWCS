<?php
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
?>
