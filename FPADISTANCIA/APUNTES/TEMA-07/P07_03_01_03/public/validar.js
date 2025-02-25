function enviarFormulario() {
    // Se cambia el botón de Enviar y se deshabilita
    //  hasta que llegue la respuesta
    jaxon.$("enviar").disabled=true;
    jaxon.$("enviar").value="Un momento...";

    // Aquí se hace la llamada a la función registrada de PHP
    jaxon_validarFormulario (jaxon.getFormValues("miForm"));

    return false;
}
