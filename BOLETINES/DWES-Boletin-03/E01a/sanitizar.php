<?php
/* 
 *  Comprobar formato (no comprueba rangos) entero válido
 *  en entrada formulario
 *
*/
function formatoEnteroValido(string $cadena) {
    if ( preg_match("/^[+-]?\d+$/", $cadena) === 1 ) {
        return $cadena;
    } else {
        return "NOVALIDO";
    }
}

?>