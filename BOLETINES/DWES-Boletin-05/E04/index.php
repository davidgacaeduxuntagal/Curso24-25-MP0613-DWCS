<?php 
function imprimirMatriz(int $filas, int $columnas, int $numeroMatriz): array {
    // Crear tabla básica que permite introducir los datos de la matriz
    echo "<table class='matrix'>";
    echo "<thead></thead>";
    echo "<tbody>";

    $activa = false;
    if (isset($_GET['matriz' . $numeroMatriz])) {
        $matriz = $_GET['matriz' . $numeroMatriz];
        $activa = true;
    } else {
        $matriz = array();
    }

    // Añadir filas a la tabla 
    for($fila = 0; $fila < $filas; $fila++) {
        echo "<tr>";

        for($columna = 0; $columna < $columnas; $columna++) {
            echo "<td>";
            echo "<input type='number' name=\"matriz{$numeroMatriz}[$fila][$columna]\" "  . ($activa ? "value=\"{$matriz[$fila][$columna]}\" " : '' ) . "/>";   
            echo "</td>";
        }

        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";

    return $matriz;
}

function productoMatricial($m1, $m2): array {
    // Comprobar dimensiones
    $m1Filas    = count($m1);
    $m1Columnas = count($m1[0]);
    $m2Filas    = count($m2);
    $m2Columnas = count($m2[0]);

    if ( $m1Columnas !== $m2Filas ) {
        throw new Exception("Dimensiones de matrices no compatibles");
    } else {
        for($fila = 0; $fila < $m1Filas; $fila++) {
            for($columna = 0; $columna < $m2Columnas; $columna++) {
                $resultado[$fila][$columna] = 0;
                for($celda = 0; $celda < $m1Columnas; $celda++) { 
                    $resultado[$fila][$columna] += $m1[$fila][$celda] * $m2[$celda][$columna];
                }
            }
        }
        return $resultado;
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css" /> 

    <title>DWES-PHP-B05-E04</title>
</head>
<body >
    <h1>Producto de matrices:</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="get">
<?php 
    $numeroFilas     = empty($_GET['numeroFilas'])    ? "": intval($_GET['numeroFilas']);
    $numeroColumnas1 = empty($_GET['numeroColumnas1']) ? "": intval($_GET['numeroColumnas1']);
    $numeroColumnas2 = empty($_GET['numeroColumnas2']) ? "": intval($_GET['numeroColumnas2']);
    $primeraVez      = empty($_GET['primeraVez'])     ? "": $_GET['primeraVez'];

     echo <<<MARCA
        <div id="entrada">
            <p>
                <label for="numeroFilas">Introduzca el número de filas de la matriz 1:</label>
                <input type="number" id="numeroFilas" name="numeroFilas" value="{$numeroFilas}"/>
            </p>
            <p>
                <label for="numeroColumnas">Introduzca el número de columnas de la matriz 1:</label>
                <input type="number" id="numeroColumnas1" name="numeroColumnas1"  value="{$numeroColumnas1}" />
            </p>    
            <p>
            <label for="numeroColumnas">Introduzca el número de columnas de la matriz 2:</label>
            <input type="number" id="numeroColumnas2" name="numeroColumnas2"  value="{$numeroColumnas2}" />
        </p>                    
            <button type="submit" >Enviar</button>
            <button type="reset" ><a href="{$_SERVER['PHP_SELF']}" style="text-decoration: none;">Borrar</a></button>

MARCA;
    if ( $numeroFilas === ""  || $numeroFilas < 1 || 
         $numeroColumnas1 < 1 || $numeroColumnas1 === "" ||
         $numeroColumnas2 < 1 || $numeroColumnas2 === "" ) {
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
        // Comprobamos si cambiaron los datos del formulario: si es así, reseteamos matrices:
        if ( isset($_GET['matriz1']) && 
            ($numeroFilas !== count($_GET['matriz1']) || 
             $numeroColumnas1 !== count($_GET['matriz1'][0])) ) {
            unset($_GET['matriz1']);
        }

        if ( isset($_GET['matriz2']) && 
             ($numeroColumnas1 !== count($_GET['matriz2']) || 
              $numeroColumnas2 !== count($_GET['matriz2'][0])) ) {
            unset($_GET['matriz2']);
        }

        echo "<h3>Matriz 1:</h3>";
        $matriz1 = imprimirMatriz($numeroFilas, $numeroColumnas1, 1);
        echo "<h3>Matriz 2:</h3>";
        $matriz2 = imprimirMatriz($numeroColumnas1, $numeroColumnas2, 2);

        if (isset($_GET['matriz1']) && isset($_GET['matriz2']) ) {
            $_GET['matriz3'] = productoMatricial($matriz1, $matriz2);
            echo "<h2>Producto matricial:</h2>";
            $matriz3 = imprimirMatriz($numeroColumnas1, $numeroColumnas2, 3);
        }
    }
?>  
    </form>
</body>
</html>