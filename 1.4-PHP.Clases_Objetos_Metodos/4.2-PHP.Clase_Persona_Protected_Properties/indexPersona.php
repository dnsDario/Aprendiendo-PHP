<?php 
    require_once 'clasePersona.php';

    $persona = new Persona('Juan', 'Perez', 'juanperez@gmail.com', 70, 175);

    $persona->getEmail();
    $persona->getPeso();
    $persona->getAltura();

    $persona->setEmail('juanperezdominguez@gmail.com');
    $persona->setPeso(76);
    $persona->setAltura(173);

    $persona->getEmail();
    echo $alturaPersona = $persona->getAltura();
    echo $pesoPersona = $persona->getPeso();

   
    $IMC = $persona->calcularIMC($alturaPersona, $pesoPersona);

    echo "<strong>&nbsp;&nbsp;&nbsp; $IMC </strong>  </br>";