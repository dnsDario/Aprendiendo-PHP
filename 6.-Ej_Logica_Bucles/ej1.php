<?php 
// Crear un código que pasado un número nos diga cuántas veces es necesario elevarlo para que pase de 10000

$numero = 15;
$nVecesElevado = 1;
$resultado = 0;

$resultado = $numero;

for($i=2; $resultado < 10000; $i++)
{
    $resultado *= $numero;
    $nVecesElevado = $i;
}
?>

<h2>El número <?= $numero?>^<?= $nVecesElevado?> supera los 10mil, y su resultado final sería <?= $resultado?> </h2>