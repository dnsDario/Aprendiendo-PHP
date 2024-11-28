<?php

abstract class ElementoMultimedia
{
    public function __construct(protected int $duracion){}
    
    public abstract function getDuracion();
    public abstract function setDuracion(int $duracion);
}