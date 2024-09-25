<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWES-PHP-B03-01a</title>
</head>
<body style="font-family: monospace">

<form action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="get">
<?php
    include "sanitizar.php";
    $automata = [[1,1], [2, 1], [3, 1], [4, 1]];
    $total     = !isset($_GET['total'])     ? "NOVALIDO": formatoEnteroValido($_GET['total']);
    $termino   = !isset($_GET['termino'])   ? "NOVALIDO": formatoEnteroValido($_GET['termino']);
    $contador  = !isset($_GET['contador'])  ? "NOVALIDO": formatoEnteroValido($_GET['contador']);
    $sumatorio = !isset($_GET['sumatorio']) ? "NOVALIDO": formatoEnteroValido($_GET['sumatorio']);
    $estado    = !isset($_GET['estado'])    ? 0         : formatoEnteroValido($_GET['estado']);             // Comenzamos en estado ST0 = 0
    
    if ( $estado === "NOVALIDO" || $estado < 0 || $estado > 4) {
        throw new Exception("ERROR: han manipulado el HTML en cliente");
    } else {
        $estado = intval($estado);
    }

    switch($automata[$estado][0]) {               // 0 = siempre recibimos el evento Enviar (Reset tiene un enlace a empezar de nuevo)
        // --------------------------------------------
        case 1:
           $estado = 1;
           include "f1.php";
           break;
        // --------------------------------------------
        case 2:
            if ( $total === "NOVALIDO" || !($total > 0) ) {
                $estado = 1;
                include "f2.php";
            } else {
                $estado = 2;
                $contador = 1;
                $sumatorio = 0;
                include "f3.php";
            }
            break;
        // --------------------------------------------
        case 3:  
            if ( ($termino  !== "NOVALIDO") && ($contador < $total) )   {
                $estado = 2;
                $contador++;
                $sumatorio += $termino;
                include "f3.php";
            } else if ( ($termino  !== "NOVALIDO") && !($contador < $total ) ) {
                $estado = 3;
                $sumatorio += $termino;
                $media = $sumatorio / $total;
                include "f5.php";
            } else {
                $estado = 2;
                include "f4.php";
            }

            break;
 
        // --------------------------------------------
        case 4:
            $estado = 3;
            $media = $sumatorio / $total;
            include "f5.php";
            break;
    }
?>
</form>
</body>
</html>