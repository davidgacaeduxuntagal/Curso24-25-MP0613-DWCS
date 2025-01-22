<?php
require (__DIR__ . '/vendor/autoload.php');
require (__DIR__ . '/include/Usuario.php');

use Jaxon\Jaxon;
// use Jaxon\Response\Response;
use function Jaxon\jaxon;

$jaxon = jaxon();

// Opciones de configuración Jaxon: 
$jaxon->setOption('js.app.minify', false);
$jaxon->setOption('core.decode_utf8', true);
$jaxon->setOption('core.debug.on', false);
$jaxon->setOption('core.debug.verbose', false);

// URI que se encarga de procesar solicitudes
$jaxon->setOption('core.request.uri', 'ajax.php');

function vUsuario($u, $p){
        $resp = jaxon()->newResponse();
       
        if ( strlen($u)==0 || strlen($p)==0 ){
            $resp->call('noValidado');
        } else {  // comprobar en base de datos si existe el usuario
            $usuario = new Usuario();
            if (!$usuario->isValido($u, $p)) {
                $resp->call('noValidado');
            } else {
                session_start();
                $_SESSION['usu'] = $u;
                $resp->call('validado');
            }
            $usuario = null;
        }
        
        return $resp;
    }

$jaxon->register(Jaxon::CALLABLE_FUNCTION, 'vUsuario');

?>

