<?php

session_start();
//Hacemos el autoload de las clases
require '../vendor/autoload.php';

use Clases\Usuario;

function error($mensaje)
{
    $_SESSION['error'] = $mensaje;
    header('Location:login.php');
    die();
}

if (isset($_POST['login'])) {
    $nombre = trim($_POST['usuario']);
    $pass = trim($_POST['pass']);
    if (strlen($nombre) == 0 || strlen($pass) == 0) {
        error("Error, El nombre o la contraseña no pueden contener solo espacios en blancos.");
    }
    $usuario = new Usuario();
    if (!$usuario->isValido($nombre, $pass)) {
        $usuario = null;
        error("Credenciales Inválidas");
    }
    $usuario = null;
    $_SESSION['nombre'] = $nombre;
    header('Location:portada.php');
}
?>