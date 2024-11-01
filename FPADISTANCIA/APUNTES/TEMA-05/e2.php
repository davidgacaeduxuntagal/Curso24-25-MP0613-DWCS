<?php
// Si el usuario no se ha autentificado, pedimos las credenciales
if ( !isset($_SERVER['PHP_AUTH_USER']) ) {
    header("WWW-Authenticate: Basic realm='Contenido restringido'");
    header("HTTP/1.0 401 Unauthorized");
    die();
}

//Conexión a la base de datos proyecto.
$host = "localhost";
$db   = "proyecto";
$user = "gestor";
$pass = "secreto";
$dsn  = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
    $conProyecto = new PDO($dsn, $user, $pass);
    $conProyecto->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
    die("Error en la conexión: mensaje: " . $ex->getMessage());
} // Hacemos la consulta

$consulta = "select * from usuarios where usuario=:u and pass=:p";
$stmt = $conProyecto->prepare($consulta);
$password = hash('sha256', $_SERVER['PHP_AUTH_PW']);

try {
    $stmt->execute([
        ':u' => $_SERVER['PHP_AUTH_USER'],
        ':p' => $password
    ]);
} catch (PDOException $ex) {
    $conProyecto = null;
    die("Error al recuperar las datos de Mysql: " . $ex->getMessage());
}

// Si la Consulta No devuelve ninguna fila las credenciales son erroneas.
if ($stmt->rowCount() == 0) {
    header("WWW-Authenticate: Basic realm='Contenido restringido'");
    header("HTTP/1.0 401 Unauthorized");
    $stmt = null;
    $conProyecto = null;
    die();
}

$stmt = null;
$conProyecto = null;

//Para poner el formato fecha en castellano y recuperar fecha y hora de acceso
setlocale(LC_ALL, 'es_ES.UTF-8');
date_default_timezone_set ('Europe/Madrid');
$ahora = new DateTime();
$fecha = strftime("Tu última visita fué el %A, %d de %B de %Y a las %H:%M:%S", date_timestamp_get($ahora) );

// si existe la cookie recupero su valor
if ( isset($_COOKIE[$_SERVER['PHP_AUTH_USER']]) ) {
    $mensaje = $_COOKIE[$_SERVER['PHP_AUTH_USER']];
} //si no existe es la primera visita para este usuario
else {
    $mensaje = "Es la primera vez que visitas la página.";
}

//Creo o actualizo la cookie con la nueva fecha de acceso, la cookie durara una semana
setcookie($_SERVER['PHP_AUTH_USER'], "$fecha", time() + 7 * 24 * 60 * 60);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN de Bootstrap -->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
          crossorigin="anonymous">
    <title>Cookies</title>
</head>

<body style="background:gainsboro">
    <p class="float-left m-3"></p> <?php echo $mensaje; ?></p>
    <br><br>
    <h4 class="mt-3 text-center font-weight-bold">Ejercicio Apartado 2 Unidad 4</h4>
    <div class='container mt-3'>
        <div class='row'>
            <div class='col-md-4 font-weight-bold'>Nombre Usuario: </div>
            <div class='col-md-4'><?php echo $_SERVER['PHP_AUTH_USER']; ?></div>
        </div>
        <div class='row'>
            <div class='col-md-4 font-weight-bold'> Password Usuario (sha256): </div>
            <div class='col-md-4'><?php echo hash('sha256', $_SERVER['PHP_AUTH_PW']); ?></div>
        </div>
    </div>
</body>
</html>