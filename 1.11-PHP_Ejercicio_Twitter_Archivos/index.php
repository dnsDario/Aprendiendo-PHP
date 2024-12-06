<?php 

$datosTweets = file_get_contents("./tweets.json");
$datos = json_decode($datosTweets, true);


require_once "./index.html";

?>