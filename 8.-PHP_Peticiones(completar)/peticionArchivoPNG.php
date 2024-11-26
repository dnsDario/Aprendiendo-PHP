<?php
header("content-type:image/png");
$imagen = file_get_contents("logoPHP.png"); //poner el mimetype de la imagen (.png,.jpg,.gif,.bmp,.tiff,.svg)

//si vamos a hacer una petición a un archivo png hay que ponerlo en las cabeceras
?>