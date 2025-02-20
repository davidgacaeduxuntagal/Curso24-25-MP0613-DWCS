<?php
ini_set('display_errors', 0);

session_start();
require '../vendor/autoload.php';


use Clases\Gate;
use Clases\ISOCodes;
use Clases\ExchangeRatesByDateByISO;

// Para entender lo siguiente, hay que estudiar las clases en src que 
//  genera wsdl2phpgenerator  a partir del WSDL de la API
// Hay que ver qué métodos hay que tipos van devolviendo

// Obtenemos la lista de divisas soportadas 
// TODO: obtener nombre completo de la divisa a partir de código ISO
$servicio   = new Gate();
$solicitud  = new ISOCodes();
$divisas    = $servicio->ISOCodes($solicitud)
                       ->getISOCodesResult()
                       ->getString();

// $divisas = [
//     'USD' => 'Dolar USA',
//     'GBP' => 'Libra Esterlina',
//     'JPY' => 'Yen Japones',
//     'EUR' => 'Euro',
//     'CAD' => 'Dolar Canadiense',
// ];
$bancos = [
    "DCA" => 'Banco de Armenia',          // https://www.cba.am/EN/SitePages/newsdetails.aspx?NewsID=14
    // "LB" => 'Banco de Lituania',          // https://www.lb.lt/
];

$erroresConsulta = [
    '-1' => 'Cambio no encontrado.',
    '-2' => 'Error interno. Causa desconocida.',
    '-3' => 'Se especifica un valor incorrecto.',
    '-4' => 'Error interno. Número incorrecto de unidades.',
    '-5' => 'El cambio no existe para esos datos'
];

function calcularCambio($fecha, $dcmEur, $strCurrency)
{
    // Para entender lo siguiente, hay que estudiar las clases en src que 
    //  genera wsdl2phpgenerator  a partir del WSDL de la API
    // Hay que ver qué métodos hay que tipos van devolviendo
    $servicio                   = new Gate();

    // Obtener tasa de cambio de € a Dragma Armenio    
    $temp1                      = new ExchangeRatesByDateByISO(new DateTime($fecha), "EUR"); 
    $tasaDragmasArmeniosXEuro   = $servicio->ExchangeRatesByDateByISO($temp1)
                                           ->getExchangeRatesByDateByISOResult()
                                           ->getRates()
                                           ->getExchangeRate()[0]
                                           ->getRate();

    // Obtener tasa de cambio a Dragma Armenio                                           
    $temp2                      = new ExchangeRatesByDateByISO(new DateTime($fecha), $strCurrency);    
    $tasaDragmasArmeniosXDivisa = $servicio->ExchangeRatesByDateByISO($temp2)
                                           ->getExchangeRatesByDateByISOResult()
                                           ->getRates()
                                           ->getExchangeRate()[0]
                                           ->getRate();

    // Convertimos de Euro a Divisa elegida usando como intermediario el Dragma Armenio
    return ($dcmEur * $tasaDragmasArmeniosXEuro) * (1.0 / $tasaDragmasArmeniosXDivisa);
}

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
    <h3 class='text-center mt-3'>Ejercicio MODIFICADO 2.3 Unidad 6</h3>
    <div class="container mt-3">
        <?php
        if (isset($_POST['enviar'])) {
            $fecha       = $_POST['strDate'];
            $dcmEur      = $_POST['dcmEUR'];
            $strCurrency = $_POST['strCurrency'];
            $cambio      = calcularCambio($fecha, $dcmEur, $strCurrency);

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