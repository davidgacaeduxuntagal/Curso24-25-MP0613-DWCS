function getTiempo() {
    var la = document.getElementById('lat').value;
    var lo = document.getElementById('lon').value;

    jaxon_getTiempo(la, lo);
}

function getLocalizacion() {
    var la = document.getElementById('lat').value;
    var lo = document.getElementById('lon').value;
    
    jaxon_getLocalizacion(la, lo);
}