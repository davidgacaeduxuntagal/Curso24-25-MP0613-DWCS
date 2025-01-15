<!DOCTYPE html>
<html lang="es">

<head>
    <?php require 'validar.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Login</title>
</head>

<body style="background:#00bfa5;">

    <div class="container mt-5">
        <div class="d-flex justify-content-center h-100">
            <div class="card" style='width:24rem;'>
                <div class="card-header">
                    <h3><i class="fa fa-cog mr-1"></i>Registro</h3>
                </div>
                <div class="card-body">
                    <form name='login' method='POST' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="usuario" id='usu' name='usu' value='<?php echo isset($_POST['usu']) ? $_POST['usu'] : '' ?>' required>
                            <span id='errUsu' for='usu' class='<?php echo (!isset($_POST['enviar']) || validarNombre($_POST['usu'])) ? "d-none" : "input-group form-group text-danger" ?>'>
                                Debe tener más de tres caracteres.
                            </span>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="contraseña" id='pass1' name='pass1' required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Repita la contraseña" id='pass2' name='pass2' required>
                        </div>
                        <span id='errPass' for='pass2' 
                            class='<?php echo (!isset($_POST['enviar']) || validarPasswords($_POST['pass1'], $_POST['pass2'])) ? "d-none" : "input-group form-group text-danger" ?>'>
                            Deben tener más de 5 caracteres o ser iguales.
                        </span>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            </div>
                            <input type="mail" class="form-control" placeholder="e-Mail" name='mail' id='mail' value='<?php echo isset($_POST['mail']) ? $_POST['mail'] : '' ?>' required>
                        </div>
                        <span id='errMail' for='mail' class='<?php echo (!isset($_POST['enviar']) || validarEmail($_POST['mail'])) ? "d-none" : "input-group form-group text-danger" ?>'>
                            La dirección de email NO es válida.
                        </span>
                        <div class="form-group">
                            <input type="submit" value="Registrar" class="btn float-right btn-info" name='enviar'>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</body>

</html>