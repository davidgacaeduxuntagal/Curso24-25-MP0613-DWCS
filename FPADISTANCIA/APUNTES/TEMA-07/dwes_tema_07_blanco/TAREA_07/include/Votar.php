<?php
// [JAXON-PHP]
spl_autoload_register(function ($clase) {
    include $clase . ".php";
});

require (__DIR__ . '/../vendor/autoload.php');

use Jaxon\Jaxon;
use function Jaxon\jaxon;

$jaxon = jaxon();

function miVoto($u, $p, $c) {
    $resp = jaxon()->newResponse();

    if (strlen($u) == 0 || strlen($p) == 0) {
        $resp->alert("Ni el usuario ni el producto pueden estar vacíos!!!");
    } else {
        $voto = new Voto();
        
        if ($voto->puedeVotar($u, $p)) {
            $voto->setIdPr($p);
            $voto->setIdUs($u);
            $voto->setCantidad($c);
            $voto->create();
            
            // Usando AJAX (a través de Jaxon), invocamos el método javascript votoValido
            $datosRespuesta = array( 'pro' => $p, 'media' => $voto->getMedia($p));
            $resp->call('votoValido', $datosRespuesta);
        } else {
            $resp->alert("Ya has votado ese producto !!!");
        }

        $voto = null;
    }

    return $resp;
}

function pintarEstrellas($c, $p) {
    $voto      = new Voto();
    $total     = $voto->getTotalVotos($p);
    $voto      = null;

    $resp      = jaxon()->newResponse();
    $en        = intval($c);
    $dec       = $c - $en;
    $estrellas = "$total Valoraciones. ";

    if ($en > 0) {
        for ($i = 1; $i <= $en; $i++) {
            $estrellas .= "<i class='fas fa-star'></i>";
        }
        if ($dec >= 0.5)
            $estrellas .= "<i class='fas fa-star-half-alt'></i>";
    }

    $resp->assign("votos_$p", "innerHTML", $estrellas);
    
    return $resp;
}

$jaxon->register(Jaxon::CALLABLE_FUNCTION, 'miVoto');
$jaxon->register(Jaxon::CALLABLE_FUNCTION, 'pintarEstrellas');

