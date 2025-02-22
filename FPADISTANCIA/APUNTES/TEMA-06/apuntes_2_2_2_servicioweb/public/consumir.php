<?php
ini_set('soap.wsdl_cache_enabled',0);
ini_set('soap.wsdl_cache_ttl',0);

   $host = "dwcs.localhost";
   $urlrelativo = "/FPADISTANCIA/APUNTES/TEMA-06/apuntes_2_2_2_servicioWeb/servidorSoap";
   $uri = "http://" . $host . $urlrelativo;
   $url = $uri . "/servicio.wsdl";


   try {
     $cliente = new SoapClient($url);
   } catch (SoapFault $ex) {
     die("Error en el cliente: " . $ex->getMessage());
   }

   //Vemos las funciones que nos ofrece el servicio
   var_dump($cliente->__getFunctions()); 
   echo "<br>";

   //una manera de llamar a suma
   echo $cliente->suma(20, 40); 
   echo "<br>";
   
   //otra forma de llamar a suma
   $para = ['a' => 12, 'b' => 45];
   echo $cliente->__soapCall('suma', $para);