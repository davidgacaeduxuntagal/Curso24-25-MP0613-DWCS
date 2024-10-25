<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWES-PHP-B01-01d-automata</title>
</head>
<body style="font-family: monospace">

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="get">
<?php
    /* 
    *   Solución usando técnica de un autómata
    *
    */
    include "sanitizar.php";
    $automata = [[1,1], [2, 1]];
    $numero1  = !isset($_GET['numero1']) ? "NOVALIDO": formatoEnteroValido($_GET['numero1']);
    $numero2  = !isset($_GET['numero2']) ? "NOVALIDO": formatoEnteroValido($_GET['numero2']);    
    $estado   = !isset($_GET['estado'])  ? 0         : formatoEnteroValido($_GET['estado']);    // Comenzamos en estado ST0 = 0
    $botonEnviar = !isset($_GET['botonEnviar']) || $_GET['botonEnviar'] != "Enviar" ? false : true;
    $botonReset  = !isset($_GET['botonReset'])  || $_GET['botonReset'] != "Reset" ? false : true;

    // Comprobamos que el estado no ha sido manipulado en el cliente:
    if ( $estado === "NOVALIDO" || $estado < 0 || $estado > 1) {
        throw new Exception("ERROR: han manipulado el HTML en cliente");
    } else {
        $estado = intval($estado);
    }

    // Comprobamos el evento entrante:
    if ( $botonEnviar && $botonReset) {
        throw new Exception("ERROR: eventos enviados incorrectos");
    } else if ( $botonEnviar && !$botonReset ) {  // botón enviar presionado
        $evento = 0;
    } else if ( !$botonEnviar && $botonReset ){   // botón reset presionado
        $evento = 1;
    } else {                                      // ningún botón presionado: entrada al programa
        $evento = 1;   // no importa cuál elegimos, ambos llevan a bloque transición T1
    }

    switch($automata[$estado][$evento]) {     
        // ---- TRANSICIÓN T1 --------------------------
        case 1:
           $estado = 1;
           include "formularioInicio.php";   
           break;        
        
        // ---- TRANSICIÓN T2 --------------------------
        case 2:
            if ( $numero1 == "NOVALIDO" || $numero2 == "NOVALIDO" ) {
                $estado = 1;
                include "formularioConErrores.php";
            } else {
                $estado = 1;
                $suma     = $numero1 + $numero2;
                $resta    = $numero1 - $numero2;
                $producto = $numero1 * $numero2;
                $resto    = $numero1 % $numero2;                
                include "formularioResultados.php";
            }
            break;         
    }    
?>
        <button id="botonEnviar" type="submit" name="botonEnviar" value="Enviar">Enviar</button>      
        <button id="botonReset" type="submit" name="botonReset" value="Reset">Reset</button> 
    </form>
</body>
</html>