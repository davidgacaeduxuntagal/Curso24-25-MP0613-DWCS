<?php
session_start();
require '../vendor/autoload.php';


use Philo\Blade\Blade;

$views = '../views';
$cache = '../cache';

$blade = new Blade($views, $cache);
if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    echo $blade
        ->view()
        ->make('vistaLogin', compact('error'))
        ->render();
    unset($_SESSION['error']);
} else {
    echo $blade
        ->view()
        ->make('vistaLogin')
        ->render();
}