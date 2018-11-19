<?php 

/**
 * @author: Daniel P.Calle
 */

class UsuarioController extends Controller
{
	
	function __construct()
	{
		$this->usuarioModelo = $this->modelo('cls_Usuario');
		$this->errores = '';
		$this->enviado = '';
	}

	public function index()
	{
		$this->vista('UsuarioView/LoginForm');
	}


	public function mostrarFormRegistroUsuario()
	{
		$this->vista('UsuarioView/usuarioForm');
	}

	public function agregarUsuario()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			$datos = [
				'nombre' => strtolower(trim($_POST['txtNombre'])),
				'apellido' => strtolower(trim($_POST['txtApellido'])),
				'email' => trim($_POST['txtEmail']),
				'telefono' => trim($_POST['txtTelefono']),
				'password' => password_hash(trim($_POST['pwdPassword']), PASSWORD_BCRYPT)
			];

			if ($this->usuarioModelo->dar_Alta_Usuario($datos)) {
				redireccionar('/UsuarioController/listadoUsuarios');
			}else{
				die('Algo Salió Mal');
			}

		}else{

			//Los datos quedaran VACIOS!!!
			$datos = [
				'nombre' => '',
				'apellido' => '',
				'email' => '',
				'telefono' => '',
				'password' => ''
			];

			$this->vista('UsuarioView/usuarioForm', $datos);
		}

	}

	public function listadoUsuarios(){
		$usuarios = $this->usuarioModelo->mostrar_registros_usuarios();

		$datos = [
			'usuarios' => $usuarios
		];

		$this->vista('UsuarioView/mostrarUsuariosForm', $datos);
	}

	public function eliminarUsuario($id)
	{
		//Obtiene info de vehiculo desde modelo
		$usuario = $this->usuarioModelo->obtenerUsuarioId($id);

		$datos = [
			'id_usuario' => $usuario->int_id_usuario,
			'nombre' => $usuario->str_nombre,
			'apellido' => $usuario->str_apellido,
			'email' => $usuario->str_email,
			'telefono' => $usuario->str_telefono,
			'password' => $usuario->str_password
		];

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			$datos = [
				'id_usuario' => $id
			];

			if ($this->usuarioModelo->dar_Baja_Usuario($datos)) {
				redireccionar('/UsuarioController/listadoUsuarios');
			}else{
				die('Algo Salió Mal');
			}
		}

		$this->vista('UsuarioView/deleteUsuarioForm', $datos);
	}

	public function editarUsuario($id)
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			$datos = [
				'id_usuario' => $id,
				'nombre' => strtolower(trim($_POST['txtNombre'])),
				'apellido' => strtolower(trim($_POST['txtApellido'])),
				'email' => trim($_POST['txtEmail']),
				'telefono' => trim($_POST['txtTelefono']),
				'password' => password_hash(trim($_POST['pwdPassword']), PASSWORD_BCRYPT)//Encriptamos
			];

			if ($this->usuarioModelo->modificar_Datos_Usuario($datos)) {
				redireccionar('/UsuarioController/listadoUsuarios');
			}else{
				die('Algo Salió Mal');
			}

		}else{

			$usuario = $this->usuarioModelo->obtenerUsuarioId($id);

			//Los datos quedaran VACIOS!!!
			$datos = [
				'id_usuario' => $usuario->int_id_usuario,
				'nombre' => $usuario->str_nombre,
				'apellido' => $usuario->str_apellido,
				'email' => $usuario->str_email,
				'telefono' => $usuario->str_telefono,
				'password' => $usuario->str_password
			];

			$this->vista('UsuarioView/editUsuarioForm', $datos);
		}

	}
}





?>