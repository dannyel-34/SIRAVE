<?php

/**
 * @author daniel
 * @version 1.0
 * @created 30-Oct.-2018 3:49:31 p. m.
 */

class cls_Usuario
{

	private $id_usuario;
	private $password;
	private $telefono;
	private $email;
	private $nombre;
	private $apellido;

	function __construct()
	{
		$this->db = new DataBase();	
	}

	public function dar_Alta_Usuario($datos)
	{
		$this->db->query('INSERT INTO tbl_usuario (str_nombre, str_apellido, str_email, 
			str_password, str_telefono) VALUES (:nombre,:apellido,:email,:password,:telefono)');

		//Vincular los Valores
		$this->db->bind(':nombre', $datos['nombre']);
		$this->db->bind(':apellido', $datos['apellido']);
		$this->db->bind(':email', $datos['email']);
		$this->db->bind(':password', $datos['password']);
		$this->db->bind(':telefono', $datos['telefono']);

		//Ejecutar Operacion
		return ($this->db->Ejecutar()) ? true : false;
	}

	

	public function mostrar_registros_usuarios()
	{
		$this->db->query("SELECT * FROM tbl_usuario");
		return $this->db->registros();
	}

	public function modificar_Datos_Usuario($datos)
	{
		$this->db->query('UPDATE tbl_usuario SET str_nombre=:nombre, str_apellido=:apellido, 
			str_email=:email, str_password=:password, str_telefono=:telefono 
			WHERE int_id_usuario = :id_usuario');

		//Vincular los Valores
		$this->db->bind(':id_usuario', $datos['id_usuario']);
		$this->db->bind(':nombre', $datos['nombre']);
		$this->db->bind(':apellido', $datos['apellido']);
		$this->db->bind(':email', $datos['email']);
		$this->db->bind(':password', $datos['password']);
		$this->db->bind(':telefono', $datos['telefono']);

		//Ejecutar Operacion
		return ($this->db->Ejecutar()) ? true : false;
	}

	public function dar_Baja_Usuario($datos)
	{
		$this->db->query('DELETE FROM tbl_usuario WHERE int_id_usuario = :id_usuario');

		$this->db->bind(':id_usuario', $datos['id_usuario']);

		return ($this->db->Ejecutar()) ? true : false;
	}

	public function obtenerUsuarioId($id_usuario)
	{
		$this->db->query('SELECT * FROM tbl_usuario WHERE int_id_usuario = :id_usuario');
		$this->db->bind(':id_usuario', $id_usuario);//validams que no haya inyecciones sql. Seguridad.
		return $this->db->registro();		
	}

	public function identificacion_usuario()
	{
	}

	public function consultar_flota_vehiculos()
	{
	}

	public function registro_nuevo_usuario()
	{

	}

}
?>