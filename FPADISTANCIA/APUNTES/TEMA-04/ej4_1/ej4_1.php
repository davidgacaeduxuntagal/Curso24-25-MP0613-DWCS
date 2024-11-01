<?php
    include_once "conexion.php";
?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- css para usar Bootstrap -->
        <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Ejercicio Tema 3: Excepciones</title>
    </head>

    <body style="background: antiquewhite">
        <h3 class="text-center mt-2 font-weight-bold">Ejercicio Resuelto</h3>
        <div class="container mt-3">
<?php
            if ( isset($_POST['enviar']) && !$error ) {        //hemos enviado el formulario para consultar las unidades
                include "formulario1.php";              
            } elseif ( isset($_POST['enviar1']) && !$error ) { //Hemos enviado el formulario para modificar las unidades
                include "formulario2.php";              
            } else {                                           //no hemos enviado ningún formulario
                include "formulario3.php";
            }  // fin else
    echo "</div> <!-- hola -->";
        if ($error) {
            echo "<div class='container mt-3'><p class='text-danger font-weightbold'>$mensaje</p></div>";
        }
?>
    </body>
</html>