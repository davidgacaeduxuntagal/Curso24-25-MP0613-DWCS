<?php 

$cliente = new SoapClient("https://cvnet.cpd.ua.es/servicioweb/publicos/pub_gestdocente.asmx?wsdl");

$parametros=[
    'plengua'=>'es',
    'pcurso'=>'2025'
 ];

 $titulos=$cliente->wstitulosuni($parametros);

 // var_dump($titulos);
 print_r($titulos);


 
 echo "FIN" . PHP_EOL;  