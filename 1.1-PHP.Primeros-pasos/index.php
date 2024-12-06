
<?php 
    $name = "Dario";
    $isDev = true;
    $age = 31;
    $newAge = $age + '9';
    $newAge2 = $age - '1';

    echo "El tipo de name es: " . gettype($name); // Así obtenemos el tipo de una variable

    $ageForzado = (bool) 31; /*  Se puede hacer un forzado de tipos aunque no es lo habitual, en este caso mayor que 0 sería true */

    define('LOGO_URL', 'https://img.icons8.com/nolan/512/php-logo.png'); /*variable constante global */
    const NOMBRE = 'Darius'; /*variable constante local, mejor ponerlas en mayúsculas para identificarlas y no hace falta el '$' */
?>

<!-- ---------------- PRIMEROS ECHO en PHP ------------------- -->
<img src="<?php echo LOGO_URL ?>" alt="logoPHP" width= 250px class= "logo" >

<h1> 
    <?php echo "Hola Mundo!!!!" ?>
</h1>

<h2>
    <?= "Hola Mundo!!!! Me llamo $name 😊  para poner un emoji => 'windows' + '.'"   /* forma abreviada de echo  <?php echo = <?= */ ?>
</h2>


<!-- ---------------- USOS DE LA FUNCIÓN var_dump ------------------- -->
<?php
var_dump($name);
var_dump($age);
var_dump($isDev);
?>
<h3>
    <?= "la variable 'var_dump' nos da los datos con el tipo de dato que son"?>
</h3>


<!-- Como hacer para escribir caracteres que tienen una función en el código -->
<?php $escaparCaracter = "Se pone delante '\', para mostrar caracteres que en programación tienen otros usos, como por ejemplo una comilla doble \" en el texto sin que te rompa el código"; ?>
<h3>
    <?= "$escaparCaracter "?>
</h3>


<!-- ---------------- En PHP la forma de concatenar texto no es con un '+' es con un '.' ------------------- -->
<!-- ---------------- USOS DE LA FUNCIÓN is_string, is_bool, is_int ------------------- -->
<h2>
    <?= "Es string la variable \$name?: "  . is_string($name) . " , devuelve un 1 cuando es true";  ?> <!-- Esto debería devolver 1 si es true y nada si es false -->
</h2>
<h2>
    <?= "Es booleano la variable \$age?: " . is_bool($age) . "   al no serlo, no aparece nada";  ?> <!-- Esto debería devolver true -->
</h2>
<h2>
    <?= "Es entero la variable \$age?: " . is_int($age) . " , devuelve un 1 cuando es true";  ?> <!-- Esto debería devolver un 1 = true -->
</h2>



<!-- ------ En PHP se puede sumar y restar números int con números string --------- -->
<h3> 
<?= "Mi edad es de $age años y hace un par de meses tenía $newAge2, y en 2033 cumpliré $newAge"  ?>;
</h3>

<!-- De momento es lo que sabemos al respecto de crear un alert y ya que salió probé de la misma forma cambiando alert por prompt -->
<script>alert('hola, soy un alert')</script>
<script>prompt('hola, soy prompt')</script>

<img src="<?= LOGO_URL ?>" alt="logoPHP" width= 150px>



<style>
    :root {
        color-scheme: dark;
    }

    body {
        display: grid;
        place-content: center;
    }
    .logo {
        margin-top: 250px;
    }
</style>