<?php
require '../vendor/autoload.php';

$host        = "dwcs.localhost";
$urlrelativo = "/FPADISTANCIA/APUNTES/TEMA-06/TAREA-06/servidorSoap";
$uri         = "http://" . $host . $urlrelativo;
$url         = $uri . "/servicio.wsdl";

$parametros = ['uri' => $url];

try {
    $server = new SoapServer(NULL, $parametros);
    $server->setClass('Clases\Operaciones');
    $server->handle();
} catch (SoapFault $f) {
    die("error en server: " . $f->getMessage());
}
