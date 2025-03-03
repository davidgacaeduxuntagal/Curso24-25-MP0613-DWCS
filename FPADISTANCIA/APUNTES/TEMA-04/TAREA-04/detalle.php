<?php
    if (!isset($_GET['id'])) { //si no mandamos el id volvemos a listado
        header('Location:listado.php');
    }

    $id = $_GET['id'];

    require_once 'conexion.php';
    
    $consulta = "select * from productos where id=:i";
    $stmt = $conProyecto->prepare($consulta);
    
    try {
        $stmt->execute([':i' => $id]);
    } catch (PDOException $ex) {
        die("Error al recuperar el producto, mensaje de error: " . $ex->getMessage());
    }

    $producto = $stmt->fetch(PDO::FETCH_OBJ); //no hace falta while, esta consulta  devuelve una fila.
    
    if (!$producto) {  // por proteccion de modificación manual de URL, si el id no existe en base de datos....
        header('Location:listado.php');
    }

    // Ya podemos liberar los recursos de la conexión, pues tenemos los datos en $producto:
    $stmt = null;
    $conProyecto = null;
?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initialscale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- css para usar Bootstrap -->
        <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
            crossorigin="anonymous">
        <title>Detalle</title>
    </head>
<body style="background: #4dd0e1">
    <h3 class="text-center mt-2 font-weight-bold">Detalle Producto</h3>
<?php
    echo <<<MARCA
    <div class="container mt-3">
        <div class="card text-white bg-info mt-5 mx-auto" style="max-width: 58rem;">
            <div class="card-header text-center text-weight-bold"> $producto->nombre </div>
            <div class="card-body" style="font-size: 1.1em">
                <h5 class="card-title text-center">Codigo: $producto->id</h5>
                <p class="card-text"><b>Nombre:</b>$producto->nombre</p>
                <p class="card-text"><b>Nombre Corto: </b>$producto->nombre_corto</p>
                <p class="card-text"><b>Codigo Familia: </b>$producto->familia</p>
                <p class="card-text"><b>PVP (€): </b>$producto->pvp</p>
                <p class="card-text"><b>Descripción: </b>$producto->descripcion</p>
            </div>
        </div>
        <div class="container mt-5 text-center">
            <a href="listado.php" class="btn btn-info">Volver</a>
        </div>
    </div>
MARCA;
?>
</body>
</html>