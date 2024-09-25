<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWES-PHP-B02-03a</title>
</head>
<body style="font-family: monospace">

<form action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="get">
<?php
    $estado = (!isset($_GET['estado'])) ? 0 : intval($_GET['estado']);
    $numero = (!isset($_GET['numero'])  || preg_match("/^\d+$/", $_GET['numero']) !== 1) ? "INVALIDO" : intval($_GET['numero']);


    switch($estado) {
        case 0:
            $estado = 1;

            echo <<<SALIDA
            <div class="entrada">
                <p>
                    <label for="numero" id="textoNumero">Introduzca un número entero mayor de 1:</label>
                    <input type="text" id="numero" name="numero" />
                </p>

                <!--  Estado autómata -->
                <input type="hidden" name="estado" value="{$estado}"/>

                <!--  Botonera -->
                <button type="submit">Enviar</button>      
                <button type="reset" ><a href="{$_SERVER['PHP_SELF']}" style="text-decoration: none;">Borrar</a></button>
            </div>
SALIDA;
            break;

        case 1: 
            $estado = 1;
            if ( $numero === "INVALIDO" || $numero < 2 ) {
                echo <<<SALIDA
                <div class="entrada">
                    <p>
                        <label for="numero" id="textoNumero" style="color: red">Introduzca un NÚMERO ENTERO MAYOR DE 1:</label>
                        <input type="text" id="numero" name="numero" value="{$numero}" disabled/>
                    </p>

                    <!--  Estado autómata -->
                    <input type="hidden" name="estado" value="{$estado}"/>                    

                    <!--  Botonera -->
                    <button type="submit">Enviar</button>      
                    <button type="reset" ><a href="{$_SERVER['PHP_SELF']}" style="text-decoration: none;">Borrar</a></button>
                </div>
    SALIDA;                
            } else {
                echo <<<SALIDA
                <div class="entrada">
                    <p>
                        <label for="numero" id="textoNumero" >Introduzca un número entero mayor de 1:</label>                    
                        <input type="text" id="numero" name="numero" value="{$numero}" disabled/>
                    </p>

                    <!--  Estado autómata -->
                    <input type="hidden" name="estado" value="{$estado}"/>
                    <input type="hidden" name="numero" value="{$numero}"/>

                    <!--  Botonera -->
                    <button type="submit">Enviar</button>      
                    <button type="reset" ><a href="{$_SERVER['PHP_SELF']}" style="text-decoration: none;">Borrar</a></button>
                </div>
    SALIDA;  
                echo "<div class=\"salida\">";
                $mensaje = "<p>El número es primo</p>";
                // El siguiente bucle se puede optimizar,  si utilizamos la propiedad matemática:
                //   N es primo si N no es divisible por cualquier entero (primo) <= raíz 
                //   cuadrada de N
                //   (es decir, en vez de $numero - 1, podríamos poner floor(sqrt(numero))                
                for($i = 2; $i < $numero -1; $i++) {
                    if ( $numero % $i === 0 ) {
                        $mensaje =  "<p>El número NO es primo</p>";
                        break;
                    }
                }

                echo $mensaje;
                echo "</div>";

            }

            break;

        default: throw new Exception("Estado no válido: " . $estado);
    }
      
?>
</form>
</body>
</html>