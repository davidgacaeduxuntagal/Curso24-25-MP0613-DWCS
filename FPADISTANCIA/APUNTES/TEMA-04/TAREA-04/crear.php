<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximumscale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- css para usar Bootstrap -->
        <link   rel="stylesheet"
                href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
                integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
                crossorigin="anonymous">
        <title>Crear</title>
    </head>
<body style="background: #4dd0e1">
    <h3 class="text-center mt-2 font-weight-bold">Crear Producto</h3>
    <div class="container mt-3">
<?php
    require_once 'conexion.php';
    
    if (!isset($_POST['enviar'])) { // No envian datos: mostramos formulario alta
       include "crear_formularioalta.php";
    }
    else {                          // Han enviado datos: los guardamos en base datos
        include "crear_guardardatos.php";
    } 
?>
    </div>
</body>
</html>