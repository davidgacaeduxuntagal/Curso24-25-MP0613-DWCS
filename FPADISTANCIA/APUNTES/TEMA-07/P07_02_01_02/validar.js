//Capturamos el submit. Si no cumple validar no hacemos el submit
$("#registro").submit(function (event) {
    if (!validar()) event.preventDefault();
});

function validarNombre() {
    var usu = $("#usu");
    var errUsu = $("#errUsu");
    if (usu.val().length < 4) {
        errUsu.removeClass("d-none").addClass("input-group form-group text-danger");
        return false;
    }
    errUsu.last().addClass("d-none");
    return true;

}
function validarPass() {
    var pass1 = $("#pass1");
    var pass2 = $("#pass2");
    var errPass = $("#errPass");
    if (pass1.val().length < 6 || pass1.val() != pass2.val()) {
        errPass.removeClass("d-none").addClass("input-group form-group text-danger");
        return false;
    }
    errPass.last().addClass("d-none");
    return true;

}
function validarMail() {
    var mail = $("#mail")
    var errMail = $("#errMail");
    if (!mail.val().match("^[a-zA-Z0-9]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$")) {
        errMail.removeClass("d-none").addClass("input-group form-group text-danger");
        return false;
    }
    errMail.last().addClass("d-none");
    return true;
}
function validar() {
    return validarNombre() & validarMail() & validarPass();
}