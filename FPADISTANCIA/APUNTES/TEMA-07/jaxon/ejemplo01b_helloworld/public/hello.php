<?php
// 0. Jaxon is installed with Composer. Setup the autoloading.
require('../vendor/autoload.php');

use Jaxon\Jaxon;
use function Jaxon\jaxon;

// 1. Define your functions or classes.
function hello_world($isCaps)
{
    // Create and use a Jaxon response.
    $response = jaxon()->newResponse();
    $text = ($isCaps) ? 'HELLO WORLD!' : 'Hello World!';
    $response->assign('div1', 'innerHTML', $text);
    return $response;
}

// 2. Initialize and configure the library.
$jaxon = jaxon();

// 3. Register your functions or classes.
$jaxon->register(Jaxon::CALLABLE_FUNCTION, "hello_world");

// 4. Process the request.
if ($jaxon->canProcessRequest()) {
    // This function will return the response and exit.
    $jaxon->processRequest();
}

// 5. Insert the Jaxon codes in your HTML page.
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jaxon Examples</title>
</head>

<body>
    <div id="div1">&nbsp;</div>
    <input type="button" value="Say HELLO" onclick="jaxon_hello_world(true);return false;" />
    <input type="button" value="Say Hello" onclick="jaxon_hello_world(false);return false;" />
</body>
<!-- Jaxon CSS -->
<?php echo $jaxon->getCss(), "\n"; ?>
<!-- Jaxon JS -->
<?php echo $jaxon->getJs(), "\n"; ?>
<!-- Jaxon script -->
<?php echo $jaxon->getScript(), "\n"; ?>

</html>