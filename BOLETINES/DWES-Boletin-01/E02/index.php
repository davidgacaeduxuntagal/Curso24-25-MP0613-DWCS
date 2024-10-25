<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWES-PHP-B01-02</title>
</head>
<body style="font-family: monospace">

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="get">
<?php
    $botonEnviar = !isset($_GET['botonEnviar']) || $_GET['botonEnviar'] != "Enviar" ? false : true;
    $botonReset  = !isset($_GET['botonReset'])  || $_GET['botonReset'] != "Reset" ? false : true;

    // faltaría validar los enteros
    $valorU = empty($_GET['u']) ? "VACIO": $_GET['u']; 
    $valorA = empty($_GET['a']) ? "VACIO": $_GET['a'];
    $valorT = empty($_GET['t']) ? "VACIO": $_GET['t'];
    
    if( $botonReset ) {
        $valorU = "VACIO"; 
        $valorA = "VACIO";
        $valorT = "VACIO";
    }

    echo <<<MARCA
    <p>
        <label for="velocidadInicial">Introduzca velocidad inicial (m/s):</label>
        <input type="number" step="any" id="velocidadInicial" name="u" value="{$valorU}" />
    </p>
    <p>
        <label for="aceleracion">Introduzca aceleración del objeto (m/s^2):</label>
        <input type="number"  step="any" id="aceleracion" name="a" value="{$valorA}"  />
    </p>
    <p>
        <label for="tiempoTranscurrido">Introduzca tiempo transcurrido (s):</label>
        <input type="number"  step="any" id="tiempoTranscurrido" name="t" value="{$valorT}" />
    </p>
MARCA;

    if ( $valorU === "VACIO" || $valorA === "VACIO" || $valorT === "VACIO" )  {
        if ( $botonEnviar ) {
            echo '<p style="color: red">Rellene todos los campos, por favor</p>';
        } else {
            echo '<p>&nbsp;</p>';
        }
            echo <<<MARCA
            <p id="velocidad">&nbsp;</p>
            <p id="espacio">&nbsp;</p>
MARCA;
    } else {
        echo '<p>&nbsp;</p>';
        echo "<p id='velocidad'>La velocidad (v) es: " .  ((float) $valorU + $valorA * $valorT) . "</p>";
        echo "<p id='espacio'>El espacio recorrido (s) es: " . ( (float) $valorU * $valorT + 0.5 * $valorA * ($valorT**2)) . "</p>";
    }
?>
        <button id="botonEnviar" type="submit" name="botonEnviar" value="Enviar">Enviar</button>      
        <button id="botonReset" type="submit" name="botonReset" value="Reset">Reset</button> 
    </form>
</body>
</html>