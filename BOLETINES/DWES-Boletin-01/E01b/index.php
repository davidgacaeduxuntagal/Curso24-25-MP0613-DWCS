<?php
    /* 
        Otra forma de hacer lo mismo 

    */ 
    // DEBUG: Activar para depurar
    ob_end_flush();
    ob_implicit_flush();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWES-PHP-B01-01b</title>
</head>
<body style="font-family: monospace">

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="get">
<?php
    if( !empty($_GET['botonReset']) ) {
        unset($_GET['numero1']);
        unset($_GET['numero1']);
    }

    if (empty($_GET['numero1']) || empty($_GET['numero2']) ) { 
?>  
        <p>
            <label for="numero1">Introduzca el primer número:</label>
            <input type="number" id="numero1" name="numero1" />
        </p>
        <p>
            <label for="numero2">Introduzca el segundo número:</label>
            <input type="number" id="numero2" name="numero2" />
        </p>
        <p style="color: red">Rellene ambos campos, por favor</p>
        <p id="suma">&nbsp;</p>
        <p id="resta">&nbsp;</p>
        <p id="producto">&nbsp;</p>  
        <p id="resto">&nbsp;</p>    
<?php
    } else {
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
?>
        <p>
            <label for="numero1" >Introduzca el primer número:</label>
            <input type="number" id="numero1" name="numero1" value="<?=$numero1?>"/>
            </p>
        <p>
            <label for="numero2">Introduzca el segundo número:</label>
            <input type="number" id="numero2" name="numero2" value="<?=$numero1?>" />
        </p>

        <p>Dados los números: <?=$numero1?> y <?=$numero2?> </p>   
        <p id='suma'>La suma es: <?=($numero1 + $numero2)?></p>
        <p id='resta'>La resta es: <?=($numero1 - $numero2)?> </p>
        <p id='producto'>El producto es: <?=($numero1 * $numero2)?> </p>
        <p id='resto'>El resto es: <?=($numero1 % $numero2)?> </p>
<?php } ?>   
 
        <button id="botonEnviar" type="submit" name="botonEnviar" value="Enviar">Enviar</button>      
        <button id="botonReset" type="submit" name="botonReset" value="Reset">Reset</button> 
    </form>
</body>
</html>