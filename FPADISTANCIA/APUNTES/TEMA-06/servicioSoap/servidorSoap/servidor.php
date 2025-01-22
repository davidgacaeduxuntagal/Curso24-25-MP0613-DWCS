<?php
   class Operaciones {
     public function resta($a, $b)  {
       return $a - $b;
     }

     public function suma($a, $b)  {
       return $a + $b;
     }

     public function saludo($texto)  {
       return "¡¡¡Hola $texto!!!";
     }
   }

   $uri='http://127.0.0.1/dwes_tema_06/servicioSoap/servidorSoap';
   $parametros=['uri'=>$uri];
   
   try {
     $server = new SoapServer(NULL, $parametros);
     $server->setClass('Operaciones');
     $server->handle();
   } catch (SoapFault $f) {
     die("error en server: " . $f->getMessage());
   }  