<?php
    // ob_end_flush();
    // ob_implicit_flush(true);
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximumscale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- css para usar Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
                        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
                        crossorigin="anonymous">
    <title>Tema 4   </title>
</head>
<body style="background: #4dd0e1">
    <h3 class="text-center mt-2 font-weight-bold">Gestión de Productos</h3>
    <div class="container mt-3">
        <a href="crear.php" class='btn btn-success mt-2 mb-2'>Crear</a>
        <table class="table table-striped table-dark">
            <thead>
                <tr class="text-center">
                    <th scope="col">Detalle</th>
                    <th scope="col">Codigo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
<?php
    require_once 'conexion.php';
    $consulta = "select id, nombre from productos order by nombre";
    $stmt = $conProyecto->prepare($consulta);
    
    try {
        $stmt->execute();
    } catch (PDOException $ex) {
        die("Error al recuperar los productos " . $ex->getMessage());
    }

    while ($filas = $stmt->fetch(PDO::FETCH_OBJ)) {
        echo <<<MARCA
        <tr class='text-center'>
            <th scope='row'><a href='detalle.php?id={$filas->id}' class='btn btn-info'>Detalle</a></th>
            <td>{$filas->id}</td>
            <td>{$filas->nombre}</td>
            <td>
                <form name='a' action='borrar.php' method='POST'  style='display:inline'>
                    <a href='update.php?id={$filas->id}' class='btn btn-warning mr2'>Actualizar</a>
                    <input type='hidden' name='id' value='{$filas->id}'> <!-- mandamos el código del producto a borrar -->
                    <input type='submit' onclick="return confirm('¿Borrar Producto?')" class='btn btn-danger' value='Borrar'>
                </form>
            </td>
        </tr>
MARCA;
    }
    $stmt = null;
    $conProyecto = null;
?>
            </tbody>
        </table>
    </div>
</body>
</html>