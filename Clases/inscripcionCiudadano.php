<?php
class Ciudadano{
	private $id;
	private $dui;
	private $apellidos;
	private $nombres;
	private $imagen;
	private $fecha;
	private $direccion;
	private $departamento;
	private $municipio;
	private $genero;

	public function setId($id){
		$this->id=$id;
	}
	public function getId(){
		return $this->id;
	}
	public function setDui($dui){
		$this->dui=$dui;
	}
	public function getDui(){
		return $this->dui;
	}
	public function setApellidos($apellidos){
		$this->apellidos=$apellidos;
	}
	public function getApellidos(){
		return $this->apellidos;
	}
	public function setNombres($nombres){
		$this->nombres=$nombres;
	}
	public function getNombres(){
		return $this->nombres;
	}
	public function setImagen($imagen){
		$this->imagen=$imagen;
	}
	public function getImagen(){
		return $this->imagen;
	}
	public function setFecha($fecha){
		$this->fecha=$fecha;
	}
	public function getFecha(){
		return $this->fecha;
	}
	public function setDireccion($direccion){
		$this->direccion=$direccion;
	}
	public function getDireccion(){
		return $this->direccion;
	}
	public function setDepartamento($departamento){
		$this->departamento=$departamento;
	}
	public function getDepartamento(){
		return $this->departamento;
	}
	public function setMunicipio($municipio){
		$this->municipio=$municipio;
	}
	public function getMunicipio(){
		return $this->municipio;
	}
	public function setgenero($genero){
		$this->genero=$genero;
	}
	public function getgenero(){
		return $this->genero;
	}

}
?>