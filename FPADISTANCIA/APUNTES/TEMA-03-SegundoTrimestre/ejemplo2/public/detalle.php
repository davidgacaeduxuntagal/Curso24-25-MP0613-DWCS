<?php
session_start();
if (!isset($_GET['id'])) { //si no mandamos el id volvemos a listado
    header('Location:listado.php');
}
if (isset($_SESSION['nombre'])) {
    $usuario = $_SESSION['nombre'];
    $validado = true;
} else {
    $usuario = "Invitado";
    $validado = false;
}
$id = $_GET['id'];
//Autoload de las clases
spl_autoload_register(function ($class) {
    require "../class/" . $class . ".php";
});
$producto = new Producto();
$producto->setId($id);
$datos = $producto->read();
$producto = null;
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- css para usar Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Detalle</title>
</head>

<body style="background: #4dd0e1">
<div class="float float-right d-inline-flex mt-2">
    <i class="fas fa-user mr-3 fa-2x"></i>
    <input type="text" size='10px' value="<?php echo $usuario; ?>"
           class="form-control mr-2 bg-transparent text-white" disabled>
    <?php
    if ($validado)
        echo "<a href='cerrar.php' class='btn btn-danger mr-2'>Salir</a>";
    else
        echo "<a href='login.php' class='btn btn-primary mr-2'>Login</a>";
    ?>
</div>
<br><br>
<h3 class="text-center mt-2 font-weight-bold">Detalle Producto</h3>
<div class="container mt-3">
    <div class="card text-white bg-info mt-5 mx-auto" style="max-width: 58rem;">
        <div class="card-header text-center text-weight-bold">
            <?php echo $datos[0]->nombre; ?>
        </div>
        <div class="card-body" style="font-size: 1.1em">
            <h5 class="card-title text-center"><?php echo "Codigo: " . $datos[0]->id; ?></h5>
            <p class="card-text"><b>Nombre:</b><?php echo $datos[0]->nombre; ?></p>
            <p class="card-text"><b>Nombre Corto: </b> <?php echo $datos[0]->nombre_corto; ?></p>
            <p class="card-text"><b>Codigo Familia: </b><?php echo $datos[0]->familia ?></p>
            <p class="card-text"><b>PVP (€): </b><?php echo $datos[0]->pvp; ?></p>
            <p class="card-text"><b>Descripción: </b><?php echo $datos[0]->descripcion; ?></p>
            <?php $datos = null ?>
        </div>
    </div>
    <div class="container mt-5 text-center">
        <a href="listado.php" class="btn btn-success">Volver</a>
    </div>
</div>

</body>

</html>