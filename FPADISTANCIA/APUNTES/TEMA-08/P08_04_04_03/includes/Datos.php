<?php
require 'Tiempo.php';

require(__DIR__ . '/../vendor/autoload.php');

use Jaxon\Jaxon;
use function Jaxon\jaxon;
use Jaxon\Response\Response;

$jaxon = jaxon();

function getTiempo($la, $lo) {
    $resp = jaxon()->newResponse();

    if (!validar($la, $lo)) {
        $resp->alert("Coordenada erróneas, revíselas");
        return $resp;
    }

    $datos   = new Tiempo($la, $lo);
    $tiempo  = $datos->getTiempo();
    $temp    = $tiempo['main']['temp'];
    $humedad = $tiempo['main']['humidity'];
    $tiem    = $tiempo['weather'][0]['description'];

    $resp->assign('tie', 'value', $tiem);
    $resp->assign('tem', 'value', $temp . "º");
    $resp->assign('hum', 'value', $humedad . "%");

    return $resp;
}

function getLocalizacion($la, $lo)  {
    $resp = jaxon()->newResponse();

    if (!validar($la, $lo)) {
        $resp->alert("Coordenada erróneas, revíselas");
        return $resp;
    }

    $datos     = new Tiempo($la, $lo);
    $ubicacion = $datos->getLocalizacion();
    $dir       = $ubicacion['formattedAddress'];
    $ciudad    = $ubicacion['locality'] . ", ". $ubicacion['adminDistrict2'];
    $pais      = $ubicacion['countryRegion'];
    
    $resp->assign('dir', 'value', $dir);
    $resp->assign('ciu', 'value', $ciudad);
    $resp->assign('pai', 'value', $pais);

    return $resp;
}

function validar($a, $b)
{
    if (strlen($a) == 0 || strlen($b) == 0 || !is_numeric($a) || !is_numeric($b)) return false;
    return true;
}


$jaxon->register(Jaxon::CALLABLE_FUNCTION, 'getTiempo');
$jaxon->register(Jaxon::CALLABLE_FUNCTION, 'getLocalizacion');

if($jaxon->canProcessRequest())  $jaxon->processRequest();
