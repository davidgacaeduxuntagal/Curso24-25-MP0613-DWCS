<?php
// DEBUG
ini_set('display_errors', 0);
ob_end_flush();
ob_implicit_flush(true);
// END DEBUG

session_start();
require '../vendor/autoload.php';

use Clases\Jugadores;
use Faker\Factory;

//Borramos todos los datos de todos los jugadores de la base de datos
$jugador = (new Jugadores())->borrarTodo();
$jugador = null;
//--------------------------------
$faker = Factory::create('es_Es');

$cantidad = 12; // Crearemos 15  jugadores
for ($i = 0; $i < $cantidad; $i++) {
    $jugador = new Jugadores();
    $jugador->setNombre($faker->firstName('male' | 'female'));
    $jugador->setApellidos($faker->lastName . " " . $faker->lastName);
    $jugador->setDorsal($faker->unique()->numberBetween(1, 60));
    $jugador->setPosicion($faker->numberBetween(1, 6));
    $jugador->setBarcode($faker->unique()->ean13);
    $jugador->create();
    $jugador = null;
}

$_SESSION['mensaje'] = 'Datos de Ejemplo Creados Correctamente';

header('Location:jugadores.php');
