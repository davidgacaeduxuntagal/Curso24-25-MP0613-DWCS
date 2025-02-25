<?php
session_start();
require '../vendor/autoload.php';

use Clases\Producto;
use Philo\Blade\Blade;

$views = '../views';
$cache = '../cache';
$blade = new Blade($views, $cache);

if (isset($_SESSION['nombre'])) {
    $titulo = 'Productos';
    $encabezado = 'Listado de Productos';
    $usuario = $_SESSION['nombre'];
    $productos = (new Producto())->recuperarProductos();
    echo $blade
        ->view()
        ->make('vistaProductos', compact('titulo', 'encabezado', 'usuario', 'productos'))
        ->render();
} else {
    echo $blade
        ->view()
        ->make('vistaLogin')
        ->render();
}