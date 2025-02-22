<?php
ini_set('soap.wsdl_cache_enabled',0);
ini_set('soap.wsdl_cache_ttl',0);


//Fichero para generar las clases
require '../vendor/autoload.php';

use Wsdl2PhpGenerator\Generator;
use Wsdl2PhpGenerator\Config;

$host = "dwcs.localhost";
$urlrelativo = "/FPADISTANCIA/APUNTES/TEMA-06/TAREA-06/servidorSoap";
$uri = "http://" . $host . $urlrelativo;
$url = $uri . "/servicio.wsdl";


$generator = new Generator();
$generator->generate(
    new Config([
        'inputFile' => $url,
        'outputDir' => '../src/Clases1',
        'namespaceName' => 'Clases\Clases1'
    ])
);
