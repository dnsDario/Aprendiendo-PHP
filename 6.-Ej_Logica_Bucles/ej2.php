<?php 
$cadenas= ["patata", "cebolla","sal","pimienta","te","agua"];

foreach($cadenas as $cadena){
    $arrayDeLetras = str_split($cadena);
    $nLetras = count($arrayDeLetras);
    echo "El string de $cadena tiene $nLetras";
}

?> 