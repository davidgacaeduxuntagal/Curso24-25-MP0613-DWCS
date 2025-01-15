<?php
//1.- Incluimos las librerias Jaxon
require(__DIR__ . '/vendor/autoload.php');

use Jaxon\Jaxon;
use function Jaxon\jaxon;
use Jaxon\Response\Response;


//2.- Creamos las funciones de validación que serán lammadas desde JS
function validarNombre($nombre){
    if (strlen($nombre) < 4) return false;
    return true;
}

function validarEmail($email){
    return preg_match("/^[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i", $email);
}

function validarPasswords($pass1, $pass2){
    return ($pass1 == $pass2 && strlen($pass1) > 5);
}

function validarFormulario($valores){
    $respuesta = jaxon()->newResponse();
    $error = false;

    if (!validarNombre($valores['usu'])) {
        $respuesta->assign("errUsu", "innerHTML", "El nombre debe tener más de 3 caracteres.");
        $error = true;
    } else $respuesta->clear("errUsu", "innerHTML");

    if (!validarPasswords($valores['pass1'], $valores['pass2'])) {
        $respuesta->assign("errPass", "innerHTML", "La contraseña debe ser mayor de 5 caracteres o no coinciden.");
        $error = true;
    } else $respuesta->clear("errPass", "innerHTML");

    if (!validarEmail($valores['mail'])) {
        $respuesta->assign("errMail", "innerHTML", "La dirección de email no es válida.");
        $error = true;
    } else $respuesta->clear("errMail", "innerHTML");

    if (!$error) $respuesta->alert("Todo correcto.");

    $respuesta->assign("enviar", "value", "Enviar");
    $respuesta->assign("enviar", "disabled", false);

    return $respuesta;
}

//3.- Creamos el objeto jaxon
$jaxon = jaxon();

// Podemos incluir las opciones que queramos
$jaxon->setOption('js.app.minify', false);
$jaxon->setOption('core.decode_utf8', true);
$jaxon->setOption('core.debug.on', false);
$jaxon->setOption('core.debug.verbose', false);


// 4.- Registramos la función que vamos a llamar desde JavaScript
$jaxon->register(Jaxon::CALLABLE_FUNCTION, 'validarFormulario', ['mode' => "'asynchronous'"]);


// 5.- El método processRequest procesa las peticiones que llegan a la página
// Debe ser llamado antes del código HTML
if($jaxon->canProcessRequest())  $jaxon->processRequest();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Formulario Jaxon</title>
  
    <script type="text/javascript" src="validar.js"></script>
</head>
<body style="background:#00bfa5;">

<div class="container mt-5">
    <div class="d-flex justify-content-center h-100">
        <div class="card" style='width:24rem;'>
            <div class="card-header">
                <h3><i class="fa fa-cog mr-1"></i>Registro</h3>
            </div>
            <div class="card-body">
                <form name='miForm' id="miForm" method='POST' action="javascript:void(null);" onsubmit="enviarFormulario();">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="usuario" id='usu' name='usu'>
                        <span id='errUsu' for='usu' class="input-group form-group text-danger"></span>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="contraseña" id='pass1' name='pass1'
                               required>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="repita la contraseña" id='pass2'
                               name='pass2' required>
                    </div>
                    <span id='errPass' for='pass2' class='input-group form-group text-danger'></span>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="e-Mail" name='mail' id='mail'>
                    </div>
                    <span id='errMail' for='mail' class='input-group form-group text-danger'></span>
                    <div class="form-group">
                        <input type="submit" value="Registrar" class="btn float-right btn-info" name='enviar'
                               id="enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
<?php
// 6.- Injectamos los scripts javascript antes de enviar la página:
$jaxon = jaxon();
echo $jaxon->getCss(), "\n", $jaxon->getJs(), "\n", $jaxon->getScript(), "\n";
echo "<!-- HTTP comment  -->\n"
?>
</html>
