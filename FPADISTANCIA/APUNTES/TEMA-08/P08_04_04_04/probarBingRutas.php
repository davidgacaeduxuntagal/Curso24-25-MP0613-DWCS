<?php
  // Obtener key grautíta en:
  // https://www.bingmapsportal.com/


  //Key Bing
  include("../claves.inc.php");

  // Cambiar origen y destino por los que estimes interesantes:
  $url = "http://dev.virtualearth.net/REST/V1/Routes/Driving?c=es&o=json&wp.0=vigo&wp.1=cangas&key=" . $keyBing;

   $salida  = file_get_contents($url, true);
   $salida1 = json_decode($salida, true);

   // print_r($salida1);

   
   $distancia = $salida1['resourceSets'][0]['resources'][0]['travelDistance'];

  echo "$distancia km";
?>