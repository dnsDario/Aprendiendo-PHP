<?php 
require_once './claseCoche.php';

$micoche = new Coche(4,"Seat", "Ibiza", "8245KTJ", 100, 6, 20);
$coche2 = new Coche(4,"Renault", "Megane", "3299KWJ", 100, 6, 20);


$micoche->repostarCombustible(20);
$micoche->viajar(130);
$micoche->viajar(70);
$micoche->viajar(30);
$micoche->viajar(200);

$coche2->repostarCombustible(50);
$coche2->viajar(200);
$coche2->viajar(110);
$coche2->viajar(30);
$coche2->viajar(200);

echo "La cantidad de combustible que tiene el coche es: " . $micoche->getCantidadCombustible() . "<br>";
echo "La cantidad de combustible que tiene el coche es: " . $coche2->getCantidadCombustible() . "<br>";


?>