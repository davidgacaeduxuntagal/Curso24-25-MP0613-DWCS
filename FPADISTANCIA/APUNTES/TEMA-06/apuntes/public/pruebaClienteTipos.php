<?php
  $cliente = 
    new SoapClient("https://cvnet.cpd.ua.es/servicioweb/publicos/pub_gestdocente.asmx?wsdl");

  $tipos = $cliente->__getTypes();
  echo "<ul>";
  foreach ($tipos as $k => $v) {
    echo "<li><code>$v</code></li>";
  }
  echo "</ul>";