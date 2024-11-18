<?php
require_once('./functions/functions.php');

// _once para asegurarnos de que solo lo requieres una vez, y así evitar colisiones.

/*include_once('./functions/functions.php');  En caso de no encontrar el archivo solo da un warning pero sigue ejecutando el código. Solo usar en caso de que sea algo muy poco importante */

//Las variables creadas en este archivo, funcionan en los archivos que aquí se importan, y al revés (por ejemplo API_URL que esta en el archivo functions)

$data = get_data(API_URL);
$untilMessage = get_until_message(($data["days_until"]));

// Los require que usen variables del archivo, tienen que ir detrás de ellas, pues deben ser leidas antes de usarse
require('./sections/head.php');
require('./sections/styles.php');
require('./sections/main.php');
?>