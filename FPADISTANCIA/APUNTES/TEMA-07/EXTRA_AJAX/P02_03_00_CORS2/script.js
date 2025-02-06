let peticion;
const iniciar = () => {
    peticion = new XMLHttpRequest();
    peticion.open('GET', "https://opendata.aemet.es/opendata/api/valores/climatologicos/inventarioestaciones/todasestaciones/?api_key=eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJkYXZpZGdhY2FAaWVzcm9kZWlyYS5nYWwiLCJqdGkiOiIwZTFhMTE4Ni04MDEyLTQzOTEtOTc4Ni02ZjM0NzQ4MmJlNjUiLCJpc3MiOiJBRU1FVCIsImlhdCI6MTY4MzgxODUxMCwidXNlcklkIjoiMGUxYTExODYtODAxMi00MzkxLTk3ODYtNmYzNDc0ODJiZTY1Iiwicm9sZSI6IiJ9.pxgYIzqMLwDUzjismLbMuPy2lTTEU456UuBKTch31rc"); 
    peticion.send();

    peticion.addEventListener("load", iniciar2);
}

const iniciar2 = () => {
    const urlDatos = JSON.parse(peticion.responseText);

    peticion = new XMLHttpRequest();
    peticion.open('GET', urlDatos.datos); 
    peticion.send();

    peticion.addEventListener("load", cargada);
}


const cargada = () => {
    let resultados = '';

    console.log(peticion.responseText);
    let estaciones = JSON.parse(peticion.responseText);
    resultados += '<ul>';
    for (let i = 0; i < estaciones.length; i++) {
            resultados += `<li><b>Estación nº ${i + 1}</b><ul>`;
            resultados += `<li><b>latitud:</b> ${estaciones[i].latitud}</li>`;
            resultados += `<li><b>provincia:</b> ${estaciones[i].provincia}</li>`;
            resultados += `<li><b>altitud:</b> ${estaciones[i].altitud}</li>`;
            resultados += `<li><b>indicativo:</b> ${estaciones[i].indicativo}</li>`;
            resultados += `<li><b>nombre:</b> ${estaciones[i].nombre}</li>`;
            resultados += `<li><b>longitud:</b> ${estaciones[i].longitud}</li>`;
            resultados += `</li></ul>`;
    }
    resultados += '</ul>';

    document.getElementById("resultados").innerHTML = resultados;
}

window.addEventListener("load", iniciar, false);