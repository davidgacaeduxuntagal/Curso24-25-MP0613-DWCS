<?php

class Tiempo  {
    private $respuesta;

    private $urlTiempo       = 'https://api.openweathermap.org/data/2.5/weather?';
    private $urlLocalizacion = "http://dev.virtualearth.net/REST/v1/Locations";

    private $opciones;
    private $revGeocodeUrl;

    public function __construct($la, $lo)   {
        include("../claves.inc.php");
     
        // Preparar datos acceso a consulta REST tiempo:
        $urlCompleto = $this->urlTiempo . '&lat=' . $la . "&lon=" . $lo . "&units=metric". "&lang=es" ."&appid=" . $keyOpenWeatherMap;

        $this->opciones = array(
            CURLOPT_URL => $urlCompleto,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            )
        ); 

        // Preparar datos acceso servicio localizacion Bing:
        $this->revGeocodeUrl = $this->urlLocalizacion . "/$la,$lo?c=es&output=json&key={$keyBing}";
    }

    public function getTiempo()  {
        $ch = curl_init();
        curl_setopt_array($ch, $this->opciones);
        $respuesta = curl_exec($ch);
        curl_close($ch);

        $salida = json_decode($respuesta, true);
        
        return $salida;
    }

    public function getLocalizacion() {
        $salida  = file_get_contents($this->revGeocodeUrl);
        $salida1 = json_decode($salida, true);

        return $salida1["resourceSets"][0]["resources"][0]["address"];
    }
}
