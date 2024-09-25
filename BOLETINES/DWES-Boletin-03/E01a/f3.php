<?php
     echo <<<MARCA
     <div class="entradas">
     <p>
         <label for="total">Introduzca el número de enteros a procesar:</label>
         <input type="number" id="total" name="total" value="{$total}" disabled />
     </p>
     <p>
         <label for="termino">Introduzca el número ({$contador}/{$total}): </label>
         <input type="number" id="termino" name="termino" />
     </p>            
        <!--  Estado autómata -->
        <input type="hidden" name="estado" value="{$estado}"/>
        <input type="hidden" name="contador" value="{$contador}"/>
        <input type="hidden" name="sumatorio" value="{$sumatorio}"/>
        <input type="hidden" name="total" value="{$total}"/>
 
        <!--  Botonera -->
        <button id="botonEnviar" type="submit">Enviar</button>      
        <button type="reset" ><a href="{$_SERVER['PHP_SELF']}" style="text-decoration: none;">Borrar</a></button>
     </div>  
MARCA;            

?>