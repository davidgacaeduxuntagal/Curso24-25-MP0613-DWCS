<?php
    session_start();
    ob_end_flush();   // Ojo: esto solo lo invoko para esta explicación: para ir viendo paso a paso lo que pasa
    ob_implicit_flush(true);

    if (isset($_POST['enviar'])) {
        if (isset($_SESSION['idioma'])) {
            session_unset();
            $mensaje = "Preferencias Borradas.";
        } else
            $mensaje = "Debes fijar primero las preferencias.";
    }

    $idiomas = ['Español', 'Inglés'];
    $perfil  = ['Si', 'No'];
    $zonas   = ['GMT-2', 'GMT-1', 'GMT', 'GMT+1', 'GMT+2'];
    $midioma = isset($_SESSION['idioma']) ? $idiomas[$_SESSION['idioma']] : "No establecido";
    $mperfil = isset($_SESSION['perfil']) ? $perfil[$_SESSION['perfil']] : "No establecido";
    $mzona   = isset($_SESSION['zona']) ? $zonas[$_SESSION['zona']] : "No establecido";
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <!-- css para usar Bootstrap -->
    <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
        crossorigin="anonymous">
    <!-- css Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <title>Tema 4</title>
</head>

<body style="background: gray">
    <div class="container mt-4">
        <div class="card text-white bg-success mb-3 m-auto" style="width:35rem">
            <div class="card-body">
                <h3 class="card-title"><i class="fas fa-user-cog mr-2"></i>Preferencias</h3>
<?php
                if (isset($mensaje))
                    echo "<p class='card-text text-danger font-weight-bold' style='font-size: 1.1em'>$mensaje</p>";
                    unset($mensaje);
                ?>
                <p class="card-text" style="font-size: 1.1em">
                    <span class="font-weight-bold">Idioma: </span><?php echo $midioma ?>
                </p>
                <p class="card-text" style="font-size: 1.1em">
                    <span class="font-weight-bold">Perfil Público: </span><?php  echo $mperfil ?>
                </p>
                <p class="card-text" style="font-size: 1.1em">
                    <span class="font-weight-bold">Zona Horaria: </span> <?php echo $mzona ?></p>
                
                <form name="b" class="form-inline" action='<?php echo $_SERVER['PHP_SELF']; ?>' method='POST'>
                    <a href="preferencias.php" class="btn btn-primary mr-2" style="font-size: 1.1em">Establecer</a>
                    <input type="submit" class="btn btn-danger" value="Borrar" name="enviar" style="font-size: 1.1em">
                </form>
            </div>
        </div>
    </div>
</body>
</html>