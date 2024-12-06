<?php 
//Escribir un programa que dado un array de palabras, te diga qué palabra es la más corta y cual la más lasrga.


$cadenas= ["patata", "cebolla","sal","pimienta","te","agua"];
$nLetrasMayor = 0;
$nLetrasMenor = 500;

foreach($cadenas as $cadena){
    $arrayDeLetras = str_split($cadena);
    $nLetras = count($arrayDeLetras);

    echo "El string de $cadena tiene $nLetras. &nbsp;&nbsp;&nbsp; ";
    
    $nLetrasMayor < $nLetras? $nLetrasMayor = $nLetras : null;
    $nLetrasMenor > $nLetras? $nLetrasMenor = $nLetras : null;
}

// strlen(palabra) te cuenta directamente las letras de un string, por lo que sería mejor método para hacerlo.
?> 

<h2>La palabra más larga contiene <?=$nLetrasMayor?> letras</h2>
<h2>La palabra más corta contiene <?=$nLetrasMenor?> letras</h2>