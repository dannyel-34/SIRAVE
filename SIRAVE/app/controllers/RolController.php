<?php 


class RolController extends Controller{

	public function __construct()
	{
		$this->usuarioModelo = $this->modelo('cls_Usuario');
		$this->rolModelo = $this->modelo('cls_Rol');
	}

	public function index()
	{

		$usuarios = $this->usuarioModelo->mostrar_registros_usuarios();

		$datos = [
			'usuarios' => $usuarios
		];

		$this->vista('RolView/rolForm', $datos);

	}

	public function agregarRol()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			$datos = [
				'nombre' => trim($_POST['txtNombre']),
				'descripcion' => trim($_POST['descripcion']),
				'id_usuario' => trim($_POST['cbUsuario'])
			];

			if ($this->rolModelo->dar_Alta_Rol($datos)) {
				redireccionar('/RolController/listar_Roles');
			}else{
				die('Algo Salió Mal');
			}

		}else{

			//Los datos quedaran VACIOS!!!
			$datos = [
				'nombre' => '',
				'descripcion' => '',
				'id_usuario' => ''
			];

			$this->vista('RolView/rolForm', $datos);
		}

	}

	public function editar($id)
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			$datos = [
				'id_rol' => $id,
				'nombre' => trim($_POST['txtNombre']),
				'descripcion' => trim($_POST['descripcion']),
				'id_usuario' => trim($_POST['cbUsuario'])
			];

			if ($this->rolModelo->modificar_Datos_Rol($datos)) {
				redireccionar('/RolController/listar_Roles');
			}else{
				die('Algo Salió Mal');
			}

		}else{

			$rol = $this->rolModelo->obtenerRolId($id);

			$usuarios = $this->usuarioModelo->mostrar_registros_usuarios();

			//Los datos quedaran VACIOS!!!
			$datos = [
				'id_rol' => $rol->int_id_rol,
				'nombre' => $rol->nombre,
				'descripcion' => $rol->descripcion,
				'usuarios' => $usuarios
			];

			$this->vista('RolView/editRolForm', $datos);
		}


	}


	public function eliminar($id)
	{
		$rol = $this->rolModelo->obtenerRolId($id);

		$usuarios = $this->usuarioModelo->mostrar_registros_usuarios();

		$datos = [
			'id_rol' => $rol->int_id_rol,
			'nombre' => $rol->nombre,
			'descripcion' => $rol->descripcion,
			'usuarios' => $usuarios
		];

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			$datos = [
				'id_rol' => $id
			];

			if ($this->rolModelo->dar_Baja_Rol($datos)) {
				redireccionar('/RolController/listar_Roles');
			}else{
				die('Algo Salió Mal');
			}
		}

		$this->vista('RolView/deleteRolForm', $datos);
	}

	public function listar_Roles()
	{

		$roles = $this->rolModelo->mostrar_Roles();

		$datos = [
			'roles' => $roles
		];

		$this->vista('RolView/mostrarRolesForm', $datos);
	}

}