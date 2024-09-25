<?php

echo <<<SALIDA
<div class="entrada">
    <p>
        <label for="cuenta">Introduzca el número de cuenta del cliente:</label>
        <input type="text" id="cuenta" name="cuenta" value="{$cuenta}" disabled />
    </p>
    <p>
        <label for="cantidad">Introduzca la cantidad de la hipoteca:</label>
        <input type="text" id="cantidad" name="cantidad"  value="{$cantidad}" disabled/>
    </p>
    <p>
        <label for="duracion">Introduzca la duración de la amortización (en años):</label>
        <input type="text" id="duracion" name="duracion"  value="{$duracion}" disabled/>
    </p>
    <p>
        <label for="interes">Introduzca la tasa de interés (formato: 0,05 = 5%):</label>
        <input type="text" id="interes" name="interes"  value="{$interes}" disabled/>
    </p>    
    <p>Los intereses totales son: {$interesesTotales}€</p>      
    <p>La cuota mensual asciende a:{$cuotaMensual}€</p>                           

    <!--  Estado autómata -->
    <input type="hidden" name="estado" value="{$estado}"/>
    <input type="hidden" name="cuenta" value="{$cuenta}"/>
    <input type="hidden" name="cantidad" value="{$cantidad}"/>
    <input type="hidden" name="duracion" value="{$duracion}"/>    
    <input type="hidden" name="interes" value="{$interes}"/>   

    <!--  Botonera -->
    <button type="submit">Enviar</button>      
    <button type="reset" ><a href="{$_SERVER['PHP_SELF']}" style="text-decoration: none;">Borrar</a></button>
</div>
SALIDA;

?>