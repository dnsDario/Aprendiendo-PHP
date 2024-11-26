<?php 


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$password = $_POST['password'];

$archivo1 = $_FILES['archivo1']; //subir archivo
/* print_r($archivo1); */

//visualizar archivo (se encuentra siempre en tmp_name) si no se pone nada entre corchetes se ve el array de informacion que acompaña al archivo
header("Content-Type: " .$archivo1['type']);
echo file_get_contents($archivo1["tmp_name"]);

/* 
echo "<h1>Hola $nombre $apellido tu email es $email y las contraseñas es $password</h1>";
 */
?>

