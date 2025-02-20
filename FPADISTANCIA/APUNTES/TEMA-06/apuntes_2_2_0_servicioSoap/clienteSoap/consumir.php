<?php
   $url = 'http://127.0.0.1/dwes_tema_06/servicioSoap/servidorSoap/servidor.php';
   $uri = 'http://127.0.0.1/dwes_tema_06/servicioSoap/servidorSoap';
   $paramSaludo = ['texto' => "Manolo"];
   $param = ['a' => 51, 'b' => 29];

   try {
     $cliente = new SoapClient(null, ['location' => $url, 'uri' => $uri, 'trace'=>true]);
   } catch (SoapFault $ex) {
     echo "Error: ".$ex->getMessage();
   }

   $saludo = $cliente->__soapCall('saludo', $paramSaludo);
   $suma   = $cliente->__soapCall('suma', $param);
   $resta  = $cliente->__soapCall('resta', $param);

   echo "Resultado invocar saludo: " . $saludo . "<br>";
   echo "Resultado invocar suma: " . $suma . "<br>";
   echo "Resultado invocar resta: " . $resta . "<br>";

?>

