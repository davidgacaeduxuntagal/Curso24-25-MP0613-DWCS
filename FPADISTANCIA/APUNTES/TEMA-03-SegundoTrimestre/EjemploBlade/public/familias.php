<?php

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