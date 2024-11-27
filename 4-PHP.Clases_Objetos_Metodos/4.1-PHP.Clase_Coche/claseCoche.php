<?php
require_once './claseAbstractaVehiculo.php';

class Coche extends Vehiculo
{
    public function __construct(
        public int $nRuedas,
        public string $marca,
        public string $modelo,
        public string $matricula,
        public int $kilometrosRecorridos,
        public int $litros100Km,
        public int $cantidadCombustible)
    {    
    }

    public function getMarca():string{
        return $this->marca;
    }
    public function getModelo():string{
        return $this->modelo;
    }
    public function getMatricula():string{
        return $this->matricula;
    }
    
    public function getKilometrosRecorridos(): int
    {
        return $this->kilometrosRecorridos;         
    }
    public function getLitros100Km(): int
    {
        return $this->litros100Km;         
    }
    public function getCantidadCombustible(): int
    {
        return $this->cantidadCombustible;         
    }
    public function repostarCombustible(int $gasolinaRepostada): string
    {
        $this->cantidadCombustible += $gasolinaRepostada;
        return "Repostaste $gasolinaRepostada, y ahora tienes $this->cantidadCombustible litros de gasolina";
    }
    public function viajar(int $distacia): string
    {
        $this->kilometrosRecorridos += $distacia;
        $gasolinaGastada = $this->litros100Km / 100 * $distacia;
        $this->cantidadCombustible -= $gasolinaGastada;

        return "Viajaste $distacia km, gastaste $gasolinaGastada litros de gasolina, te quedan $this->cantidadCombustible litros de gasolina y tu coche tiene $this->kilometrosRecorridos km recorridos";
    }
    

}