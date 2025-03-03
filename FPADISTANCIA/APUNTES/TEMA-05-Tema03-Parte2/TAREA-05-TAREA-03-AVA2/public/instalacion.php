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

$titulo = 'Install';
$encabezado = 'Instalación';
echo $blade
    ->view()
    ->make('vinstalacion', compact('titulo', 'encabezado'))
    ->render();
