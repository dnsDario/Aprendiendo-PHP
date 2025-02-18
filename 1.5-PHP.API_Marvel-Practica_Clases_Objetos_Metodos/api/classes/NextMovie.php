<?php
declare(strict_types=1);

class NextMovie
{
    public function __construct(
        private string $title,
        private int $days_until,
        private array $following_production,
        private string $release_date,
        private string $poster_url,
        private string $overview,
    ) {}

    public function get_until_message(): string
    {
        $days = $this->days_until;
        return match (true) {
            $days === 1 => "¡¡HOY!!🙌🙌",
            $days === 2 => "¡¡MAÑANA!!😜👌",
            $days < 7 => "¡¡Esta semana!!😎",
            $days < 31 => "¡¡Este mes!! 📅",
            default => "Exactamente en $days días📅 ",
        };
    }
    public function get_until_message2(): string
    {
        $days = $this->following_production["days_until"];
        return match (true) {
            $days === 1 => "¡¡HOY!!🙌🙌",
            $days === 2 => "¡ MAÑANA!!😜👌",
            $days < 7 => "¡¡Esta semana!!😎",
            $days < 31 => "¡¡Este mes!! 📅",
            default => "En $days días📅 ",
        };
    }

    public static function fetch_and_create_movie(string $api_url): NextMovie
    {
        $result = file_get_contents($api_url);
        $data = json_decode($result, true); //decodificamos el json que hemos recibido de la API
        return new self(
            $data["title"],
            $data["days_until"],
            $data["following_production"] ?? "Desconocido", //null is collection operator
            $data["release_date"],
            $data["poster_url"],
            $data["overview"]

        );
    }

    public function get_data()
    {
        return get_object_vars($this); //la función devuelve todas las propiedades y valores del objeto
    }
}