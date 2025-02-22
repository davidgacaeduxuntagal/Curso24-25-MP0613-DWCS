<?php
class Coordenadas  {
    private static $key = "";  
    private static $iniciourl = "http://dev.virtualearth.net/REST/v1/Locations/ES/Cangas/"; //Debes cambiar Cangas por tu localidad
    private $finurl           = "?include=ciso2&maxResults=1&c=es&key=";
    private $coordenadas;
    private $url;

    public function __construct()  {
        include("../../claves.inc.php");
        self::$key = $keyBing;

        $num = func_num_args();

        if ($num == 1) {
            $this->finurl = "?include=ciso2&maxResults=1&c=es&key=" . self::$key;
            $dir = str_replace(" ", "%20", func_get_arg(0));
            $this->url = self::$iniciourl . "$dir" . $this->finurl;
        }

        if ($num == 0) {
            $this->finurl = "?include=ciso2&maxResults=1&c=es&key=" . self::$key;
        }
    }


    public function getCoordenadas()  {
        $salida   = file_get_contents($this->url);
        $salida1  = json_decode($salida, true);
        $valor    = $salida1["resourceSets"][0]["resources"][0]["point"]["coordinates"];
        $valor[2] = $this->calculaAltitud($valor);

        return $valor;
    }

    public function calculaAltitud($c)  {
        $lat    = $c[0];
        $lon    = $c[1];
        $url    = "http://dev.virtualearth.net/REST/v1/Elevation/List?points=$lat,$lon&key=" . self::$key;
        $salida = file_get_contents($url);
        $valor  = json_decode($salida, true);
        
        return $valor["resourceSets"][0]["resources"][0]["elevations"][0];
    }

    public function ordenarEnvios($dato)   {
        //Ponemos las coordenadas del alamacen por ejemplo '36.86071,-2.440779' como inicio y fin de la ruta
        $base   = "http://dev.virtualearth.net/REST/v1/Routes/Driving?c=es&wp.0=36.86071,-2.440779&";
        $puntos = explode("|", $dato);
        $num    = 1;
        $trozo  = "";

        for ($i = 0; $i < count($puntos); $i++) {
            $trozo .= "wp." . $num++ . "=" . $puntos[$i] . "&";
        }

        $trozo .= "wp." . $num . "=36.86071,-2.440779&optwp=true&optimize=distance&ra=routePath&key=" . self::$key;
        $url = $base . $trozo;

        //die($url);
        $salida  = $this->getRemoteFile($url);
        $salida1 = json_decode($salida, true);

        if (isset($salida1["errors"]) && $salida1['statusCode'] == 404) {
            return "404";
        }
        
        $wayp = $salida1["resourceSets"][0]["resources"][0]['waypointsOrder'];
        
        //quitamos el primero y el ultimo (inicio y fin) (El almacen)
        array_shift($wayp);
        array_pop($wayp);

        for ($i = 0; $i < count($wayp); $i++) {
            $resp[] = substr(strstr($wayp[$i], '.'), 1);
        }

        return $resp;
    }

    public function getRemoteFile($url, $timeout = 10)  {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $file_contents = curl_exec($ch);
        curl_close($ch);

        return ($file_contents) ? $file_contents : FALSE;
    }
}
