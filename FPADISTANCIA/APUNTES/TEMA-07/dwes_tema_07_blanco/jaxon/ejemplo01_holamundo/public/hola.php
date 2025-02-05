<?php 
require (__DIR__ . '/../vendor/autoload.php');

use Jaxon\Jaxon;
use Jaxon\Response\Response;
use function Jaxon\jaxon;

// La clase HolaMundo
class HolaMundo {
    public function decirHola($estaEnMayusculas)  {
        $texto = ($estaEnMayusculas) ? '¡HOLA MUNDO!' : '¡hola mundo!';

        $respuesta = jaxon()->newResponse();
        $respuesta->alert($texto);
        return $respuesta;
    }
}

// 1. Obtenemos una referencia al objeto singleton jaxon
$jaxon = jaxon();

// 2. Registramos la instancia de la clase con Jaxon
$jaxon->register(Jaxon::CALLABLE_CLASS, HolaMundo::class);

// 3. Llamamos al motor de procesamiento
if($jaxon->canProcessRequest())  $jaxon->processRequest();

?>


<!doctype html>
<html>
<head lang="es">
    <title>Jaxon Simple Test</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

<?php
   // 4. Insertamos el codigo de Jaxon CSS en la página
    echo $jaxon->getCss();
?>    

</head>

<body>
    <input type="button" value="Enviar Minúsculas" onclick="JaxonHolaMundo.decirHola(0);return false;" />
    <input type="button" value="ENVIAR MAYÚSCULAS" onclick="JaxonHolaMundo.decirHola(1);return false;" />

</body>
<?php
// 5. Insertamos el codigo javascript de Jaxon javascript al final de la página
echo $jaxon->getJs();
echo $jaxon->getScript();
?>    
</html>