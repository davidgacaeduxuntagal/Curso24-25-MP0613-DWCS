<?php
    $codTienda = $_POST['ct'];
    $codProducto = $_POST['cp'];
    $unidades = $_POST['stock'];
    $update = "update stocks set unidades=:u where producto=:p AND tienda=:t";
    $stmt = $conProyecto->prepare($update);

    try {
        $stmt->execute([':u' => $unidades, ':p' => $codProducto, ':t' => $codTienda]);
    } catch (PDOException $ex) {
        $error = true;
        $mensaje = $ex->getMessage();
        $conProyecto = null;
    }

    if (!$error) {
        echo "<p class='font-weight-bold text-success mt-3'>Unidades Actualizadas Correctamente</p>";

        $stmt = null;
        $conProyecto = null;
        pintarBoton();
    } 
?>