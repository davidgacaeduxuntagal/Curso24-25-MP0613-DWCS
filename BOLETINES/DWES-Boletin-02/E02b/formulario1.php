<?php
echo <<<SALIDA
<div class="entrada">
    <p>
        <label for="cuenta">Introduzca el número de cuenta del cliente:</label>
        <input type="text" id="cuenta" name="cuenta" />
    </p>
    <p>
        <label for="cantidad">Introduzca la cantidad de la hipoteca:</label>
        <input type="text" id="cantidad" name="cantidad" />
    </p>
    <p>
        <label for="duracion">Introduzca la duración de la amortización (en años):</label>
        <input type="text" id="duracion" name="duracion" />
    </p>
    <p>
        <label for="interes">Introduzca la tasa de interés (formato: 0,05 = 5%):</label>
        <input type="text" id="interes" name="interes" />
    </p>                        

    <!--  Estado autómata -->
    <input type="hidden" name="estado" value="{$estado}"/>
    
    <!--  Botonera -->
    <button type="submit">Enviar</button>      
    <button type="reset" ><a href="{$_SERVER['PHP_SELF']}" style="text-decoration: none;">Borrar</a></button>
</div>
SALIDA;

?>