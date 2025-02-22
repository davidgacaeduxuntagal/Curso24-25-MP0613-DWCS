<?php
ini_set('soap.wsdl_cache_enabled',0);
ini_set('soap.wsdl_cache_ttl',0);

   require '../vendor/autoload.php';

   use PHP2WSDL\PHPClass2WSDL;

   $class = "Clases\\Operaciones";

   $host = "dwcs.localhost";
   $urlrelativo = "/FPADISTANCIA/APUNTES/TEMA-06/apuntes_2_2_2_servicioWeb/servidorSoap";
   $uri = "http://" . $host . $urlrelativo;
   $url = $uri . "/servidor.php";

   $wsdlGenerator = new PHPClass2WSDL($class, $url);
   $wsdlGenerator->generateWSDL(true);
   $fichero = $wsdlGenerator->save('../servidorSoap/servicio.wsdl');