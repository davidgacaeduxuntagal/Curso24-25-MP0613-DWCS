<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWES-PHP-B02-10</title>
</head>
<body style="font-family: monospace">

<form action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="get">
<?php
    $estado  = (!isset($_GET['estado'])) ? 0 : intval($_GET['estado']);
    $numero  = (!isset($_GET['numero'])  || preg_match("/^[01]{1,5}$/", $_GET['numero']) !== 1 || strlen($_GET['numero']) > 5) ? "INVALIDO" : $_GET['numero'];
    $decimal = (!isset($_GET['decimal']) ) ? "INVALIDO" : intval($_GET['decimal']);

    switch($estado) {
        case 0:
            $estado = 1;
            include "formulario1.php";
            break;

        case 1: 
            $estado = 1;
            if ( $numero === "INVALIDO" ) {
                include "formulario2.php";
            } else {
                $decimal = 0;
                $temp = intval($numero);
                $posicion = 0;
                while ( $temp > 0) {
                    $decimal += $temp % 10 === 1 ?  2 ** $posicion : 0;
                    $temp = (int) ($temp / 10);
                    $posicion++;
                }
                include "formulario3.php";
            }

            break;

        default: throw new Exception("Estado no válido: " . $estado);
    }
      
?>
</form>
</body>
</html>