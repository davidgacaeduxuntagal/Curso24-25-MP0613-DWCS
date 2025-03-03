<?php
    if (!isset($_GET['id'])) { //si no mandamos el id volvemos a listado
        header('Location:listado.php');
    }

    $id = $_GET['id'];

    require_once 'conexion.php';

    $consulta1 = "select * from productos where id=:i";
    $stmt1 = $conProyecto->prepare($consulta1);

    try {
        $stmt1->execute([':i' => $id]);
    } catch (PDOException $ex) {
        die("Error al recuperar el producto " . $ex->getMessage());
    }

    $producto = $stmt1->fetch(PDO::FETCH_OBJ); //no hace falta while, esta consulta devuelve una fila.
    
    if (!$producto) {  // por proteccion de modificación manual de URL, si el id no existe en base de datos....
        header('Location:listado.php');
    }
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
    <title>Update</title>
</head>

<body style="background: #4dd0e1">
    <h3 class="text-center mt-2 font-weight-bold">Modificar Producto</h3>
    <div class="container mt-3">
<?php
    if (!isset($_POST['enviar'])) { // No envian datos: mostramos formulario modificar producto
       include "update_formularioproducto.php";
    }
    else {                          // Han enviado datos: los guardamos en base datos
        include "update_guardardatos.php";
    } 
?>
    </div>
</body>
</html>