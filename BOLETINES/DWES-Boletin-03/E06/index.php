<?php
// DWES-PHP-B03-06
do {
    // código
} while ($condicion);

?>

<?php
// Ejemplo 1:
$inicial = true;
while ( $inicial || $condicion ) {
    $inicial = false;
    // Código
}
?>

<?php
// Ejemplo 2:
// Código A
while ( $condicion ) {
    // Código A
}
?>

<?php
// Ejemplo 3:
$inicial = true;
while ( $inicial || $condicion ):
    $inicial = false;?>

    <!-- html o lo que sea -->

<?php endwhile;?>