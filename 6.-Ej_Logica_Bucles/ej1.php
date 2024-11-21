<?php 
// Crear un código que pasado un número nos diga cuántas veces es necesario elevarlo para que pase de 10000

$cifraASuperar = 10000;
$resultado = 0;
$nVecesElevado = 1;
$numero = 11;
$numero2 = 150;


for($i=1; $resultado < $cifraASuperar; $i++)
{
    $resultado= $numero2 * ($numero2**$i);
    $i++;
    $nVecesElevado = $i;
}
echo $resultado;
?>

<h1> <?= $nVecesElevado?> </h1>