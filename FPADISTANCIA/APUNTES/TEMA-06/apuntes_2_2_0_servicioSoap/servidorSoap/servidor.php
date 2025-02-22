<?php
ini_set('soap.wsdl_cache_enabled',0);
ini_set('soap.wsdl_cache_ttl',0);
// ini_set('always_populate_raw_post_data',-1);

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
 
   $host = "dwcs.localhost";
   $urlrelativo = "/FPADISTANCIA/APUNTES/TEMA-06/apuntes_2_2_0_servicioSoap/servidorSoap";
   $uri = "http://" . $host . $urlrelativo;
   $parametros=['uri'=>$uri];
   
   try {
     $server = new SoapServer(NULL, $parametros);
     $server->setClass('Operaciones');
     $server->handle();
   } catch (SoapFault $f) {
     die("error en server: " . $f->getMessage());
   } 
   // OJO: no se debe incluir ninguna salida adicional a partir de aquí, o se añadirá al XML de respuesta