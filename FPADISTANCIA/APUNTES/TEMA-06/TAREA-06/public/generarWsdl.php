<?php
require '../vendor/autoload.php';

use PHP2WSDL\PHPClass2WSDL;

$host = "dwcs.localhost";
$urlrelativo = "/FPADISTANCIA/APUNTES/TEMA-06/TAREA-06/servidorSoap";
$uri = "http://" . $host . $urlrelativo;
$url = $uri . "/servicio.php";


$class = "Clases\\Operaciones";
$wsdlGenerator = new PHPClass2WSDL($class, $url);
$wsdlGenerator->generateWSDL(true);
$fichero = $wsdlGenerator->save('../servidorSoap/servicio.wsdl');
