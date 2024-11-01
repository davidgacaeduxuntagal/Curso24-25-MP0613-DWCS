<?php
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
?>