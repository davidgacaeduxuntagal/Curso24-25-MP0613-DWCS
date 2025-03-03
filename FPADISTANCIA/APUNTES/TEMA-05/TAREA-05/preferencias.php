<?php
    session_start();

    ob_end_flush(); // Ojo: esto solo lo invoko para esta explicación: para ir viendo paso a paso lo que pasa
    ob_implicit_flush(true);

    // Establecemos los arrays siguientes lo que nos permitirá ahorrar código.
    $idiomas = ['Español', 'Inglés', 'Ruso', 'Galego'];
    $perfil  = ['Si', 'No'];
    $zonas   = ['GMT-2', 'GMT-1', 'GMT', 'GMT+1', 'GMT+2'];
?>
<!DOCTYPE html>
<html lang="es">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
        crossorigin="anonymous">
    <!--Fontawesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <title>Tarea Unidad 5 </title>
</head>

<body style="background:silver;">
<?php
    // Si hemos enviado las preferencias la guardamos en sesiones.
    if (isset($_POST['enviar'])) {
        $_SESSION['idioma']  = $_POST['idioma'];
        $_SESSION['perfil']  = $_POST['perfil'];
        $_SESSION['zona']    = $_POST['zona'];
        $_SESSION['mensaje'] = "Preferencias de usuario guardadas.";
    }
?>
    <div class="container mt-5">
        <div class="d-flex justify-content-center h-100">
            <div class="card" style="width: 30rem">
                <div class="card-header">
                    <h3>Preferencias Usuario </h3>
                </div>
                <div class="card-body">
<?php
                    if (isset($_SESSION['mensaje'])) {
                        echo "<p class='card-text textprimary'>{$_SESSION['mensaje']}</p>";
                        unset($_SESSION['mensaje']);
                    }
?>
                    <form name='preferencias' method='POST' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
                        <label class="" for="id">Idioma </label>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas falanguage"> </i> </span>
                            </div>
                            <select class="form-control" name='idioma' id="id">
<?php
                        foreach ($idiomas as $k => $v) {
                            if (isset($_SESSION['idioma']) && $_SESSION['idioma'] == $k)
                                echo "<option value='$k' selected>$v</option>";
                            else
                                echo "<option value='$k'>$v</option>";
                        }
?>
                            </select>
                        </div>

                        <label class="" for="pe">Perfil Público </label>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fausers"> </i> </span>
                            </div>
                            <select class="form-control" name='perfil' id="pe">
<?php
                            foreach ($perfil as $k => $v) {
                                if (isset($_SESSION['perfil']) &&  $_SESSION['perfil'] == $k)
                                    echo "<option value='$k' selected>$v</option>";
                                else
                                    echo "<option value='$k'>$v</option>";
                                }
?>
                            </select>
                        </div>


                        <label class="" for="zh">Zona Horaria </label>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far faclock"> </i> </span>
                            </div>
                            <select class="form-control" name='zona' id="zh">
<?php
                            foreach ($zonas as $k => $v) {
                                if (isset($_SESSION['zona']) && $_SESSION['zona'] == $k)
                                    echo "<option value='$k' selected>$v</option>";
                                else
                                    echo "<option value='$k'>$v</option>";
                            }
?>
                            </select>
                        </div>
                        
                        
                        <div class="form-group">
                            <a href="mostrar.php" class="btn btn-primary">Mostrar Preferencias </a>
                            <input type="submit" value="Establecer Preferencias"  class="btn float-right btn-success" name='enviar'>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php
    if (isset($_SESSION['error'])) {
        echo "<div class='mt-3 text-danger font-weight-bold text-lg'>";
        echo $_SESSION['error'];
        unset($_SESSION['error']);
        echo "</div>";
    }
 ?>
    </div>
</body>
</html>