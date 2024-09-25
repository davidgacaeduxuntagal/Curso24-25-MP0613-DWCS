<?php
$chequear = ["cuenta", "cantidad", "duracion", "interes"];
$aviso = '';

foreach($chequear as $variable) {
    if ( $$variable === "INVALIDO" ) {
        $aviso = "<p style='color: red;'>Por favor, revise los campos en rojo, pues tiene/n valor incorrecto:<p>";
        $$variable = "";
        $variable = "estilo".$variable;
        $$variable = "style='color: red;'";
    } else {
        $variable = "estilo".$variable;
        $$variable = "style='color: green;'";        
    }
}

echo <<<SALIDA
<div class="entrada">
    {$aviso}
    <p>
        <label for="cuenta" {$estilocuenta}>Introduzca el número de cuenta del cliente:</label>
        <input type="text" id="cuenta" name="cuenta" value="{$cuenta}"/>
    </p>
    <p>
        <label for="cantidad" {$estilocantidad}>Introduzca la cantidad de la hipoteca:</label>
        <input type="text" id="cantidad" name="cantidad"  value="{$cantidad}" />
    </p>
    <p>
        <label for="duracion"  {$estiloduracion}>Introduzca la duración de la amortización (en años):</label>
        <input type="text" id="duracion" name="duracion"  value="{$duracion}"/>
    </p>
    <p>
        <label for="interes"  {$estilointeres}>Introduzca la tasa de interés (formato: 0,05 = 5%):</label>
        <input type="text" id="interes" name="interes"  value="{$interes}"/>
    </p>  
      
    <!--  Estado autómata -->
    <input type="hidden" name="estado" value="{$estado}"/>
    
    <!--  Botonera -->
    <button type="submit">Enviar</button>      
    <button type="reset" ><a href="{$_SERVER['PHP_SELF']}" style="text-decoration: none;">Borrar</a></button>
</div>
SALIDA;

?>