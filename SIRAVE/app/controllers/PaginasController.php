<?php 

class PaginasController extends Controller{

	public function __construct(){
		$this->vehiculoModelo = $this->modelo('cls_Vehiculo');
	}

	public function index(){

		$vehiculos = $this->vehiculoModelo->mostrar_listado_vehiculos();

		$datos = [
			'vehiculos' => $vehiculos
		];

		$this->vista('paginas/inicio');
	}


	public function mostrar_FormContacto(){
		$this->vista('paginas/contacto');
	}

	public function mostrar_FormNosotros(){
		$this->vista('paginas/nosotros');
	}


}

?>