<?php
   $contador = isset($_GET['contador'])? $_GET['contador'] : 0;
   $contador++;
   // retrasamos 2 segundos la ejecución de esta página PHP.
   sleep(2);
   
   // Mostramos la fecha y hora del servidor web.
   echo "<p>La fecha y hora del Servidor Web: ";
   echo date("j/n/Y G:i:s."); 
   echo "</p>";
   echo "<hidden id='contador' value='$contador'/>";
   echo "<p>Contador: $contador</p>";   
?>