<?php
session_start();
require '../vendor/autoload.php';

use Clases\Familia;
use Philo\Blade\Blade;

$views = '../views';
$cache = '../cache';
$blade = new Blade($views, $cache);
if (isset($_SESSION['nombre'])) {
    $titulo = 'Familias';
    $encabezado = 'Listado de Familias';
    $usuario = $_SESSION['nombre'];
    $familias = (new Familia())->recuperarFamilias();
    echo $blade
        ->view()
        ->make('vistaFamilias', compact('titulo', 'encabezado', 'usuario', 'familias'))
        ->render();
} else {
    echo $blade
        ->view()
        ->make('vistaLogin')
        ->render();
}