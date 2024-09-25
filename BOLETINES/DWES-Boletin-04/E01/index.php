<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWES-PHP-B04-01</title>
</head>
<body>
    <div class="primos">
        <pre>
<?php
    /*
    *  Parámetro:
    *  numero: [ENTRADA] número a comprobar si es primo o no
    *  
    *  Devuelve: true (es primo) / false (no es primo)
    */
    function esPrimo(int $numero): bool {
        $raiz = floor(sqrt($numero));
        $i = 2;

        // Por una propiedad matemática, basta con comprobar hasta la raiz
        while ( ($i <= $raiz)  &&  (($numero % $i) !== 0) ) {
            $i++;
        }

        if ( $i > $raiz ) {
            return $numero === 1 ? false : true;
        } else {
            return false;
        }
    }

    for ($i = 1; $i <= 100; $i++) {
        echo ( esPrimo($i) ? (" " . ($i<10 ? " " . $i : $i) . " ") : " -- " ) ;
        echo  ( ( $i % 10 ) === 0 ? "<br>" : "" );
    }


?>
        </pre>
    </div> 
</body>
</html>