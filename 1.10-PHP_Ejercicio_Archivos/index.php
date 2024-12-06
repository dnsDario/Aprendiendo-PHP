<?php
$quijote = $_FILES['archivo_quijote'];
$palabra = $_POST['palabra_quijote'];  

header("Content-Type: " .$quijote['type']);
$textoQuijote = file_get_contents($quijote["tmp_name"]);
$textoQuijote = strtolower($textoQuijote);
$palabra = strtolower($palabra);




$n_veces = substr_count($textoQuijote, $palabra);

echo "<h1>La palabra $palabra se repite $n_veces veces en el quijote</h1>";

echo "<p>$textoQuijote</p>";
?>