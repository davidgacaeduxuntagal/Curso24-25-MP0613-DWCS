<?php
   $url = "http://127.0.0.1/dwes_tema_06/servicioweb/servidorSoap/servicio.wsdl";

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