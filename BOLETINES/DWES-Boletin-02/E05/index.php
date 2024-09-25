<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWES-PHP-B02-05</title>
</head>
<body style="font-family: monospace">
    <div>
        <p><pre>N      N<sup>2</sup>     N<sup>3</sup>     N<sup>4</sup></pre></p>
        <p id="salida">
<?php
    for($i = 1; $i <= 10; $i++) {
        echo str_replace(" ", "&nbsp;", sprintf("%-7d%-7d%-7d%-6d<br>", $i, $i**2, $i**3, $i**4));
    }
?>
    </p>
</body>
</html>