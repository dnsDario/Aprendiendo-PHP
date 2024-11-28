<?php
require_once 'ElementoMultimedia.php';
require_once 'Temporada.php';

class Capitulo extends ElementoMultimedia
{
    public function __construct(protected int $nCapitulo, int $duracion, protected int $nTemporada, protected string $tituloSerie){
        parent::__construct($duracion);
    }

    public function getDuracion(): int
    {
        return $this->duracion;
    }

    public function setDuracion(int $duracion): void
    {
        $this->duracion = $duracion;
    }

    

    /**
     * Get the value of nCapitulo
     */ 
    public function getNCapitulo()
    {
        return $this->nCapitulo;
    }

    /**
     * Set the value of nCapitulo
     *
     * @return  self
     */ 
    public function setNCapitulo($nCapitulo)
    {
        $this->nCapitulo = $nCapitulo;

        return $this;
    }

    /**
     * Get the value of nTemporada
     */ 
    public function getNTemporada()
    {
        return $this->nTemporada;
    }

    /**
     * Set the value of nTemporada
     *
     * @return  self
     */ 
    public function setNTemporada($nTemporada)
    {
        $this->nTemporada = $nTemporada;

        return $this;
    }

    /**
     * Get the value of tituloSerie
     */ 
    public function getTituloSerie()
    {
        return $this->tituloSerie;
    }

    /**
     * Set the value of tituloSerie
     *
     * @return  self
     */ 
    public function setTituloSerie($tituloSerie)
    {
        $this->tituloSerie = $tituloSerie;

        return $this;
    }
}