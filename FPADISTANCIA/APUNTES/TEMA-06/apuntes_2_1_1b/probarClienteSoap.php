<?php 
$cliente = new SoapClient("http://api.cba.am/exchangerates.asmx?WSDL");

$parametros=[ /* sin parámetros */ ];

$titulos=$cliente->ISOCodesDetailed($parametros);

// var_dump($titulos);
// print_r($titulos);
// print_r($titulos->ISOCodesDetailedResult->any);

// Obtenemos el XML de la respuesta
$cadena = $titulos->ISOCodesDetailedResult->any;

// Eliminamos el esquema XML, sino no podemos convertirlo a SimpleXMLElement
$cadena = preg_replace('/<xs:schema.*<\/xs:schema>/s', '', $cadena);

// Parseamos el XML
$resultado = new SimpleXMLElement($cadena);

// Cogemos un valor cualquiera como ejemplo de sintáxis:
$otro =  $resultado->DocumentElement[0]->ISOCodes[1]->ISO; 
echo $otro;

foreach ($resultado->DocumentElement[0]->ISOCodes as $iso) {
    echo $iso->ISO . " : " . $iso->DescriptionEN . PHP_EOL;
}

echo "FIN" . PHP_EOL;  