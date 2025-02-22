<?php
session_start();
require '../vendor/autoload.php';


$redirect_uri = 'http://localhost/FPADISTANCIA/APUNTES/TEMA-08/TAREA-08/public/repartos.php';
include("../../claves.inc.php");


// Crear la solicitud de cliente 
$client = new Google_Client();
$client->setClientId($googleClientIdTarea8);
$client->setClientSecret($googleClientSecretTarea8);
$client->setRedirectUri($redirect_uri);
$client->addScope('profile');
$client->addScope('email');
$client->setApplicationName('PruebaTasks');
$client->setScopes(Google_Service_Tasks::TASKS); 
$client->setPrompt('select_account consent');

// Por si queremos cerrar sesion solo hay que poner en la url ?logout
if (isset($_REQUEST['logout'])) {
    unset($_SESSION['token']);
}

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    // Guardamos el token en una variable de sesion
    $_SESSION['token'] = $token;

    // redirigimas a esta misma página
    header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}

// set the access token as part of the client
if (!empty($_SESSION['token'])) {
    $client->setAccessToken($_SESSION['token']);
    if ($client->isAccessTokenExpired()) {
        unset($_SESSION['token']);
    }
} else {
    $authUrl = $client->createAuthUrl();
    header("Location:$authUrl");
}
