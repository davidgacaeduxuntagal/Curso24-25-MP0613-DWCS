<?php
   $numero = "";
   echo <<<SALIDA
   <div class="entrada">
       <p>
           <label for="numero" id="textoNumero" style="color: red">Introduzca un número BINARIO (1s y 0s) de 5 dígitos máximo:</label>
           <input type="text" id="numero" name="numero" />
       </p>

       <!--  Estado autómata -->
       <input type="hidden" name="estado" value="{$estado}"/>       
                    
       <!--  Botonera -->
       <button type="submit">Enviar</button>      
       <button type="reset" ><a href="{$_SERVER['PHP_SELF']}" style="text-decoration: none;">Borrar</a></button>
   </div>
SALIDA;            
?>