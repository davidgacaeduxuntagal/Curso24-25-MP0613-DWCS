<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWES-PHP-B02-07</title>
</head>
<body style="font-family: monospace">
    <div>
       <p id="salida">
<?php
    echo str_replace(" ", "&nbsp;", sprintf("%-7s%-7s%-7s%-s<br>", "A", "A+3", "A+6", "A+9"));

    for($i = 7; $i <= 35; $i +=7) {
        echo str_replace(" ", "&nbsp;", sprintf("%-7d%-7d%-7d%-6d<br>", $i, $i+3, $i+6, $i+9));
    }
?>
    </p>
</body>
</html>