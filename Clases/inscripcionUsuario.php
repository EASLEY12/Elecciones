<?php
class InsUsuario{
	private $id;
	private $nombre;
	private $apellido;
	private $nombreusuario;
	private $clave;
	private $fecha;
	private $tipo;

	public function setId($id){
		$this->id=$id;
	}
	public function getId(){
		return $this->id;
	}
	public function setNombre($nombre){
		$this->nombre=$nombre;
	}
	public function getNombre(){
		return $this->nombre;
	}
	public function setApellido($apellido){
		$this->apellido=$apellido;
	}
	public function getApellido(){
		return $this->apellido;
	}
	public function setNombreUsuario($nombreusuario){
		$this->nombreusuario=$nombreusuario;
	}
	public function getNombreUsuario(){
		return $this->nombreusuario;
	}
	public function setClave($clave){
		$this->clave=$clave;
	}
	public function getClave(){
		return $this->clave;
	}
	public function setFecha($fecha){
		$this->fecha=$fecha;
	}
	public function getFecha(){
		return $this->fecha;
	}
	public function settipo($tipo){
		$this->tipo=$tipo;
	}
	public function gettipo(){
		return $this->tipo;
	}
}
?>