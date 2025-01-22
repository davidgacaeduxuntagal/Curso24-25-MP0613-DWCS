<?php

require(__DIR__ . '/defs.php');

// Procesar la solicitud
if($jaxon->canProcessRequest())  $jaxon->processRequest();
