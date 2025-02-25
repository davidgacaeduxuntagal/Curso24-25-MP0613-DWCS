// [JAXON-PHP]
function envVoto(usu, pro) {
    id = "spuntos_" + pro;
    var puntos = document.getElementById(id).value;
    
    jaxon_miVoto(usu, pro, puntos);
}

function votoValido(datos) {
    jaxon_pintarEstrellas(datos['media'], datos['pro']);
}