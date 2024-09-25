<?php 

function productoMatricial($m1, $m2): array {
    // Comprobar dimensiones
    $m1Filas    = count($m1);
    $m1Columnas = count($m1[0]);
    $m2Filas    = count($m2);
    $m2Columnas = count($m2[0]);

    if ( $m1Columnas !== $m2Filas ) {
        throw new Exception("Dimensiones de matrices no compatibles");
    } else {
        for($fila = 0; $fila < $m1Filas; $fila++) {
            for($columna = 0; $columna < $m2Columnas; $columna++) {
                $resultado[$fila][$columna] = 0;
                for($celda = 0; $celda < $m1Columnas; $celda++) { 
                    $resultado[$fila][$columna] += $m1[$fila][$celda] * $m2[$celda][$columna];
                }
            }
        }
        return $resultado;
    }
}

// Codigo para probar la función
$M1 = [ [1,2,3], [4, 5, 6], [7, 8, 9]];
$M2 = [ [1, 4], [2, 5], [3, 6]];


$r = productoMatricial($M1, $M2);

var_dump($r);
?>