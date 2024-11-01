<?php
session_start();
//Comprobamos si somos un usuario invitado o normal
if (isset($_SESSION['nombre'])) {
    $usuario = $_SESSION['nombre'];
    $validado = true;
} else {
    $usuario = "Invitado";
    $validado = false;
}
//Hacemos el autoload de las clases
spl_autoload_register(function ($class) {
    require "../class/" . $class . ".php";
});

// recuperamos los productos 

$productos = new Producto();
$stmt = $productos->recuperarProductos();
// Cerramos todo
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
    <title>Tema 5</title>
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

<h3 class="text-center mt-2 font-weight-bold">Gestión de Productos</h3>
<?php
if (isset($_SESSION['mensaje'])) {
    echo "<h4 class='container text-info'>";
    echo "<i class='fa fa-exclamation-triangle'></i> " . $_SESSION['mensaje'];
    unset($_SESSION['mensaje']);
    echo "</h4>";
}
?>
<div class="container mt-3">
    <?php
    if ($validado)
        echo "<a href='crear.php' class='btn btn-success mt-2 mb-2'><i class='fa fa-plus'></i> Crear</a>";
    else
        echo "<a href='crear.php' class='btn btn-success mt-2 mb-2 disabled'><i class='fa fa-plus'></i> Crear</a>";
    ?>
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
        while ($filas = $stmt->fetch(PDO::FETCH_OBJ)) {
            echo "<tr class='text-center'><th scope='row'><a href='detalle.php?id={$filas->id}' class='btn btn-info'>Detalle</a>";
            echo "<td>{$filas->id}</td>";
            echo "<td>{$filas->nombre}</td>";
            echo "<td>";
            if ($validado) {
                echo "<form name='a' action='borrar.php' method='POST' style='display:inline'>";
                echo "<a href='update.php?id={$filas->id}' class='btn btn-warning mr-2'>Actualizar</a>";
                echo "<input type='hidden' name='id' value='{$filas->id}'>"; //mandamos el código del producto a borrar
                echo "<input type='submit' onclick=\"return confirm('¿Borrar Producto?')\" class='btn btn-danger' value='Borrar'>";
                echo "</form>";
            } else {
                echo "<a href='update.php?id={$filas->id}' class='btn btn-warning mr-2 disabled'>Actualizar</a>";
            }
            echo "</td>";
            echo "</tr>";
        }
        $stmt = null;
        ?>
        </tbody>
    </table>
</div>
</body>

</html>