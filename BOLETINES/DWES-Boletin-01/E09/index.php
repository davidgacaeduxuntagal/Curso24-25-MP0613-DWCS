<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWES-PHP-B01-09</title>
</head>
<body style="font-family: monospace">

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="get">
<?php
    $entero = empty($_GET['entero']) ? "": $_GET['entero'];

    if( !empty($_GET['botonReset']) ) {
        $entero = ""; 
    }

    echo <<<MARCA
    <p>
        <label for="numero">Introduzca un entero positivo de 5 dígito máximo:</label>
        <input type="number"  id="numero" name="entero" value="{$entero}" />
    </p>
MARCA;

    if ( $entero === "" )  {
        if( !empty($_GET['botonEviar']) ) {
            echo '<p style="color: red">Introduzca el entero solicitado, por favor</p>';
        } else {
            echo '<p">&nbsp;</p>';
        }

        echo '<p id="digitos">&nbsp;</p>';
    } else {
       if ( $entero >= 0) {
            $digitos = $entero % 10;
            $entero = floor($entero / 10);
            $digitos = ($entero % 10) . "   " . $digitos;
            $entero = floor($entero / 10);
            $digitos = ($entero % 10) . "   " . $digitos;
            $entero = floor($entero / 10);
            $digitos = ($entero % 10) . "   " . $digitos;
            $entero = floor($entero / 10);
            $digitos = ($entero % 10) . "   " . $digitos;
            $entero = floor($entero / 10);

            if ( $entero !== 0.0) {
                echo "<p id='digitos' style='color: red'>El número debe tener 5 dígitos o menos</p>";
            } else {
                echo "<p id='digitos'>Dígitos separados por 4 espacios: " . $digitos . "</p>";
            }
        } else {
            echo "<p id='digitos' style='color: red'>El número debe ser positivo</p>";
        }
    }
?>
        <button id="botonEnviar" type="submit" name="botonEnviar" value="Enviar">Enviar</button>      
        <button id="botonReset" type="submit" name="botonReset" value="Reset">Reset</button> 
    </form>
</body>
</html>