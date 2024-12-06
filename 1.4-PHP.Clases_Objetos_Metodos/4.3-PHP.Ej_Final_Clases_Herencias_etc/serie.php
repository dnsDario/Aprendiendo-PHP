<?php

class Serie
{
	public function __construct(protected string $tituloSerie, protected string $genero, protected int $añoEstreno, protected array $temporadas){}

	public function addTemporada(Temporada $temporada){
		$this->temporadas[] = $temporada;
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

	/**
	 * Get the value of genero
	 */ 
	public function getGenero()
	{
		return $this->genero;
	}

	/**
	 * Set the value of genero
	 *
	 * @return  self
	 */ 
	public function setGenero($genero)
	{
		$this->genero = $genero;

		return $this;
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

		return $this;
	}

	/**
	 * Get the value of nTemporadas
	 */ 
	public function getTemporadas()
	{
		return $this->temporadas;
	}

	/**
	 * Set the value of nTemporadas
	 *
	 * @return  self
	 */ 
	public function setTemporadas($nTemporadas)
	{
		$this->temporadas = $nTemporadas;

		return $this;
	}
}
?>
