<?php
echo <<<MARCA
         <div class="entradas">
            <p>
                <label for="idtotal">Introduzca el número de enteros a procesar:</label>
                <input type="number" id="idtotal" name="total" />
            </p>

            <!--  Estado autómata -->
            <input type="hidden" name="estado" value="{$estado}"/>
            <input type="hidden" name="contador" value="{$contador}"/>
            <input type="hidden" name="sumatorio" value="{$sumatorio}"/>
        
            <!--  Botonera -->
            <button type="submit">Enviar</button>      
            <button type="reset" ><a href="{$_SERVER['PHP_SELF']}" style="text-decoration: none;">Borrar</a></button>
         </div>    
MARCA;

?>