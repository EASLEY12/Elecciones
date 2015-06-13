<?php
class inscripcionPresidente{
	private $id;
	private $dui;
	private $nombre;
	private $apellido;
	private $cargo;
	private $partido;
	private $candidatura;

	public function setId($id){
		$this->id = $id;
	} 
	public function getId(){
		return $this->id;
	}
	public function setDui($dui){
		$this->dui = $dui;
	}
	public function getDui(){
		return $this->dui;
	}
	public function setNombre($nombre){
		$this->nombre= $nombre;
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
	 public function setCargo($cargo){
	 	$this->cargo= $cargo;
	 }
	 public function getCargo(){
	 	return $this->cargo;
	 }
	 public function setPartido($partido){
	 	$this->partido=$partido;
	 }
	 public function getPartido(){
	 	return $this->partido;
	 }
	 public function setCandidatura($candidatura){
	 	$this->candidatura=$candidatura;
	 }
	 public function getCandidatura(){
	 	return$this->candidatura;
	 }


}
?>