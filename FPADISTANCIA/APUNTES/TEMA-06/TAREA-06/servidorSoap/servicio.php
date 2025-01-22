<?php
require '../vendor/autoload.php';

//$uri=$_SERVER['PHP_SELF'];
$uri = "http://127.0.0.1/dwes_tema_06/TAREA-06/servidorSoap/servicio.wsdl";
$parametros = ['uri' => $uri];

try {
    $server = new SoapServer(NULL, $parametros);
    $server->setClass('Clases\Operaciones');
    $server->handle();
} catch (SoapFault $f) {
    die("error en server: " . $f->getMessage());
}
