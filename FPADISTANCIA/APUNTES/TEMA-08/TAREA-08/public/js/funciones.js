function validarFecha() {
    let fecha = document.getElementById('title').value;

    if (fecha.length == 0) {
        alert("Elija una fecha.");
        return false
    }

    let miFecha = new Date(fecha);
    let hoy     = new Date();

    hoy.setHours(0, 0, 0, 0);
    miFecha.setHours(0, 0, 0, 0);

    if (miFecha < hoy) {
        alert("La fecha no puede se inferior a la actual");
        return false;
    }

    return true;
}

function getCoordenadas() {
    let dir = document.getElementById('dir').value;

    jaxon_getCoordenadas(dir);
    return true;
}


function ordenarEnvios(id) {
    var puntos = $("#t_" + id + " input:hidden").map(function () {
        return this.value;
    }).get().join("|");

    jaxon_ordenarEnvios(puntos, id);
}

function obtuvimosDatos(datosRespuesta) {
    if (datosRespuesta['respuesta'] == "404" ) {
        alert("Servicio para ordenar Rutas de Bing Maps no disponible temporalmente");
        return datosRespuesta['respuesta'];
    }

    // Si obtuvimos una respuesta, reordenamos los envíos del reparto
    // Cogemos la URL base del documento, quitando los parámetros GET si los hay
    var url = "http://127.0.0.1/dwes_tema_08/TAREA_08/public/repartos.php";

    // Añadimos el código de la lista de reparto
    url += '?action=oEnvios&idLt=' + datosRespuesta['id'];

    // Y un array con las nuevas posiciones que deben ocupar los envíos
    for (var r in respuesta) url += '&pos[]=' + respuesta[r];

    window.location = url;
}


function semaforo() {
    var latitud = document.getElementById('lat').value
    var pro     = document.getElementById("pro").value

    if (latitud.length == 0 || pro == -1) {
        //alert("Elija un producto.");
        return false;
    }

    return true;
}
