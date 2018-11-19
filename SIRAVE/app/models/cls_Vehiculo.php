<?php

require_once ('../app/models/cls_Usuario_Identificado.php');
require_once ('../app/models/cls_Reserva.php');
require_once ('../app/models/cls_Gama.php');
require_once ('../app/models/cls_Administrador.php');
require_once ('../app/models/cls_Oferta.php');



/**
 * @author daniel
 * @version 1.0
 * @created 30-Oct.-2018 3:49:31 p. m.
 */

class cls_Vehiculo
{

	private $matricula;
	private $marca;
	private $modelo;
	private $clase;
	private $placa;
	private $estado;
	private $tarifa;
	private $m_cls_Administrador;

	private $db;


	public function __construct()
	{
		$this->db = new DataBase();	
	}

	public function obtenerVehiculos(){
		$this->db->query("SELECT * FROM tbl_vehiculo");
		return $this->db->registro();
	}


	public function dar_Alta_Vehiculo($datos)
	{
		
		$this->db->query('INSERT INTO tbl_vehiculo (str_marca, str_modelo, str_matricula, str_clase, str_estado, str_placa, tarifa) 
			VALUES (:marca,:modelo,:matricula,:clase,:estado,:placa,:tarifa);');

		//Vincular los Valores
		$this->db->bind(':marca', $datos['marca']);
		$this->db->bind(':modelo', $datos['modelo']);
		$this->db->bind(':matricula', $datos['matricula']);
		$this->db->bind(':clase', $datos['clase']);
		$this->db->bind(':estado', $datos['estado']);
		$this->db->bind(':placa', $datos['placa']);
		$this->db->bind(':tarifa', $datos['tarifa']);

		//Ejecutar Operacion
		return ($this->db->Ejecutar()) ? true : false;

	}

	public function dar_Baja_Vehiculo($datos)
	{
		$this->db->query('DELETE FROM tbl_vehiculo WHERE int_id_vehiculo = :id_vehiculo');

		//vinculamos los datos
		$this->db->bind(':id_vehiculo', $datos['id_vehiculo']);

		return ($this->db->Ejecutar()) ? true : false;
	}

	public function modificar_datos_Vehiculo($datos)
	{
		$this->db->query('UPDATE tbl_vehiculo SET str_marca=:marca, str_modelo=:modelo, 
		str_matricula=:matricula, str_clase=:clase, str_estado=:estado, str_placa=:placa,
		tarifa=:tarifa WHERE int_id_vehiculo = :id_vehiculo');

		$this->db->bind(':id_vehiculo', $datos['id_vehiculo']);
		$this->db->bind(':marca', $datos['marca']);
		$this->db->bind(':modelo', $datos['modelo']);
		$this->db->bind(':matricula', $datos['matricula']);
		$this->db->bind(':clase', $datos['clase']);
		$this->db->bind(':estado', $datos['estado']);
		$this->db->bind(':placa', $datos['placa']);
		$this->db->bind(':tarifa', $datos['tarifa']);
		
		return ($this->db->Ejecutar()) ? true : false;
	}

	public function mostrar_listado_vehiculos()
	{
		$this->db->query("SELECT * FROM tbl_vehiculo");
		$res = $this->db->registros();
		return $res;
	}

	public function obtener_VehiculoId($id)
	{
		$this->db->query('SELECT * FROM tbl_vehiculo WHERE int_id_vehiculo = :id');
		$this->db->bind(':id', $id);//validams que no haya inyecciones sql. Seguridad.
		$fila = $this->db->registro();
		return $fila;
	}

}
?>