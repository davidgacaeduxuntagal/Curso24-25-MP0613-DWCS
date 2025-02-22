<?php

$host        = "dwcs.localhost";
$urlrelativo = "/FPADISTANCIA/APUNTES/TEMA-06/TAREA-06/servidorSoap";
$uri         = "http://" . $host . $urlrelativo;
$url         = $uri . "/servicio.php";

try {
    $cliente = new SoapClient(null, ['location' => $url, 'uri' => $uri]);
} catch (SoapFault $f) {
    die("Error en cliente SOAP:" . $f->getMessage());
}
$codP = 13;
$codT = 1;
$codF = 'CONSOL';

//funcion getPvp ----------------------------------------------------------------------------
$pvp = $cliente->__soapCall('getPvp', ['id' => $codP]);
$precio = ($pvp == null) ? "No existe es Producto" : $pvp;
echo "Código de producto de Código $codP: $precio";


//funcion getFamilias -----------------------------------------------------------------------
echo "<br>Código de Familas";
$familias = $cliente->__soapCall('getFamilias', []);
echo "<ul>";
foreach ($familias as $k => $v) {
    echo "<code><li>$v</li></code>";
}
echo "</ul>";

//funcion getProductosFamila ----------------------------------------------------------------
$productos = $cliente->__soapCall('getProductosFamilia', ['codF' => $codF]);
echo "<br>Productos de la Famila $codF:";
echo "<ul>";
foreach ($productos as $k => $v) {
    echo "<code><li>$v</li></code>";
}
echo "</ul>";

// funcion getStock -------------------------------------------------------------------------
$unidades = $cliente->__soapCall('getStock', ['codP' => $codP, 'codT' => $codT]);
echo "<br>Unidades del producto de código; $codP en la tienda de código: $codT: $unidades";
