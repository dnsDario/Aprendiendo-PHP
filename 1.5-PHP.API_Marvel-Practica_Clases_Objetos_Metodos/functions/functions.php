<?php
declare(strict_types=1);

function render_template (string $template, array $data = [])
{
    extract($data); //convierte los atributos del $data(array asociativo) en variables (ej: $title)
    require "./templates/$template.php";
}
?>