<?php
ini_set('soap.wsdl_cache_enabled',0);
ini_set('soap.wsdl_cache_ttl',0);
// ini_set('always_populate_raw_post_data',-1);


// OJO!!!
// El nombre DNS dwcs.localhost debe estar definido en el fichero C:\Windows\System32\drivers\etc\hosts
// Los navegadores actuales no lo necesitan pero el cliente SOAP sí
   $host = "dwcs.localhost";
   $urlrelativo = "/FPADISTANCIA/APUNTES/TEMA-06/apuntes_2_2_0_servicioSoap/servidorSoap";
   $uri = "http://" . $host . $urlrelativo;
   $url = $uri . "/servidor.php";
   

   $paramSaludo = ['texto' => "Manolo"];
   $param = ['a' => 51, 'b' => 29];

   try {
     $cliente = new SoapClient(null, ['location' => $url, 'uri' => $uri, 'trace'=> 1, 'exceptions' => 0]);
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

