<?php
ini_set('soap.wsdl_cache_enabled',0);
ini_set('soap.wsdl_cache_ttl',0);

  require '../vendor/autoload.php';

  
   $host = "dwcs.localhost";
   $urlrelativo = "/FPADISTANCIA/APUNTES/TEMA-06/apuntes_2_2_2_servicioWeb/servidorSoap";
   $uri = "http://" . $host . $urlrelativo;
  

   $parametros=['uri'=>$uri];
   
   try {
     $server = new SoapServer(NULL, $parametros);
     $server->setClass('Clases\Operaciones');
     $server->handle();
   } catch (SoapFault $f) {
     die("error en server: " . $f->getMessage());
   }  