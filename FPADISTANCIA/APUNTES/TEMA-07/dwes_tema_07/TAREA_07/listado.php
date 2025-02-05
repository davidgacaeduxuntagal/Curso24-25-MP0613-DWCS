<?php
// [JAXON-PHP]

session_start();

if (!isset($_SESSION['usu'])) {
    header('Location:login.php');
    die();
}

$usu = $_SESSION['usu'];
spl_autoload_register(function ($clase) {
    include "./include/" . $clase . ".php";
});


$productos = new Producto();
$todos     = $productos->listadoProductos();
$productos = null;

function pintarEstrellasPagina($p)  {
    $votos     = new Voto();
    $c         = $votos->getMedia($p);
    $en        = intval($c);
    $dec       = $c - $en;
    $estrellas = "{$votos->getTotalVotos($p)} Valoraciones. ";

    if ($en > 0) {
        for ($i = 1; $i <= $en; $i++) {
            $estrellas .= "<i class='fas fa-star'></i>";
        }

        if ($dec >= 0.5)
            $estrellas .= "<i class='fas fa-star-half-alt'></i>";
    } else {
        $estrellas = "Sin valorar";
    }

    $votos = null;
    return $estrellas;
}

// Preparamos Jaxon:
require (__DIR__ . '/include/Votar.php');

use function Jaxon\jaxon;

// Procesar la solicitud
if($jaxon->canProcessRequest())  $jaxon->processRequest();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Productos</title>
    <script type="text/javascript" src="votar.js"></script>
</head>

<body style="background:#00bfa5;">
    <div class="float float-right d-inline-flex mt-2">
        <i class="fas fa-user mr-3 fa-2x"></i>
        <input type="text" size='10px' value="<?php echo $usu; ?>" class="form-control
    mr-2 bg-transparent text-white font-weight-bold" disabled>
        <a href="cerrar.php" class="btn btn-warning mr-2">Salir</a>
    </div>
    <br>
    <h4 class="container text-center mt-4 font-weight-bold">Productos onLine</h4>
    <div class="container mt-3">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col" class='text-center'>Código</th>
                    <th scope="col" class='text-center'>Nombre</th>
                    <th scope="col" class='text-center'>Valoración</th>
                    <th scpope="col" colspan="2" class='text-center'>Valorar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($item = $todos->fetch(PDO::FETCH_OBJ)) {
                    echo "<tr class='text-center'>\n";
                    echo "<th scope='row'>{$item->id}</th>\n";
                    echo "<td>{$item->nombre}</td>\n";
                    echo "<td><div id='votos_{$item->id}' class='float-left'>";
                    echo pintarEstrellasPagina($item->id);
                    echo "</div> </td>\n";
                    echo "<td><select name='puntos' class='form-control' id='spuntos_{$item->id}'>";
                    for ($i = 1; $i <= 5; $i++) {
                        echo "<option>$i</option>\n";
                    }
                    echo "</select>\n";
                    echo "</td><td>";
                    echo "<button class='btn btn-info' onclick=\"envVoto('{$usu}','{$item->id}')\">Votar</button>";
                    echo "</td>\n";
                    echo "</tr>\n";
                }
                ?>
            </tbody>
        </table>
</body>
<?php
$jaxon = jaxon();
echo $jaxon->getCss(), "\n", $jaxon->getJs(), "\n", $jaxon->getScript(), "\n";
echo "<!-- HTTP comment  -->\n"
?>
</html>
