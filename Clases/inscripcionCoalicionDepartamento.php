<?php 
class inscripcionColalicion{
	private $id;
	private $nombreCoalicion;
	private $localidad;

	public function setId($id){
		$this->id=$id;
	} 
	public function getid(){
		return $this->id;
	}
	public function setNombrecoalicion($nombreCoalicion){
		$this->coalicion=$nombreCoalicion;
	}
	public function getNombrecoalicion(){
		return $this->coalicion;
	}
	public function setLocalidad($localidad){
		$this->localidad=$localidad;
	}
	public function getLocalidad(){
		return $this->localidad;
	}

}
?>
