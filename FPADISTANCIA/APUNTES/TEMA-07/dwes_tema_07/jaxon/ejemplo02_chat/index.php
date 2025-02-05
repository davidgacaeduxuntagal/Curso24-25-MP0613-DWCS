<?php
require (__DIR__ . '/vendor/autoload.php');

use Jaxon\Jaxon;
use Jaxon\Response\Response;
use function Jaxon\jaxon;

// 1. Obtenemos una referencia al objeto singleton jaxon
$jaxon = jaxon();


// 2. Declaramos la funcion que gestiona los mensajes recibidos por el chat
function enviarMensaje($mensaje)
{
    // Sanitizamos el mensaje
    $mensaje = strip_tags($mensaje);

    // Guardar el mensaje en el archivo de log
    file_put_contents('chat.log', $mensaje . PHP_EOL, FILE_APPEND);
}

// 3. Declaramos la función para obtener el log del chat
function getLogDelChat()
{
    // Leemos el contenido del archivo en una cadena y lo troceamos por líneas
    $log = file_get_contents('chat.log');
    $log = preg_replace('/\r\n|\n|\r/', "<br>", $log);

    // Le mandamos la respuesta
    $respuesta = jaxon()->newResponse();
    $respuesta->assign('cajaDeChat', 'innerHTML', $log);
    return $respuesta;
  
}

// 4. Registramos las funciones con Jaxon
$jaxon->register(Jaxon::CALLABLE_FUNCTION, 'enviarMensaje');
$jaxon->register(Jaxon::CALLABLE_FUNCTION, 'getLogDelChat');

// Ejemplo de como usar nuestra librería javascript Jaxon local:
//  si hacemos esto, debemos comentar la línea al final de esta página echo $jaxon->getJs();
$jaxon->setOption('js.lib.uri', '/js/');


// 5. Dejamos todo preparado para procesar las solicitudes Jaxon entrantes
if($jaxon->canProcessRequest())  $jaxon->processRequest();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Jaxon Chat</title>
    <script src="js/jaxon.core.js"></script>
<?php
   // 6. Insertamos el codigo de Jaxon CSS en la página
   // echo $jaxon->getCss();
?>  
</head>

<body>
    <h1>Chat usando Jaxon</h1>
    <div id="cajaDeChat"></div>
    <form onsubmit="return enviarMensaje()">
        <input type="text" id="entrada" placeholder="Introduce un mensaje...">
        <button type="submit">Enviar</button>
        
    </form>
    <script>
        // Creamos una función para enviar mensaje que utiliza la función Jaxon
        function enviarMensaje() {
            // Obtenemos el mensaje de la caja de texto de entrada
            let mensaje = document.getElementById('entrada').value;

            // Send the message to the server using Jaxon
            jaxon_enviarMensaje(mensaje);

            // Vaciar la caja de texto de entrada
            document.getElementById('entrada').value = '';

            // Evitar la acción por defecto del formulario
            return false;
        }

        // Declaramos la función que actualiza los mensajes del chat
        function actualizarCajaChat() {
            // Obtener los mensajes de chat guardados en el archivo del
            // servidor usando Jaxon
            jaxon_getLogDelChat();
        }

        // Actualizar la caja de chat cada 2 segundos:
        setInterval(actualizarCajaChat, 2000);
    </script>
  
</body>
<?php
// 7. Insertamos el codigo javascript de Jaxon javascript al final de la página
// echo $jaxon->getJs();
echo $jaxon->getScript();
?>      
</html>
