<?php

$curl = curl_init();

include("../claves.inc.php");

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://opendata.aemet.es/opendata/api/valores/climatologicos/inventarioestaciones/todasestaciones/?api_key=" .$keyAEMET, 
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

// Configurar opciones depuración
//curl_setopt($curl,CURLOPT_VERBOSE, true );
curl_setopt($curl,CURLOPT_CERTINFO, true );

$response = curl_exec($curl);
$err = curl_error($curl);

// ver información transferencia
var_dump(curl_getinfo($curl));

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
