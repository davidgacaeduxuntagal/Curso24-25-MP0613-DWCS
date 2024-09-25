<?php

 echo <<<SALIDA
 <div class="entrada">
     <p>
         <label for="numero" id="textoNumero" >Introduzca un número entero mayor de 1:</label>                    
         <input type="text" id="numero" name="numero" value="{$numero}" disabled/>
     </p>

     <!--  Estado autómata -->
     <input type="hidden" name="estado" value="{$estado}"/>
     <input type="hidden" name="numero" value="{$numero}"/>

     <!--  Botonera -->
     <button type="submit">Enviar</button>      
     <button type="reset" ><a href="{$_SERVER['PHP_SELF']}" style="text-decoration: none;">Borrar</a></button>
 </div>
SALIDA;  

echo "<div class=\"salida\">";
$mensaje = "<p>El número es primo</p>";
// El siguiente bucle se puede optimizar,  si utilizamos la propiedad matemática:
//   N es primo si N no es divisible por cualquier entero (primo) <= raíz 
//   cuadrada de N
//   (es decir, en vez de $numero - 1, podríamos poner <= floor(sqrt(numero))                
for($i = 2; $i < $numero -1; $i++) {
    if ( $numero % $i === 0 ) {
        $mensaje =  "<p>El número NO es primo</p>";
        break;
    }
}

echo $mensaje;
echo "</div>";
?>