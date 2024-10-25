<?php
echo <<<MARCA
    <!--  Estado autómata -->
    <input type="hidden" name="estado" value="{$estado}"/>
    <p>
        <label for="numero1">Introduzca el primer número:</label>
        <input type="number" id="numero1" name="numero1" />
    </p>
    <p>
        <label for="numero2">Introduzca el segundo número:</label>
        <input type="number" id="numero2" name="numero2" />
    </p>
    <p></p>
    <p id="suma">&nbsp;</p>
    <p id="resta">&nbsp;</p>
    <p id="producto">&nbsp;</p>  
    <p id="resto">&nbsp;</p>    
MARCA;
?>