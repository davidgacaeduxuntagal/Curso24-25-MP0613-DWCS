<?php
// DEBUG
ini_set('display_errors', 0);
ob_end_flush();
ob_implicit_flush(true);
// END DEBUG

session_start();
require '../vendor/autoload.php';

use Clases\Jugadores;
use Milon\Barcode\DNS1D;
use Philo\Blade\Blade;

$views = '../views';
$cache = '../cache';
$blade = new Blade($views, $cache);

$d          = new DNS1D();
$titulo     = 'Jugadores';
$encabezado = 'Listado de Jugadores';
$jugadores  = (new Jugadores())->recuperarJugadores();

$d->setStorPath($cache);

if (isset($_SESSION['mensaje'])) {
    $mensaje = $_SESSION['mensaje'];
    unset($_SESSION['mensaje']);       //para no volver a repetir el mensaje
    echo $blade
        ->view()
        ->make('vjugadores', compact('titulo', 'encabezado', 'jugadores', 'd', 'mensaje'))
        ->render();
} else {
    echo $blade
        ->view()
        ->make('vjugadores', compact('titulo', 'encabezado', 'jugadores', 'd'))
        ->render();
}
