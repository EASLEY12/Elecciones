<?php
class inscripcionD{
	Private $id;
	Private $Dui;
	Private $Nombre;
	Private $Apellido;
	Private $Departamento;
	Private $Candidatura;
	Private $Cargo;
	Private $Partido;
	Private $Foto;


	public function setId($id){
		$this->id = $id;
	}
	public function getId(){
		return $this->id;
	}
	public function setDui($Dui){
		$this->dui = $Dui;
	}
	public function getDui(){
		return $this->dui;
	}
	public function setNombre($Nombre){
		$this->nombre = $Nombre;
	}
	public function getNombre(){
		return $this->nombre;
	}
	public function setApellido($Apellido){
		$this->apellido=$Apellido;
	}
	public function getApellido(){
		return $this->apellido;
	}
	public function setDepartamento($Departamento){
		$this->departamento= $Departamento;
	}
	public function getDepartamento(){
		return $this->departamento;
	}
	public function setCandidatura($Candidatura){
		$this->candidatura=$Candidatura;
	}
	public function getCandidatura(){
		return $this->candidatura;
	}
	public function setCargo($Cargo){
		$this->cargo=$Cargo;
	}
	public function getCargo(){
		return $this->cargo;
	}
	public function setPartido($Partido){
		$this->partido=$Partido;
	}
	public function getPartido(){
		return $this->partido;
	}
	public function setFoto($Foto){
		$this->foto=$Foto;
	}
	public function getFoto(){
		return $this->foto;
	}
}
?>