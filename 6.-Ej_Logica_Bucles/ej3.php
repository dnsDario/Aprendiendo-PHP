<?php
// Crea un programa que dado un número, cree una pirámide cuya base tiene esa longitud e asteriscos. En este caso la queremos de 5 asteriscos.
$nEspacios = 5;
$nAsteriscos = 0;
$arrayEspaciosAsteriscos = [" "];
?>

<ul>
    <?php for ($nAsteriscos = 0; $nAsteriscos < 5; $nAsteriscos++): ?>
        
        <li>
            <?php for ($nEspacios; $nEspacios >= 1; $nEspacios--) {
                $arrayEspaciosAsteriscos[] = "&nbsp;&nbsp;";
            }
            $arrayEspaciosAsteriscos[$nAsteriscos] = '';
            $arrayEspaciosAsteriscos[] = "*";
            $filaEspaciosAsteriscos = implode('&nbsp;&nbsp;', $arrayEspaciosAsteriscos);
            echo $filaEspaciosAsteriscos;
            ?>
        </li>



    <?php endfor; ?>
</ul>


<style>
    li {
        list-style-type: none;
    }
</style>