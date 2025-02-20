<?php
session_start();
require '../vendor/autoload.php';

use Clases\ExchangeRates;
use Clases\getExchangeRatesByDate;
use Clases\getExchangeRatesByDateResponse;
use Clases\getCurrentExchangeRate;
use Clases\getCurrentExchangeRateResponse;
use Clases\getExchangeRate;
use Clases\getExchangeRateResponse;


// $divisas = [
//     'USD' => 'Dolar USA',
//     'GBP' => 'Libra Esterlina',
//     'JPY' => 'Yen Japones'
// ];

// $bancos = [
//     "BS" => 'Banco de Eslovenia',
//     "NLB" => 'Nuevo Ljubbljanka Bank',
//     "SKB" => 'SKB Bank',
//     "NKBM" => 'Nuevo KBM'
// ];

// $erroresConsulta = [
//     '-1' => 'Cambio no encontrado.',
//     '-2' => 'Error interno. Causa desconocida.',
//     '-3' => 'Se especifica un valor incorrecto.',
//     '-4' => 'Error interno. Número incorrecto de unidades.',
//     '-5' => 'El cambio no existe para esos datos'
// ];

$service = new ExchangeRates();

// Prueba 1:
$tasasDeCambio = new getExchangeRatesByDate('2013-10-10+13:00');
$cambio = $service->getExchangeRatesByDate($tasasDeCambio);
$fecha = $tasasDeCambio->getDate();
var_dump($cambio);
echo "Fecha: " . $fecha . "<br>";
echo "<hr>";

// Prueba 2:
$objetogetCurrentExchangeRate = new getCurrentExchangeRate('AED');
$cambioEUR = $service->getCurrentExchangeRate($objetogetCurrentExchangeRate);
$resultadoCambio = $cambioEUR->getGetCurrentExchangeRateResult();
$moneda = $objetogetCurrentExchangeRate->getCurrency();
var_dump($cambioEUR);
echo "Resultado cambio: " . $resultadoCambio . "<br>";
echo "Moneda: " . $moneda . "<br>";
echo "<hr>";


// Prueba 3:
// $objetogetExchangeRate = new getExchangeRate('AED', '2013-10-10+13:00');
// $cambioEUR = $service->getExchangeRate($objetogetExchangeRate);
// $resultadoCambio = $cambioEUR->getGetCurrentExchangeRateResult();
// $moneda = $objetogetCurrentExchangeRate->getCurrency();
// var_dump($cambioEUR);
// echo "Resultado cambio: " . $resultadoCambio . "<br>";
// echo "Moneda: " . $moneda . "<br>";
// echo "<hr>";

?>
