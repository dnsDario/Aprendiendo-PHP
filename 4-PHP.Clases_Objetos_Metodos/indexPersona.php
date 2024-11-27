<?php 
    require_once 'clasePersona.php';

    $persona = new Persona('Juan', 'Perez', 'juanperez@gmail.com', 70, 175);

    echo $persona->getEmail();
    echo $persona->getPeso();
    echo $persona->getAltura();

    $persona->setEmail('juanperezdominguez@gmail.com');
    $persona->setPeso(78);
    $persona->setAltura(173);

    echo $persona->getEmail();
    echo $persona->getPeso();
    echo $persona->getAltura();

    $IMC = $persona->getPeso() / pow(($persona->getAltura() / 100), 2);
    $IMC = round($IMC, 2);

    if ($IMC < 19) {
        $estadoPersona = "Estás en estado de delgadez";
    } elseif ($IMC < 25) {
        $estadoPersona ="Estás en estado normal";
    } elseif ($IMC < 30) {
        $estadoPersona ="Estás en estado de sobrepeso";
    } else {
        $estadoPersona ="Estás en obesidad";
    }

    echo "<strong>&nbsp;&nbsp;&nbsp; El IMC es del $IMC% y $estadoPersona</strong>  </br>";