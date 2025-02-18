<?php
require_once('./const.php');
require_once('./functions/functions.php');
require_once('./classes/NextMovie.php');

$next_movie = NextMovie::fetch_and_create_movie(API_URL);

$next_movie_data = $next_movie->get_data();
/* $data = get_data(API_URL);
$untilMessage = get_until_message(($data["days_until"]));
$untilMessage2 = get_until_message(($data["following_production"]["days_until"])); */ //modo cuando era sin clases

// Los require que usen variables del archivo, tienen que ir detrás de ellas, pues deben ser leidas antes de usarse
?>

<?php render_template('head', ["title" => $next_movie_data["title"]]);?>
<?php require('../templates/styles.php');?>
<?php render_template('main', array_merge(
    $next_movie_data,
    ["until_message" => $next_movie->get_until_message()],
    ["until_message2" => $next_movie->get_until_message2()] // until_message se agrega al array como atributo con el valor que le da la función "get_until_message"
))?>