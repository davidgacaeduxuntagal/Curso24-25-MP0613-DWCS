<?php
    function comprobar($n, $nc)
    {
        if (strlen($n) == 0 || strlen($nc) == 0) {
            echo "<b>Algunos campos del formulario No pueden estar en blanco,  reviselos</b>";
            echo " <a href='crear.php' style='text-decoration:none;'><button>Volver</button></a>";
        }
    }

    // Recoger datos del formlario, eliminando caracteres de espacio en blanco iniciales y finales
    $nombre   = trim($_POST['nombre']);
    $nomCorto = trim($_POST['nombrec']);
    $pvp      = $_POST['pvp'];
    $des      = trim($_POST['descripcion']);
    $familia  = $_POST['familia'];

    // Comprobamos datos
    comprobar($nombre, $nomCorto);
    $nomCorto = strtoupper($nomCorto); //ponemos nombre corto en mayúsculas
    $nombre   =ucwords($nombre);

    $insert = "insert into productos(nombre, nombre_corto, pvp, familia, descripcion) values(:n, :nc, :p, :f, :d)";
    $stmt1 = $conProyecto->prepare($insert);

    try {
        $stmt1->execute([
        ':n'  => $nombre,
        ':nc' => $nomCorto,
        ':p'  => $pvp,
        ':f'  => $familia,
        ':d'  => $des]);
    } catch (PDOException $ex) {
        die("Ocurrio un error al insertar el producto, mensaje de error: ".$ex->getMessage());
    }

    $stmt1=null;
    $conProyecto=null;
    echo "<p class='text-info font-weight-bold'>Producto guardado con éxito <a href='listado.php' class='btn btn-info'>Volver</a></p>";
?>