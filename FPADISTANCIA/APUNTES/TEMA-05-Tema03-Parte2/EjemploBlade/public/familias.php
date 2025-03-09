<?php
ini_set('display_errors', 0);

require '../vendor/autoload.php';

use Clases\Familia;
use Philo\Blade\Blade;

$views = '../views';
$cache = '../cache';

$blade = new Blade($views, $cache);
$titulo = 'Familias';
$encabezado = 'Listado de Familias';
$familias = (new Familia())->recuperarFamilias();
echo $blade
    ->view()
    ->make('vistaFamilias', compact('titulo', 'encabezado', 'familias'))
    ->render();