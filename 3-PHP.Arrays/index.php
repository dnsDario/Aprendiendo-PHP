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


<!-- ----- Realizamos una lista usando FOREACH de un array ----- -->
<ul>
    <?php foreach($array1 as $key => $language) : ?>
        <li><?= $key . ' ' . $language?></li>
    <?php endforeach ?>    
</ul>


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





<style>
    :root {
        color-scheme: dark;
    }
    body {
        display: grid;
        grid-auto-rows: 100px;
        grid-auto-columns: 250px;
        
    }
</style>