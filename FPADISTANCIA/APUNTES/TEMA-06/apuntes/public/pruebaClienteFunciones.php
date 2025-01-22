<?php
    $cliente = 
      new SoapClient("https://cvnet.cpd.ua.es/servicioweb/publicos/pub_gestdocente.asmx?wsdl");
    $funciones = $cliente->__getFunctions();
    echo "<ul>";
    foreach ($funciones as $k => $v) {
        echo "<li><code>$v</code></li>";
    }
    echo "</ul>";