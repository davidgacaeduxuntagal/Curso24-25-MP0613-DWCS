<?php
//Fichero para generar las clases
require '../vendor/autoload.php';

use Wsdl2PhpGenerator\Generator;
use Wsdl2PhpGenerator\Config;


// Desactivar comprobación de certificado raíz
$context = stream_context_create([
    'ssl' => [
        // set some SSL/TLS specific options
        // 'verify_peer' => false,
        //'verify_peer_name' => false,
        //'allow_self_signed' => true,
        'cafile' => 'cacert-2023-01-10.pem'
    ]
]);

// Generar
$generator = new Generator();
$generator->generate(
    new Config([
        'inputFile' => 'https://cvnet.cpd.ua.es/servicioweb/publicos/pub_gestdocente.asmx?WSDL', //wsdl
        'outputDir' => '../src',  //directorio donde vamos a generar las clases
        'namespaceName' => 'Clases', //namespace que vamos a usar con ellas (indicar en composer)
        'soapClientOptions' => array(
        	// 'authentication' => SOAP_AUTHENTICATION_BASIC,
        	// 'login' => 'username',
        	// 'password' => 'secret',
        	// 'connection_timeout' => 60,
            'stream_context' => $context
            )
    ])
);