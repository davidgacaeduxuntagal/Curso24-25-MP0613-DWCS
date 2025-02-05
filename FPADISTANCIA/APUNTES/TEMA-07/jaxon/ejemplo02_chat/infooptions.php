<?php 
require (__DIR__ . '/vendor/autoload.php');

use Jaxon\Jaxon;

// Get the core singleton object
$jaxon = jaxon();

echo 'core.version=' . $jaxon->getOption('core.version') . PHP_EOL;
echo 'core.language=' . $jaxon->getOption('core.language') . PHP_EOL;
echo 'core.encoding=' . $jaxon->getOption('core.encoding') . PHP_EOL;
echo 'core.decode_utf8=' . $jaxon->getOption('core.decode_utf8') . PHP_EOL;
echo 'core.prefix.function=' . $jaxon->getOption('core.prefix.function') . PHP_EOL;
echo 'core.prefix.class=' . $jaxon->getOption('core.prefix.class') . PHP_EOL;
echo 'core.prefix.event=' . $jaxon->getOption('core.prefix.event') . PHP_EOL;
echo 'core.request.uri=' . $jaxon->getOption('core.request.uri') . PHP_EOL;
echo 'core.request.mode=' . $jaxon->getOption('core.request.mode') . PHP_EOL;
echo 'core.request.method=' . $jaxon->getOption('core.request.method') . PHP_EOL;
echo 'core.request.csrf_meta=' . $jaxon->getOption('core.request.csrf_meta') . PHP_EOL;
echo 'core.process.clean=' . $jaxon->getOption('core.process.clean') . PHP_EOL;
echo 'core.process.exit=' . $jaxon->getOption('core.process.exit') . PHP_EOL;
echo 'core.process.timeout=' . $jaxon->getOption('core.process.timeout') . PHP_EOL;
echo 'core.error.handle=' . $jaxon->getOption('core.error.handle') . PHP_EOL;
echo 'core.error.log_file=' . $jaxon->getOption('core.error.log_file') . PHP_EOL;
echo 'core.debug.on=' . $jaxon->getOption('core.debug.on') . PHP_EOL;
echo 'core.debug.verbose=' . $jaxon->getOption('core.debug.verbose') . PHP_EOL;
echo 'core.debug.output_id=' . $jaxon->getOption('core.debug.output_id') . PHP_EOL;
echo 'core.template.cache=' . $jaxon->getOption('core.template.cache') . PHP_EOL;
echo 'js.lib.uri=' . $jaxon->getOption('js.lib.uri') . PHP_EOL;
echo 'js.lib.queue_size=' . $jaxon->getOption('js.lib.queue_size') . PHP_EOL;
echo 'js.lib.show_cursor=' . $jaxon->getOption('js.lib.show_cursor') . PHP_EOL;
echo 'js.lib.show_status=' . $jaxon->getOption('js.lib.show_status') . PHP_EOL;
echo 'js.app.uri=' . $jaxon->getOption('js.app.uri') . PHP_EOL;
echo 'js.app.dir=' . $jaxon->getOption('js.app.dir') . PHP_EOL;
echo 'js.app.extern=' . $jaxon->getOption('js.app.extern') . PHP_EOL;
echo 'js.app.minify=' . $jaxon->getOption('js.app.minify') . PHP_EOL;
echo 'js.app.options=' . $jaxon->getOption('js.app.options') . PHP_EOL;



?>    
