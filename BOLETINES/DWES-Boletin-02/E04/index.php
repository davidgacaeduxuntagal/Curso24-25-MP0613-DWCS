<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWES-PHP-B02-04</title>
</head>
<body style="font-family: monospace">

<form action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="get">
<?php
    // Comprobamos todas las variables, por si es manipulado el HTML en el cliente:
    $estado   = (!isset($_GET['estado'])) ? 0 : intval($_GET['estado']);
    $numero   = (!isset($_GET['numero'])   || preg_match("/^\d+$/", $_GET['numero']) !== 1)   ? "INVALIDO" : intval($_GET['numero']);
    $mayor    = (!isset($_GET['mayor'])    || preg_match("/^\d+$/", $_GET['mayor']) !== 1)    ? "INVALIDO" : intval($_GET['mayor']); 
    $contador = (!isset($_GET['contador']) || preg_match("/^\d+$/", $_GET['contador']) !== 1) ? "INVALIDO" : intval($_GET['contador']);
       

    switch($estado) {
        case 0:
            $contador = 1;
            $mayor = 0;
            $estado = 1;
            include "formulario1.php";
            break;

        case 1: 
            if ( $contador === "INVALIDO" || $mayor === "INVALIDO" ) {
                throw new Error("Han manipulado el HTML: (\$contador=".$contador."  \$mayor=".$mayor);
            }

            $estado = 1;
            if ( $numero === "INVALIDO" || $numero < 1 ) {
                include "formulario2.php";
            } else if ($contador < 10 ) {
                if ( $numero > $mayor ) {
                    $mayor = $numero;
                }
                $contador++;
                include "formulario1.php";
            } else {
                if ( $numero > $mayor ) {
                    $mayor = $numero;
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