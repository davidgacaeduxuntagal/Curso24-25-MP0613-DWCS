<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWES-PHP-B03-E02</title>
</head>
<body >
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="get">
<?php 
    $entero = empty($_GET['entero']) ? "": floatval($_GET['entero']);
    $primeraVez   = empty($_GET['primeraVez'])   ? "": $_GET['primeraVez'];

     echo <<<MARCA
     <div class="entradas">
     <h1>Múltiplos de un número</h1>
     <p>
         <label for="entero">Introduzca el número tope hasta el que llegar:</label>
         <input type="number" id="entero" name="entero"  value="{$entero}"/>
     </p>
  
     <button id="botonEnviar" type="submit">Enviar</button>      
     <button type="reset" ><a href="{$_SERVER['PHP_SELF']}" style="text-decoration: none;">Borrar</a></button>
MARCA;
    if ( $entero === "" ||  is_int($entero))  {
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
                <p id="salida" style="color: red">Por favor, Introduzca un número entre 1 y 100</p>
            </div> 
SEGUNDAVEZ;
        }
    } else {
        echo <<<DATOSOK
        <input type="hidden" name="primeraVez" value="false"/>
   </div>   
DATOSOK;         
    echo "<pre style='font-family: monospace'>";
    $suma = 0;

    for($i = 7; $i <= $entero; $i += 7) {
        $suma +=  $i;
    }

    echo "La suma de todos los múltiplos de 7 de 1 hasta {$entero} es: {$suma}";
    echo "</pre>";
}
?>    
</body>
</html>