<?php
session_start();
require '../vendor/autoload.php';

use Clases\ExchangeRates;
use Clases\getExchangeRatesByDate;
use Clases\getExchangeRatesByDateResponse;
use Clases\getCurrentExchangeRate;

$divisas = [
    'USD' => 'Dolar USA',
    'GBP' => 'Libra Esterlina',
    'JPY' => 'Yen Japones'
];

$bancos = [
    "BS" => 'Banco de Eslovenia',
    "NLB" => 'Nuevo Ljubbljanka Bank',
    "SKB" => 'SKB Bank',
    "NKBM" => 'Nuevo KBM'
];

$erroresConsulta = [
    '-1' => 'Cambio no encontrado.',
    '-2' => 'Error interno. Causa desconocida.',
    '-3' => 'Se especifica un valor incorrecto.',
    '-4' => 'Error interno. Número incorrecto de unidades.',
    '-5' => 'El cambio no existe para esos datos'
];

$service = new ExchangeRates();
// $listaMonedas = new getExchangeRatesByDate('2004-10-10+13:00');
// $cambio = $service->getExchangeRatesByDate($listaMonedas);
// var_dump($cambio);
$cambioActual = new getCurrentExchangeRate('EUR');
$cambioActual->setCurrency('EUR');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Cambio</title>
</head>

<body style='background-color:lightgray'>
    <h3 class='text-center mt-3'>Ejercicio 2.3 Unidad 6</h3>
    <div class="container mt-3">
        <?php
        if (isset($_POST['enviar'])) {
            $fecha       = $_POST['strDate'];
            $dcmEur      = $_POST['dcmEUR'];
            $strCurrency = $_POST['strCurrency'];
            $intRank     = $_POST['intRank'];
            $strBank     = $_POST['strBank'];
            $cambio      = calcularCambio($dcmEur, $strBank, $strCurrency, $fecha, $intRank);
            if ($cambio <= -1 && $cambio >= -5) {
                $_SESSION['error'] = $erroresConsulta[(int) ($cambio)];
                header("Location:{$_SERVER['PHP_SELF']}");
                die();
            }
            $_SESSION['res'] = $cambio;
        }
        ?>
        <form action='<?php echo $_SERVER['PHP_SELF']; ?>' method='POST'>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="c">Cantidad (€)</label>
                    <input type="number" class="form-control" id='c' placeholder='Cantidad (€)' name='dcmEUR' min=0 step="0.01" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="div">Divisa</label>
                    <select class="form-control" id="div" name='strCurrency' required>
                        <?php
                        foreach ($divisas as $k => $v) {
                            echo "<option value='$k'>$v</option>";
                        }
                        ?>
                    </select>

                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="div">Operacion</label>
                    <select class="form-control" id="op" name='intRank'>
                        <option value=1>Compra</option>
                        <option value=2>Intermedio</option>
                        <option value=3>Venta</option>


                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="ban">Banco</label>
                    <select class="form-control" id="ban" name='strBank'>
                        <?php
                        foreach ($bancos as $k => $v) {
                            echo "<option value='$k'>$v</option>";
                        }
                        ?>
                    </select>

                </div>
                <div class="form-group col-md-4">
                    <label for="ban">Fecha</label>
                    <input type='date' name='strDate' require class='form-control'>
                </div>
            </div>
            <?php

            echo "<div class='form-row'><div class='form-group col-md-4'>";
            if (isset($_SESSION['error'])) {
                echo "<label>Error</label>";
                echo "<input type='text' class='form-control text-danger' value='{$_SESSION['error']}' readonly>";
                unset($_SESSION['error']);
            }
            if (isset($_SESSION['res'])) {
                echo "<label>Cambio</label>";
                echo "<input type='text' class='form-control text-success' value='{$_SESSION['res']}' readonly>";
                unset($_SESSION['res']);
            }
            echo "</div></div>";
            ?>
            <div class="form-row">
                <div class='form-group col-md-4'>
                    <input type='submit' name='enviar' value='Calcular' class='btn btn-success mr-2'>
                    <input type='reset' value='Limpiar' class='btn btn-warning mr-3'>

                </div>

            </div>
        </form>

    </div>
</body>

</html>