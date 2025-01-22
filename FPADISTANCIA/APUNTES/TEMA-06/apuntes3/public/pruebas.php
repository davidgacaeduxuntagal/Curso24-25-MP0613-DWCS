<?php
session_start();
require '../vendor/autoload.php';

use Clases\Gate;
use Clases\ExchangeRatesByDateByISO;
use Clases\ExchangeRatesByDateByISOResponse;

use Clases\ExchangeRatesByDate;
use Clases\ExchangeRatesByDateResponse;

use Clases\ExchangeRate;
use Clases\ExchangeRates;
use Clases\ArrayOfExchangeRate;


ini_set('xdebug.var_display_max_depth', 10);
ini_set('xdebug.var_display_max_children', 256);
ini_set('xdebug.var_display_max_data', 1024);


$servicio = new Gate();

// Prueba 1
$solicitud = new ExchangeRatesByDateByISO(new DateTime('2023-04-28T00:00:00'), 'EUR');
$respuesta = $servicio->ExchangeRatesByDateByISO($solicitud);

var_dump($solicitud);
var_dump($respuesta);

// Prueba 2
$conversor = new ExchangeRatesByDate(new DateTime('2023-04-28T00:00:00'));
$respuesta = $servicio->ExchangeRatesByDate($conversor);
$objetoTasasDeCambio = $respuesta->getExchangeRatesByDateResult();
$tasasCambio = $objetoTasasDeCambio->getRates();
echo "Número de elementos: " . $tasasCambio->count() . "<br>";

for($i=0; $i < $tasasCambio->count();$i++) {
   $tasa = $tasasCambio->offsetGet($i);
       
    echo "Rate      : " . $tasa->getRate() . "<br>";
    echo "Amount    : " . $tasa->getAmount() . "<br>";
    echo "ISO       : " . $tasa->getISO() . "<br>";
    echo "Difference: " . $tasa->getDifference() . "<br>";
    echo "-----------------------------------" . "<br>";
}





?>
