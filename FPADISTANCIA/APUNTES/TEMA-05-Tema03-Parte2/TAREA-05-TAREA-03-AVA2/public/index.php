<?php
// DEBUG
ini_set('display_errors', 0);
ob_end_flush();
ob_implicit_flush(true);
// END DEBUG

require '../vendor/autoload.php';

use Clases\Jugadores;

$jugador = new Jugadores();

if ($jugador->tieneDatos()) {
    $jugador = null;
    header('Location: jugadores.php');
} else {
    $jugador = null;
    header('Location: instalacion.php');
}
