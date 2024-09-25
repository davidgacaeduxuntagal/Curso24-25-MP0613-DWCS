<?php
           echo <<<SALIDA
           <div class="entrada">
               <p>
                   <label for="numero" id="textoNumero" style="color: red">Introduzca un NÚMERO ENTERO NO NEGATIVO ({$contador}/10):</label>
                   <input type="text" id="numero" name="numero" />
               </p>

               <!--  Estado autómata -->
               <input type="hidden" name="estado" value="{$estado}"/>
               <input type="hidden" name="contador" value="{$contador}"/>
               <input type="hidden" name="mayor" value="{$mayor}"/>


               <!--  Botonera -->
               <button type="submit">Enviar</button>      
               <button type="reset" ><a href="{$_SERVER['PHP_SELF']}" style="text-decoration: none;">Borrar</a></button>
           </div>
SALIDA;
    
?>