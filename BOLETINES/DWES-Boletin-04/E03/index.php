<?php
function resolverEcuacionSegundoGrado($a, $b, $c): array {
    $discriminante = ($b * $b) - (4 * $a * $c);

    if (  $discriminante < 0.0 ) {
        return ['ERROR', 'ERROR']; 
    } else {
        return [ (-$b + sqrt($discriminante))/(2*$a),(-$b - sqrt($discriminante))/(2*$a) ];
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWES-PHP-B04-E03</title>
</head>
<body >
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="get">
<?php 
    $coeficienteA = empty($_GET['coeficienteA']) ? "": floatval($_GET['coeficienteA']);
    $coeficienteB = empty($_GET['coeficienteB']) ? "": floatval($_GET['coeficienteB']);
    $coeficienteC = empty($_GET['coeficienteC']) ? "": floatval($_GET['coeficienteC']);
    $primeraVez   = empty($_GET['primeraVez'])   ? "": $_GET['primeraVez'];

     echo <<<MARCA
     <div class="entradas">
     <h1>Cálculo raíces de una ecuación de segundo grado</h1>
     <img src="formula.png" alt="Fórmula ecuación cuadrática" />
     <p>
         <label for="coeficienteA">Coeficiente a:</label>
         <input type="number" id="coeficienteA" name="coeficienteA"  value="{$coeficienteA}"/>
     </p>
     <p>
         <label for="coeficienteB">Coeficiente b:</label>
         <input type="number" id="coeficienteB" name="coeficienteB" value="{$coeficienteB}"/>
     </p>
     <p>
         <label for="coeficienteC">Coeficiente c:</label>
         <input type="number" id="coeficienteC" name="coeficienteC" value="{$coeficienteC}"/>
     </p>
     <button id="botonEnviar" type="submit">Enviar</button>      
     <button type="reset" ><a href="{$_SERVER['PHP_SELF']}" style="text-decoration: none;">Borrar</a></button>

MARCA;
    if ( $coeficienteA === "" || !(is_float($coeficienteA) || is_int($coeficienteA)) || 
         $coeficienteB === "" || !(is_float($coeficienteB) || is_int($coeficienteB)) || 
         $coeficienteC === "" || !(is_float($coeficienteC) || is_int($coeficienteC))    ) {
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
                <p id="salida" style="color: red">Por favor, introduzca los 3 coeficientes</p>
            </div> 
SEGUNDAVEZ;
        }
    } else {
        echo <<<DATOSOK
        <input type="hidden" name="primeraVez" value="false"/>
   </div>   
DATOSOK;         
    echo "<pre style='font-family: monospace'>";
    for ($i = 1; $i <= 10; $i++) {
        $coefA = (random_int(1,10) <= 5 ? -1: 1) * ( floor(random_int(1, 50) ));
        $coefB = (random_int(1,10) <= 5 ? -1: 1) * ( floor(random_int(1, 50) ));
        $coefC = (random_int(1,10) <= 5 ? -1: 1) * ( floor(random_int(1, 50) ));
        $solucion = resolverEcuacionSegundoGrado($coefA, $coefB, $coefC);
        echo "({$i})Solución ({$coefA},{$coefB},{$coefC}): raíz 1 = {$solucion[0]}  ; raíz 2 = {$solucion[1]} <br>";
    }
    echo "</pre>";
}
?>    
</body>
</html>