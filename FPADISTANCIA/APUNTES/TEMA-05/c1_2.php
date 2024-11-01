<!-- codigo ejemplo T04-01-02 -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS BootStrap -->
    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifj
    h" crossorigin="anonymous">
    <title>Ejemplo Tema 4</title>
</head>

<body style='background:gray'>
    <h3 class='text-center mt-3'>Directivas PHP_AUTH</h3>
    <div class='container mt-3'>
        <div class="card text-white bg-primary mb-3 m-auto" style="max-width:22rem;">
            <div class="card-header font-weight-bold text-center">PHP_AUTH</div>
            <div class="card-body" style='font-size:1.2em'>
                <p class="card-text"><span class='font-weight-bold'>Usuario:</span>"<?php echo $_SERVER['PHP_AUTH_USER'] ?>"</p>
                <p class="card-text"><span class='font-weightbold'>Contraseña:</span>"<?php echo $_SERVER['PHP_AUTH_PW'] ?>"</p>
                <p class="card-text"><span class='font-weight-bold'>Método Autentificación:</span>"<?php echo $_SERVER['AUTH_TYPE'] ?>"</p>
            </div>
        </div>
    </div>
</body>
</html>