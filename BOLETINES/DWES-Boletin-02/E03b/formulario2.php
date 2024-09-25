<?php
   $numero = "";
   echo <<<SALIDA
   <div class="entrada">
       <p>
           <label for="numero" id="textoNumero" style="color: red">Introduzca un NÚMERO ENTERO MAYOR DE 1:</label>
           <input type="text" id="numero" name="numero" value="{$numero}"/>
       </p>

       <!--  Estado autómata -->
       <input type="hidden" name="estado" value="{$estado}"/>                    

       <!--  Botonera -->
       <button type="submit">Enviar</button>      
       <button type="reset" ><a href="{$_SERVER['PHP_SELF']}" style="text-decoration: none;">Borrar</a></button>
   </div>
SALIDA;            
?>