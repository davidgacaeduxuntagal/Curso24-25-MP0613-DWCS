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
        // Inicializamos a 0 el resultado
        $r = array_fill(0, $m1Filas, array_fill(0, $m2Columnas, 0));
        
        // Calculamos la traspuesta de $m2
        for($i = 0; $i < $m2Columnas; $i++) {
            $m2T[$i] = array_column($m2, $i);
        }

        foreach($m1 as $numeroFila => $fila1) {
            foreach($m2T as $numeroColumna => $fila2) {
              foreach($fila1 as $k => $celda1) {
                $r[$numeroFila][$numeroColumna] += $celda1 * $fila2[$k];
              }
            }
        }
        return $r;
    }
}


// Codigo para probar la función
$M1 = [ [1,2,3], [4, 5, 6], [7, 8, 9]];
$M2 = [ [1, 4], [2, 5], [3, 6]];


$r = productoMatricial($M1, $M2);

var_dump($r);
?>