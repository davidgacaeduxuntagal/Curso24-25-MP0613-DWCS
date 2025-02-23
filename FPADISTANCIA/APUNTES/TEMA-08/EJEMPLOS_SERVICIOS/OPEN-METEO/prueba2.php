<?php

// https://open-meteo.com/


// $ curl "https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&past_days=10&hourly=temperature_2m,relative_humidity_2m,wind_speed_10m"

$curl = curl_init();

$urlBase = 'https://api.open-meteo.com/v1/forecast?';
$ciudad  = 'Vigo';
$lat     = '42.264799151433';
$lon     = '-8.765128490705925';

$url   = $urlBase . 'latitude=' . $lat . '&longitude=' . $lon . '&past_days=10&hourly=temperature_2m,relative_humidity_2m,wind_speed_10m';

curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
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
// curl_setopt($curl,CURLOPT_VERBOSE, true );
// curl_setopt($curl,CURLOPT_CERTINFO, true );

$response = curl_exec($curl);
$err = curl_error($curl);

// ver información transferencia
// var_dump(curl_getinfo($curl));

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

$salida = json_decode($response, true);
print_r($salida);

echo "FIN" . PHP_EOL;