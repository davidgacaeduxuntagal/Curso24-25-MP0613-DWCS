<?php

Jaxon\jaxon()->di()->getViewRenderer()->addRenderer('latte', function() {
    return new Jaxon\Latte\View();
});
