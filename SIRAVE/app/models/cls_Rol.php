<?php 

class cls_Rol{

	function __construct()
	{
		$this->db = new DataBase();	
	}

	public function dar_Alta_Rol($datos)
	{
		$this->db->query('INSERT INTO tbl_rol (nombre, descripcion, int_id_usuario) 
			VALUES (:nombre,:descripcion,:id_usuario)');

		//Vincular los Valores
		$this->db->bind(':nombre', $datos['nombre']);
		$this->db->bind(':descripcion', $datos['descripcion']);
		$this->db->bind(':id_usuario', $datos['id_usuario']);


		//Ejecutar Operacion
		return ($this->db->Ejecutar()) ? true : false;
	}

	public function mostrar_Roles()
	{
		$this->db->query('SELECT u.str_nombre, r.int_id_rol, r.nombre, r.descripcion, 
			r.int_id_usuario from tbl_usuario u INNER JOIN  tbl_rol r
			ON r.int_id_usuario = u.int_id_usuario');

		return $this->db->registros();
	}

	public function modificar_Datos_Rol($datos)
	{
		$this->db->query('UPDATE tbl_rol SET nombre=:nombre, descripcion=:descripcion, 
			int_id_usuario=:id_usuario WHERE int_id_rol = :id_rol');

		//Vincular los Valores
		$this->db->bind(':id_rol', $datos['id_rol']);
		$this->db->bind(':nombre', $datos['nombre']);
		$this->db->bind(':descripcion', $datos['descripcion']);
		$this->db->bind(':id_usuario', $datos['id_usuario']);

		//Ejecutar Operacion
		return ($this->db->Ejecutar()) ? true : false;
	}

	public function dar_Baja_Rol($datos)
	{
		$this->db->query('DELETE FROM tbl_rol WHERE int_id_rol = :id_rol');

		$this->db->bind(':id_rol', $datos['id_rol']);

		return ($this->db->Ejecutar()) ? true : false;
	}

	public function obtenerRolId($id_rol)
	{
		$this->db->query('SELECT * FROM tbl_rol WHERE int_id_rol = :id_rol');
		$this->db->bind(':id_rol', $id_rol);//validams que no haya inyecciones sql. Seguridad.
		return $this->db->registro();		
	}

	public function obtener_DatosUsuariosXRoles($id_rol)
	{
		$this->db->query('SELECT u.str_nombre, r.int_id_rol, r.nombre, r.descripcion, 
			r.int_id_usuario from tbl_usuario u INNER JOIN  tbl_rol r 
			ON r.int_id_usuario = u.int_id_usuario 
			WHERE int_id_rol = :id_rol');

		return $this->db->registros();
	}


}










?>