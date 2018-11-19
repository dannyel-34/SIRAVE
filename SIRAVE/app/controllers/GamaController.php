<?php 

class GamaController extends Controller{

	public function __construct(){

		$this->vehiculoModelo = $this->modelo('cls_Gama');

	}

	public function index(){

		$this->vista('GamaView/FormGama');
	}

	public function mostrarGamas(){
		$this->vista('GamaView/mostrarGamas');
	}

	public function agregarGama(){
		
	}

	public function eliminarGama(){
		
	}

	public function actualizarGama(){
		
	}

	public function mostrarGama(){
	
	}


}




?>