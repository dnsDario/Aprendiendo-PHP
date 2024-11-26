<?php

$result = file_put_contents("quijote.txt", 'Es, pues, de saber que este sobredicho hidalgo, los ratos que estaba ocioso —que eran los más del año—, se daba a leer libros de caballerías, con tanta afición y gusto, que olvidó casi de todo punto el ejercicio de la caza y aun la administración de su hacienda; y llegó a tanto su curiosidad y desatino en esto, que vendió muchas hanegas de tierra de sembradura para comprar libros de caballerías en que leer, y, así, llevó a su casa todos cuantos pudo haber dellos; y, de todos, ningunos le parecían tan bien como los que compuso el famoso Feliciano de Silva, porque la claridad de su prosa y aquellas entricadas razones suyas le parecían de perlas, y más cuando llegaba a leer aquellos requiebros y cartas de desafíos, donde en muchas partes hallaba escrito: «La razón de la sinrazón que a mi razón se hace, de tal manera mi razón enflaquece, que con razón me quejo de la vuestra fermosura». Y también cuando leía: «Los altos cielos que de vuestra divinidad divinamente con las estrellas os fortifican y os hacen merecedora del merecimiento que merece la vuestra grandeza...»'/* , FILE_APPEND */); /* El tercer argumento es para decir que añadimos el texto al final del archivo en vez de reemplazarlo */

if($result===false){
	echo "Error al escribir en el archivo";
} else {
	$contenidoQuijote = file_get_contents("quijote.txt");
};

$imagen = '<img src="logoPHP.png" alt="logoPHP">';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="bienvenidaPHP">Bienvenido a PHP <?= $imagen; ?></h1>
    <p><?= $contenidoQuijote; ?></p>
</body>
</html>

<style>
    body{
        display: flex;
        flex-flow: column;
        background-color: blue;
        width: 100%;
        height: 90vh;
        margin: 0px;
        padding: 0px;
        align-items: center;
    }
    h1{
        display: flex;
        flex-flow: column;
        width: 100%;
        height: 90vh;
        font-size: 44px;
        align-items: center;
        justify-content: center;
        text-align: center;


    }
    img{
        width: 350px;
        height: 200px;
        
    }
    p{
        font-size: 20px;
        width: 80%;
        text-align: justify;
        
    }
    
</style>