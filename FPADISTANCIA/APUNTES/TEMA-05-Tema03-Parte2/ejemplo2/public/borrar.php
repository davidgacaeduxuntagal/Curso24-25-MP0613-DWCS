<?php
session_start();
if (!isset($_POST['id']) || !isset($_SESSION['nombre'])) {
    //si no me llega el código del producto a borrar
    //o no estamos logeados
    //nos vamos a listado.php
    header('Location:listado.php');
}

$cod = $_POST['id'];

//Hacemos el autoload de las clases
spl_autoload_register(function ($class) {
    require "../class/" . $class . ".php";
});

$producto = new Producto();
$producto->setId($cod);
$producto->delete();
$producto = null;

$_SESSION['mensaje'] = "Artículo Borrado Correctamente";
header('Location:listado.php');
