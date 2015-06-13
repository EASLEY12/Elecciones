<?php

class InscripcionP{
	private $id;
	private $tipo1;
	private $tipo2;
	private $tipo3;
	private $ano;

	public function setId($id){
		$this->id = $id;
	}
	public function getId(){
		return $this->id;
	}
	public function settipo1($tipo1){
		$this->tipo1 = $tipo1;
	}
	public function gettipo1(){
		return $this->tipo1; 
	}
	public function settipo2($tipo2){
		$this->tipo2= $tipo2;
	}
	public function gettipo2(){
		return $this->tipo2;
	}
	public function settipo3($tipo3){
		$this->tipo3=$tipo3;
	}
	public function gettipo3(){
		return $this->tipo3;
	}
	public function setano($ano){
		$this->ano=$ano;
	}
	public function getano(){
		return $this->ano;
	}
}

?>