<?php 
function imprimirMatriz(int $filas, int $columnas): array {
    // Crear tabla básica que permite introducir los datos de la matriz
    echo "<br><br>";
    echo "<table class='matrix'>";
    echo "<thead></thead>";
    echo "<tbody>";

    $activa = false;
    if (isset($_GET['matriz'])) {
        $matriz = $_GET['matriz'];
        $activa = true;
    } else {
        $matriz = array();
    }

    // Añadir filas a la tabla 
    for($fila = 0; $fila < $filas; $fila++) {
        echo "<tr>";

        for($columna = 0; $columna < $columnas; $columna++) {
            echo "<td>";
            echo "<input type='number' name=\"matriz[$fila][$columna]\" "  . ($activa ? "value=\"{$matriz[$fila][$columna]}\" " : '' ) . "/>";   
            echo "</td>";
        }

        echo "</tr>";
    }
    
    echo "</tbody>";
    echo "</table>";


    return $matriz;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css" /> 

    <title>DWES-PHP-B05-E02</title>
</head>
<body >
    <h1>Lectura de matriz:</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="get">
<?php 
    $numeroFilas    = empty($_GET['numeroFilas'])    ? "": intval($_GET['numeroFilas']);
    $numeroColumnas = empty($_GET['numeroColumnas']) ? "": intval($_GET['numeroColumnas']);
    $primeraVez     = empty($_GET['primeraVez'])     ? "": $_GET['primeraVez'];


     echo <<<MARCA
        <div id="entrada">
            <p>
                <label for="numeroFilas">Introduzca el número de filas de la matriz:</label>
                <input type="number" id="numeroFilas" name="numeroFilas" value="{$numeroFilas}"/>
            </p>
            <p>
                <label for="numeroColumnas">Introduzca el número de columnas de la matriz:</label>
                <input type="number" id="numeroColumnas" name="numeroColumnas"  value="{$numeroColumnas}" />
            </p>        
            <button type="submit" >Enviar</button>
            <button type="reset" ><a href="{$_SERVER['PHP_SELF']}" style="text-decoration: none;">Borrar</a></button>

MARCA;
    if ( $numeroFilas === "" || $numeroColumnas === "" || $numeroFilas < 1 || $numeroColumnas < 1 ) {
        if ( $primeraVez === "" ) {
            echo <<<PRIMERAVEZ
                 <input type="hidden" name="primeraVez" value="false"/>
            </div>    
PRIMERAVEZ;
        } else {         
            echo <<<SEGUNDAVEZ
                 <input type="hidden" name="primeraVez" value="false"/>
            </div>   
            <div>
                <p id="salida" style="color: red">Por favor, introduzca ambos datos, 
                 número de filas y número de columnas, ambos enteros mayores o iguales a 1</p>
            </div> 
SEGUNDAVEZ;
        }
    } else {
        echo <<<DATOSOK
        <input type="hidden" name="primeraVez" value="false"/>
   </div>   
DATOSOK;     
        // Comprobamos si cambiaron los datos del formulario: si es así, reseteamos matriz:
        if ( isset($_GET['matriz']) && 
            ($numeroFilas !== count($_GET['matriz']) || 
             $numeroColumnas !== count($_GET['matriz'][0]) )) {
           unset($_GET['matriz']);
       }

        $matriz = imprimirMatriz($numeroFilas, $numeroColumnas);
    }
?>  
    </form>
</body>
</html>