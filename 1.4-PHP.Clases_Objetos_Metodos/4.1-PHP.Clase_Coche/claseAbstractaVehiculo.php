<?php

abstract class Vehiculo
{
 
    public function __construct(
        public string $marca,
        public string $modelo,
        public string $matricula,
        public int $kilometrosRecorridos,
        public int $litros100Km,
        public int $cantidadCombustible
    ) {}

    public abstract function viajar(int $distacia);

    public abstract function repostarCombustible(int $gasolinaRepostada); // El cuerpo de función solo puede ir en la clase hija


    public function getKilometrosRecorridos(): int
    {
        return $this->kilometrosRecorridos;
    }
    public function setKilometrosRecorridos(int $kilometrosRecorridos): void
    {
        $this->kilometrosRecorridos = $kilometrosRecorridos;
    }
    public function getCantidadCombustible(): int
    {
        return $this->cantidadCombustible;
    }
    public function setCantidadCombustible(int $cantidadCombustible): void
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



