<?php
// DEBUG
ini_set('display_errors', 0);
ob_end_flush();
ob_implicit_flush(true);
// END DEBUG

session_start();
require '../vendor/autoload.php';

use Clases\Jugadores;

function error($text) {
    $_SESSION['error'] = $text;
    header('Location:fcrear.php');
    die();
}

$nom    = trim($_POST['nombre']);
$ape    = trim($_POST['apellidos']);
$pos    = $_POST['posicion'];
$dorsal = (int)$_POST['dorsal'];
$cod    = $_POST['barcode'];

if (strlen($nom) == 0 || strlen($nom) == 0) {
    error("Nombre y Apellidos deben conterner algún carácetr válido!!!");
}


$jugador = new Jugadores();
if ($jugador->existeDorsal($dorsal)) {
    $jugador = null;
    error("Ese Dorsal ya está elegido");
}

// Si hemos llegado aquí todo ha ido bién vamos a hacer el insert
$jugador->setNombre(ucwords($nom));
$jugador->setApellidos(ucwords($ape));
$jugador->setPosicion($pos);

if ($dorsal != 0) $jugador->setDorsal($dorsal);
$jugador->setBarcode($cod);
$jugador->create();
$jugador = null;

$_SESSION['mensaje'] = "Jugador Creado con exito";
header('Location:jugadores.php');

