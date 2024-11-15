<?php 
$age= 45;
$isOld = $age > 60;
$isYoungButOld = $age >= 40;
$isYoung = $age < 40;

$age2= 31;
$isOld2 = $age2 > 60;
$isYoungButOld2 = $age2 >= 40;
$isYoung2 = $age2 < 40;

?>

<!-- --- If, Else if, Else, en PHP----- -->
<?php
if($isOld) {
    echo " <h2>Eres viejo</h2> ";
} else if ($isYoungButOld) { /*  Puede ir junto o separado --> else if / elseif  */
    echo " <h2>Viejoven con mucho por delante, disfruta!!</h2>";
} else {
    echo "<h2>Estas en la flor de la vida!</h2>";
}
?>


<!-- --- OPCIÓN ADECUADA PARA CUANDO MANEJAMOS UN SISTEMA DE PLANTILLAS, EN EL CUÁL INTRODUCIMOS BASTANTE TEXTO EN CADA OPCIÓN ----- -->
<?php if ($isOld2) : ?>
    <h2>Eres viejo, lo siento</h2>
<?php elseif ($isYoungButOld2) : ?>  <!-- De esta manera elseif solo puede escribirse junto, de lo contrario nos daría error -->
    <h2>Aún no eres tan mayor, viejoven pero con mucho por delante, disfruta!!</h2>
<?php else : ?>
    <h2>Estas en la flor de la vida!</h2>
<?php endif ?>

<!-- ----  TERNARIOS  ------------------------------------------- -->
<?php  
$message = $isOld2 
    ? 'Ya estás mayor' 
    : 'Aún estás hecho un chaval';
echo $message;
?>
<br>
<?php 
$message2 = $isOld2 
    ? 'Ya estás mayor' 
    : $message = $isYoungButOld2 
        ? 'Aún estás hecho un chaval'
        : 'Eres bastante joven';
echo $message;
?>
<br>

<!-- -------  MATCH  ------------------------------------------- -->

<?php
$age3 = 22;
$message3 = match ($age3) {
    0,1,2 => "Eres un bebé",
    3,4,5,6,7,8,9,10 => "Eres un niño",
    11,12,13,14,15,16,17,18 => "Eres un adolescente",
    19,20,21,22,23,24,25,26,27,28,29 => "Eres un adulto joven😎",
    default => "eres un adulto",
};
$age4 = 31;
$message4 = match (true) {
    $age4 < 3 => "Eres un bebé",
    $age4 <= 10 => "Eres un niño",
    $age4 < 18 => "Eres un adolescente",
    $age4 < 30 => "Eres un adulto joven😎",
    $age4 < 50 => "Estás en la segunda juventud😜",
    $age4 < 65 => "Camino a la juvilación👏",
    default => "relájate y disfruta 🙌",
};
?>
<h2><?= $message3 ?></h2>
<h2><?= $message4 ?></h2>



<style>
    :root {
        color-scheme: dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>