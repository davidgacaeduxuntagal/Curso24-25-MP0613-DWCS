<?php
 require '../vendor/autoload.php';

 use Clases\Pub_gestdocente;
 use Clases\wstitulosuni;
 
 $service = new Pub_gestdocente();
 $request=new wstitulosuni('es', '2025');
 $titulos=$service->wstitulosuni($request);
 
 var_dump($titulos);