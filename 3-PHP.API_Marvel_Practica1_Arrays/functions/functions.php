<?php
declare(strict_types=1);
// habilita checkeos mucho más estrictos para los tipos de datos
#Inicializar una nueva sesión de cURL; ch = cURL handle

function render_template (string $template, array $data = [])
{
    extract($data); //convierte los atributos del $data(array asociativo) en variables (ej: $title)
    require "./templates/$template.php";
}



/* Forma de tratar con las API con conocimiento de los estados y pudiendo hacer GET, POST, PUT, etc. */
/*$ch = curl_init(($API_URL));
 // Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//Ejecutar la petición y guardar el resultado
$result = curl_exec($ch);
//cerramos el cURL
curl_close($ch); */
/* ¡¡ El código no se continua ejecutando hasta que no resuelve los cURL, de manera síncrona !! */

/* Una alternativa a todo lo anterior (curl_init, curl_setotp, curl_exec), sería utilizar file_get_contents --> $result = file_get_contents(API_URL), y obtienes el json igual,
es la opción más fácil en el caso de que solo quieras hacer un GET de una API. Con el cURL es más fácil ver los estados, y sirve también para hacer POST, PUT, etc */

/* no es necesario poner string y array (si no está declarado strict_types), pero es una forma de decirle el dato de entrada y salida */
function get_data(string $url): array
{ // la convención en métodos nativos es usar snake_case (se puede usar camelCase u otros también)
    $result = file_get_contents($url);
    $data = json_decode($result, true); //decodificamos el json que hemos recibido de la API
    return $data;
}

function get_until_message(string $days): string
    {
        return match (true) {
            $days === 1 => "¡¡Se estrena es HOY!!🙌🙌",
            $days === 2 => "¡¡Se estrena MAÑANA!!😜👌",
            $days < 7 => "¡¡Se estrena en esta semana!!😎",
            $days < 31 => "¡¡Se estrena este mes!! 📅",
            default => "Quedan $days días para el estreno 📅 ",
        };
    }
?>