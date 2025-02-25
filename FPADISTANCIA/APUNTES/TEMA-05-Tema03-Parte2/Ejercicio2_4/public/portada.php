<?php
session_start();
require '../vendor/autoload.php';

use Philo\Blade\Blade;

$views = '../views';
$cache = '../cache';
$blade = new Blade($views, $cache);
if (isset($_SESSION['nombre'])) {
    $titulo = 'portada';
    $encabezado = 'Acceder a Información';
    $usuario = $_SESSION['nombre'];
    echo $blade
        ->view()
        ->make('vistaPortada', compact('titulo', 'encabezado', 'usuario'))
        ->render();
} else {
    echo $blade
        ->view()
        ->make('vistaLogin')
        ->render();
}