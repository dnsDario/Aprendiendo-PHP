<?php

class Coche
{
    /* public $marca;
    public $modelo;
    public $matricula;
    public $kilometrosRecorridos;
    public $cantidadCombustible;

    public function __construct($marca, $modelo, $matricula, $kilometrosRecorridos, $litros100Km, $catidadCombustible)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->matricula = $matricula;
        $this->kilometrosRecorridos = $kilometrosRecorridos;
        $this->cantidadCombustible = $catidadCombustible; */


    public function __construct(
        public string $marca,
        public string $modelo,
        public string $matricula,
        private int $kilometrosRecorridos,
        private int $litros100Km,
        private int $cantidadCombustible
    ) {}

    public function viajar(int $distacia): string
    {
        $this->kilometrosRecorridos += $distacia;
        $gasolinaGastada = $this->litros100Km / 100 * $distacia;
        $this->cantidadCombustible -= $gasolinaGastada;

        return "Viajaste $distacia km, gastaste $gasolinaGastada litros de gasolina, te quedan $this->cantidadCombustible litros de gasolina y tu coche tiene $this->kilometrosRecorridos km recorridos";
    }

    public function repostarCombustible(int $gasolinaRepostada): string
    {
        $this->cantidadCombustible += $gasolinaRepostada;
        return "Repostaste $gasolinaRepostada, y ahora tienes $this->cantidadCombustible litros de gasolina";
    }


    public function getKilometrosRecorridos(): string
    {
        return $this->kilometrosRecorridos;
    }
    public function setKilometrosRecorridos(string $kilometrosRecorridos): void
    {
        $this->kilometrosRecorridos = $kilometrosRecorridos;
    }
    public function getCantidadCombustible(): string
    {
        return $this->cantidadCombustible;
    }
    public function setCantidadCombustible(string $cantidadCombustible): void
    {
        $this->cantidadCombustible = $cantidadCombustible;
    }
    

        /**
         * Get the value of litros100Km
         */ 
        public function getLitros100Km()
        {
                return $this->litros100Km;
        }

        /**
         * Set the value of litros100Km
         *
         * @return  self
         */ 
        public function setLitros100Km($litros100Km)
        {
                $this->litros100Km = $litros100Km;

                return $this;
        }
}


?>



