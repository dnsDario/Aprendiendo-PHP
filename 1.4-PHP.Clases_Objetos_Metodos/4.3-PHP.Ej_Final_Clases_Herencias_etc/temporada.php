<?php
require_once 'Serie.php';

class Temporada extends Serie
{
	public function __construct(protected int $nTemporada, protected array $capitulos, protected int $añoEstreno, string $tituloSerie){
		parent::__construct($tituloSerie);
	}

	public function addCapitulo(Capitulo $capitulo){
		$this->capitulos[] = $capitulo;
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
	}

	/**
	 * Get the value of capitulos
	 */ 
	public function getCapitulos()
	{
		return $this->capitulos;
	}

	/**
	 * Set the value of capitulos
	 *
	 * @return  self
	 */ 
	public function setCapitulos($capitulos)
	{
		$this->capitulos = $capitulos;
	}

	/**
	 * Get the value of añoEstreno
	 */ 
	public function getAñoEstreno()
	{
		return $this->añoEstreno;
	}

	/**
	 * Set the value of añoEstreno
	 *
	 * @return  self
	 */ 
	public function setAñoEstreno($añoEstreno)
	{
		$this->añoEstreno = $añoEstreno;
	}    
    
}
