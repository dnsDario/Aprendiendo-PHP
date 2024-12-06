<?php 
$userName = '@Dario';
$texto = 'La Gear5 de Luffy es el dios sol Nika, o Joyboy';
$autor = 'DarioTwitter';

$tweets = [
    [
        "texto" => $texto,
        "autor" => $autor,
        "userName" => $userName
    ],
    [
        "texto" => "Este es el texto del segundo tweet",
        "autor" => "Jose Luis",
        "userName" => "@joselu"
    ],
    [
        "texto" => "Este es el texto del tercer tweet",
        "autor" => "Juan",
        "userName" => "@juanillo"
    ],
    [
        "texto" => "Este es el texto del cuarto tweet",
        "autor" => "Julia",
        "userName" => "@vjuliaTwitter"
    ]
];

// El orden donde se coloca el require importa, todo lo que queramos importar al archivo tiene que estar antes de la llamada a éste.
require_once "./index.html"; 


?>