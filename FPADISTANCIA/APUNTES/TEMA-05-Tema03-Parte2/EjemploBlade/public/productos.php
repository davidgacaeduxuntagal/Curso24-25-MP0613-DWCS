<?php
ini_set('display_errors', 0);

require '../vendor/autoload.php';

use Clases\Producto;
use Philo\Blade\Blade;

$views = '../views';
$cache = '../cache';
$blade = new Blade($views, $cache);
$titulo = 'Productos';
$encabezado = 'Listado de Productos';
$productos = (new Producto())->recuperarProductos();
echo $blade
    ->view()
    ->make('vistaProductos', compact('titulo', 'encabezado', 'productos'))
    ->render();