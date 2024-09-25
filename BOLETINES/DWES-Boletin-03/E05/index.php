<?php
// DWES-PHP-B03-05

for ($i = 1; $i <= 100; $i++) {
    // código ....
}

?>

<?php
// Ejemplo 1:

$i = 1; 
while ($i <= 100) {
    // código ....  
    $i++;
}
?>

<?php
// Ejemplo 2:
$i = 1; 
while ($i <= 100):?>

<!-- html o lo que sea -->

<?php endwhile; ?>


