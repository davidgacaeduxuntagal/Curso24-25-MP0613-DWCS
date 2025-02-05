<?php
function validarNombre($nombre){
    return !(strlen($nombre)<4);
    
}

function validarEmail($email){
    return preg_match("/^[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i", $email);
}

function validarPasswords($pass1, $pass2) {
    return ($pass1 == $pass2) && (strlen($pass1) > 5);
}
