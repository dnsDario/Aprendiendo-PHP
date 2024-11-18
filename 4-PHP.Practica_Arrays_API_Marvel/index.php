<?php
require_once('./const.php');
require_once('./functions/functions.php');

// _once para asegurarnos de que solo lo requieres una vez, y así evitar colisiones.

/*include_once('./functions/functions.php');  En caso de no encontrar el archivo solo da un warning pero sigue ejecutando el código. Solo usar en caso de que sea algo muy poco importante */

//Las variables creadas en este archivo, funcionan en los archivos que aquí se importan, y al revés (por ejemplo API_URL que esta en el archivo functions)

$data = get_data(API_URL);
$untilMessage = get_until_message(($data["days_until"]));
$untilMessage2 = get_until_message(($data["following_production"]["days_until"]));

// Los require que usen variables del archivo, tienen que ir detrás de ellas, pues deben ser leidas antes de usarse
?>

<?php render_template('head', ["title" => $data]);?>
<?php require('./sections/styles.php');?>
<?php render_template('main', array_merge(
    $data,
    ["until_message" => $untilMessage], 
    ["until_message2" => $untilMessage2]// a parte del array, añadimos como si fuera otro atributo que dentro de la función, el "extract" convierte en variable de nuevo y desde ahí ya puede acceder a ella el main
) );?>