<?php
// DEBUG
ini_set('display_errors', 0);
ob_end_flush();
ob_implicit_flush(true);
// END DEBUG

session_start();
require '../vendor/autoload.php';

use Philo\Blade\Blade;

$views = '../views';
$cache = '../cache';
$blade = new Blade($views, $cache);

$titulo     = 'Nuevo';
$encabezado = 'Crear Jugador';

if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    echo $blade
        ->view()
        ->make('vcrear', compact('titulo', 'encabezado', 'error'))
        ->render();
    unset($_SESSION['error']);
} else if (isset($_SESSION['codigo'])) {
    $code = $_SESSION['codigo'];
    unset($_SESSION['codigo']);
    echo $blade
        ->view()
        ->make('vcrear', compact('titulo', 'encabezado', 'code'))
        ->render();
} else {
    echo $blade
            ->view()
            ->make('vcrear', compact('titulo', 'encabezado'))
            ->render();
}