<?php
require_once 'serie.php';
require_once 'temporada.php';
require_once 'capitulo.php';

$serie = new Serie("One Piece", "Animacion", 1999, 10);

$temporada = new Temporada(1, 10, 1999, 'One Piece'); // Temporada 1, 10 capítulos, año 1999 y titulo de la serie "One Piece"

$capitulo = new Capitulo(1, $capitulo->setDuracion(23), 1, 45, 'One Piece'); // Capítulo 1, duración 23 minutos, temporada 1, titulo de la serie "One Piece"

echo "Temporada: " . $temporada->getNTemporada() . " - Capítulos: " . $temporada->getCapitulos() . " - Año: " . $temporada->getAñoEstreno() . " - Titulo de la serie: " . $temporada->getTituloSerie();
