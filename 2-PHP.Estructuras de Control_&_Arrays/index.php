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


<!-- ----- ARRAYS EN PHP ----- -->
<?php 
$array1 = ["PHP", "JavaScript", 1];
$array1[] = "Java"; /* Directamente lo pone al final, seria el array1.push("Java") de JavaScript */
$array1[2] = "TypeScript"; /* En esa posición, sustituye el dato que hay por éste */
$array1[4] = "C++"; 
?>

<h3> 
    El mejor lenguaje es <?= $array1[4] ?> <!-- mostramos el quinto lenguaje del array -->
</h3>

<!-- ----- ARRAYS ASOCIATIVOS ("OBJETOS" de JavaScript) EN PHP ----- -->
<?php 
$person = [
    "name" => "Darío",
    "age" => 31,
    "isDev" => true,
    "languages" => ["JavaScript", "PHP"]
];

$person["languages"][] = "Java"; // introducimos 'Java' al final del array del atributo 'languages'

?>

<h2> <?=  $person["languages"][2] ?> </h2> <!-- mostramos el tercer valor del atributo 'languages' -->


<!-- ---------  FOREACH  ---------- -->
<ul>
    <?php foreach($array1 as $key => $language) : ?>  <!-- "$key =>" es opcional -->
        <li><?= $key . ' ' . $language?></li>
    <?php endforeach ?>    
</ul>

<!-- While y FOR-->
<?php 
$pasos = 0;
$pasosTotales= 5;
$pasosRestantes = 0;

while ($pasos < 3)
{
    echo "<h2>Sigue caminando</h2>";
    $pasos++;
}

for($i=0; $i < $pasosTotales; $i++)
{
    $pasosRestantes = $pasosTotales - $i;
    echo "<h3>no has completado tu objetivo diario de pasos, te quedan $pasosRestantes pasos. </h3>" ;
}
?>

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

<!-- ------------ SWITCH -------------- -->

<?php
$nombre = 'Luis';
switch ($nombre){
    case 'Juan' : echo "Es Juan";
     break;
    case 'Jose' : echo "Es Jose";
     break;
    case 'Laura' : echo "Es aura";
     break;
    case 'Luis' : echo "Es Luis";
     break;
    case 'María' : echo "Es María";
     break;
    default : "no es ninguno";
}
?>

<?php 
?>    





<style>
    body {
        display: grid;
        grid-auto-rows: 100px;
        grid-auto-columns: 450px;
        
    }
</style>