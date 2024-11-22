<?php 
$userName = '@Dario';
$texto = 'La Gear5 de Luffy es el dios sol Nika, o Joyboy';
$autor = 'DarioTwitter';

$twitts = [
    [
        "texto" => $texto,
        "autor" => $autor,
        "userName" => $userName
    ],
    [
        "texto" => "Este es el texto del segundo twitt",
        "autor" => "Jose Luis",
        "userName" => "@joselu"
    ],
    [
        "texto" => "Este es el texto del tercer twitt",
        "autor" => "Juan",
        "userName" => "@juanillo"
    ],
    [
        "texto" => "Este es el texto del cuarto twitt",
        "autor" => "Julia",
        "userName" => "@vjuliaTwitter"
    ]
];

// El orden donde se coloca el require importa, todo lo que quedamos añadir al archivo tiene que estar antes de la llamada a éste.
require_once "./index.html"; 


?>