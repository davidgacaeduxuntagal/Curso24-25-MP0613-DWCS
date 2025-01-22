<?php
  // Obtener key grautíta en:
  // https://www.bingmapsportal.com/
  
  $urlLocalizacion = "http://dev.virtualearth.net/REST/v1/Locations";

  //Key Bing
  include("../claves.inc.php");

  $la = '42.264799151433';
  $lo = '-8.765128490705925';

  $revGeocodeUrl = $urlLocalizacion . "/$la,$lo?c=es&output=json&key={$keyBing}";
  
  $salida  = file_get_contents($revGeocodeUrl);
  $salida1 = json_decode($salida, true);

  print_r($salida1);

?>