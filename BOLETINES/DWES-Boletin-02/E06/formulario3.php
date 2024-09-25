<?php
            echo <<<SALIDA
            <div class="entrada">
                <p>
                    <label for="numero" id="textoNumero">Introduzca un número entero no negativo ({$contador}/10):</label>
                    <input type="text" id="numero" name="numero" value="{$numero}" disabled />
                </p>
 
                <!--  Estado autómata -->
                <input type="hidden" name="estado" value="{$estado}"/>
                <input type="hidden" name="contador" value="{$contador}"/>
                <input type="hidden" name="mayor1" value="{$mayor1}"/>
                <input type="hidden" name="mayor2" value="{$mayor2}"/>
                <input type="hidden" name="numero" value="{$numero}"/>

                <br>
                <p>Los número mayores son:  {$mayor1} y {$mayor2}</p>
 
                <!--  Botonera -->
                <button type="submit">Enviar</button>      
                <button type="reset" ><a href="{$_SERVER['PHP_SELF']}" style="text-decoration: none;">Borrar</a></button>
            </div>
            
SALIDA;

?>