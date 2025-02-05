<?php

namespace Jaxon;

use Jaxon\Flot\FlotPlugin;
use Jaxon\Utils\Template\TemplateEngine;

// Register the template dir into the template renderer
jaxon()->di()->set(FlotPlugin::class, function($c) {
    $xTemplateEngine = $c->g(TemplateEngine::class);
    $xTemplateEngine->addNamespace('jaxon::flot', realpath(__DIR__ . '/../templates'));
    return new FlotPlugin($xTemplateEngine);
});
// Register an instance of this plugin
jaxon()->registerPlugin(FlotPlugin::class, FlotPlugin::NAME);
