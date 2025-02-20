<?php
  require '../vendor/autoload.php';

  
   // $uri='http://localhost/unidad6/servidorSoap';
   $uri='http://127.0.0.1/dwes_tema_06/servicioweb/servidorSoap';
   $parametros=['uri'=>$uri];
   
   try {
     $server = new SoapServer(NULL, $parametros);
     $server->setClass('Clases\Operaciones');
     $server->handle();
   } catch (SoapFault $f) {
     die("error en server: " . $f->getMessage());
   }  