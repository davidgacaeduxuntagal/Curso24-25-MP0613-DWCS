<?php
session_start();
require 'vendor/autoload.php';

$redirect_uri = 'http://localhost/dwes_tema_08/P08_04_04_05/probarTasks.php';
include("../claves.inc.php");


// Crear la solicitud de cliente 
$client = new Google_Client();
$client->setClientId($googleClientId);
$client->setClientSecret($googleClientSecret);
$client->setRedirectUri($redirect_uri);
$client->addScope('profile');
$client->addScope('email');
$client->setApplicationName('PruebaTasks');
$client->setScopes(Google_Service_Tasks::TASKS); 
$client->setPrompt('select_account consent');


if (isset($_GET['code'])) {
    $token=$client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    $_SESSION['token'] = $token;
    header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));

} else {
    echo "<a href='" . $client->createAuthUrl() . "'>Login with google</a>";
}


// set the access token as part of the client
if (!empty($_SESSION['token'])) {
        $client->setAccessToken($_SESSION['token']);
        if ($client->isAccessTokenExpired()) {
            unset($_SESSION['token']);
        }
} else {
        $authUrl = $client->createAuthUrl();
        header("Location:$authUrl"); //nos manda a la págian de google
}


$service = new Google_Service_Tasks($client);
$optParams = ['maxResults' => 10];
$results = $service->tasklists->listTasklists($optParams);



if (count($results->getItems()) == 0) {
      echo "Ninguna Lista de tareas encontrada";
} else {
      echo "<p><strong>Listas de Tareas:</strong></p>";
      foreach ($results->getItems() as $tasklist) {
            printf("%s (%s)<br>", $tasklist->getTitle(), $tasklist->getId());
      }
}



//cambia el id por el de la lista de tareas tuya
$res1 = $service->tasks->listTasks("UlZzTm82YXM5dm5hYXE2Rg"); 

echo   "<p><strong>Listando tareas de la lista seleccionada:</strong></p>";
foreach ($res1->getItems() as $tasklist) {
      printf("%s (%s)<br>", $tasklist->getTitle(), $tasklist->getId());
}


//  Insertar lista tareas:
echo "<p><strong>Insertanto lista tareas: .....</strong></p>";
$opciones =[ "title"=>"Lista de Tareas 3"];
$taskList = new Google_Service_Tasks_TaskList($opciones);
$service->tasklists->insert($taskList);

$op    = ["title"=>"Entregar Trabajo DWES", "notes"=>"Formato pdf", "due"=>"2023-05-15T10:57:00.000-08:00"];
$tarea = new Google_Service_Tasks_Task($op);

//pon el id de tu lista de tareas
$service->tasks->insert('UlZzTm82YXM5dm5hYXE2Rg', $tarea); 

//id_tasklist, idtask (Pon las tuyas)
//$service->tasks->delete("UlZzTm82YXM5dm5hYXE2Rg", "bU9hVFBDWlFPdFhnbVJGaQ"); 
