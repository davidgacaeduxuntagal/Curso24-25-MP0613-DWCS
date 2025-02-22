<?php
include 'ejemplo.php';

$movies = new SimpleXMLElement($xmlstr);

echo $movies->movie[0]->plot;

echo PHP_EOL;
?>