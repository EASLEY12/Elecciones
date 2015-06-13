<?php
class InscripcionP{
	private $id;
	private $nombreP;
	private $Rlegal;
	private $imagen;

	public function setId($id){
		$this->id = $id;
	}
	public function getId(){
		return $this->id;
	}
	public function setNombreP($nombreP){
		$this->nombreP = $nombreP;
	}
	public function getNombreP(){
		return $this->nombreP; 
	}
	public function setRlegal($Rlegal){
		$this->Rlegal= $Rlegal;
	}
	public function getRlegal(){
		return $this->Rlegal;
	}
	public function setImagen($imagen){
		$this->imagen=$imagen;
	}
	public function getImagen(){
		return $this->imagen;
	}
}
?>