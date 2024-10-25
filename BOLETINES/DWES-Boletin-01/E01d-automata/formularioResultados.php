<?php
        echo <<<MARCA
        <!--  Estado autómata -->
        <input type="hidden" name="estado" value="{$estado}"/>
        <p>
            <label for="numero1" >Introduzca el primer número:</label>
            <input type="number" id="numero1" name="numero1" value="{$numero1}"/>
            </p>
        <p>
            <label for="numero2">Introduzca el segundo número:</label>
            <input type="number" id="numero2" name="numero2" value="{$numero2}" />
        </p>

        <p>Dados los números: {$numero1} y {$numero2} </p>   
        <p id='suma'>La suma es: {$suma}</p>
        <p id='resta'>La resta es: {$resta} </p>
        <p id='producto'>El producto es: {$producto} </p>
        <p id='resto'>El resto es: {$resto} </p>
MARCA;
?>