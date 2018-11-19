<?php 

class VehiculoController extends Controller{


	public function __construct(){
		$this->vehiculoModelo = $this->modelo('cls_Vehiculo');
		$this->datos2 = [];
		
	}

	public function index(){

		$vehiculos = $this->vehiculoModelo->mostrar_listado_vehiculos();

		$datos = [
			'vehiculos' => $vehiculos
		];

		$this->vista('VehiculoView/mostrarVehiculosView', $datos);

	}

	public function nuevoVehiculo()
	{
		$this->vista('VehiculoView/FormVehiculo');
	}


	public function showEditForm()
	{
		$this->vista('VehiculoView/editForm');
	}

	public function agregarVehiculo()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			$datos = [
				'marca' => trim($_POST['txtMarca']),
				'modelo' => trim($_POST['txtMarca']),
				'matricula' => trim($_POST['txtMatricula']),
				'clase' => trim($_POST['txtClase']),
				'estado' => trim($_POST['rdbEstado']),
				'placa' => trim($_POST['txtPlaca']),
				'tarifa' => trim($_POST['txtValor_Tarifa'])
			];

			if ($this->vehiculoModelo->dar_Alta_Vehiculo($datos)) {
				redireccionar('/VehiculoController');
			}else{
				die('Algo Salió Mal');
			}

		}else{

			//Los datos quedaran VACIOS!!!
			$datos = [
				'marca' => '',
				'modelo' => '',
				'matricula' => '',
				'clase' => '',
				'estado' => '',
				'placa' => '',
				'tarifa' => ''
			];

			$this->vista('VehiculoView/FormVehiculo', $datos);
		}

			
	}

	public function eliminarVehiculo($id)
	{

		//Obtiene info de vehiculo desde modelo
		$vehiculo = $this->vehiculoModelo->obtener_VehiculoId($id);

		$datos = [
			'int_id_vehiculo' => $vehiculo->int_id_vehiculo,
			'marca' => $vehiculo->str_marca,
			'modelo' => $vehiculo->str_modelo,
			'matricula' => $vehiculo->str_matricula,
			'clase' => $vehiculo->str_clase,
			'estado' => $vehiculo->str_estado,
			'placa' => $vehiculo->str_placa,
			'tarifa' => $vehiculo->tarifa
		];

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			$datos = [
				'id_vehiculo' => $id
			];

			if ($this->vehiculoModelo->dar_Baja_Vehiculo($datos)) {
				redireccionar('/VehiculoController');
			}else{
				die('Algo Salió Mal');
			}
		}

		$this->vista('VehiculoView/deleteForm', $datos);	
	}

	public function editarVehiculo($id)
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			$datos = [
				'id_vehiculo' => $id,
				'marca' => trim($_POST['txtMarca']),
				'modelo' => trim($_POST['txtMarca']),
				'matricula' => trim($_POST['txtMatricula']),
				'clase' => trim($_POST['txtClase']),
				'estado' => trim($_POST['rdbEstado']),
				'placa' => trim($_POST['txtPlaca']),
				'tarifa' => trim($_POST['txtValor_Tarifa'])
			];

			if ($this->vehiculoModelo->modificar_datos_Vehiculo($datos)) {
				redireccionar('/VehiculoController');
			}else{
				die('Algo Salió Mal');
			}

		}else{

			//Obtiene info de vehiculo desde modelo
			$vehiculo = $this->vehiculoModelo->obtener_VehiculoId($id);

			//Los datos quedaran VACIOS!!!
			$datos = [
				'int_id_vehiculo' => $vehiculo->int_id_vehiculo,
				'marca' => $vehiculo->str_marca,
				'modelo' => $vehiculo->str_modelo,
				'matricula' => $vehiculo->str_matricula,
				'clase' => $vehiculo->str_clase,
				'estado' => $vehiculo->str_estado,
				'placa' => $vehiculo->str_placa,
				'tarifa' => $vehiculo->tarifa
			];

			$this->vista('VehiculoView/editForm', $datos);
		}
	}

	public function mostrarVehiculo()
	{

		$vehiculos = $this->vehiculoModelo->mostrar_listado_vehiculos();

		$datos = [
			'vehiculos' => $vehiculos
		];

		$this->vista('VehiculoView/mostrarVehiculosView', $datos);
		
	}


}

?>