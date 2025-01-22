<?php
session_start();
require 'vendor/autoload.php';

include("../claves.inc.php");
$redirect_uri = 'http://localhost/dwes_tema_08/P08_04_04_05/probarAuth2.php';


// Crear la solicitud de cliente 
$client = new Google_Client();
$client->setClientId($googleClientId);
$client->setClientSecret($googleClientSecret);
$client->setRedirectUri($redirect_uri);
$client->addScope('profile');
$client->addScope('email');


if (isset($_GET['code'])) {
    $token=$client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    $gauth = new Google_Service_Oauth2($client);

    $google_info = $gauth->userinfo->get();
    $email = $google_info->email;
    $name  = $google_info->name;
    
    echo "Benvido " . $name . " estás rexistrado usando email: " . $email;

} else {
    echo "<a href='" . $client->createAuthUrl() . "'>Login with google</a>";

}