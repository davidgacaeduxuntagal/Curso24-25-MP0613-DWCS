// [JAXON-PHP]
function envForm() {
    let usu = document.getElementById("usu").value;
    let pass = document.getElementById('pass').value;

    // llamamos por AJAX al php:
    jaxon_vUsuario(usu, pass);
    
    // anulamos la acción por defecto del formulario:
    return false;
}

function validado() {
    window.open("listado.php", "_self");
}

function noValidado() {
    alert("¡¡Usuario o contraseña no válidos!!!");
}