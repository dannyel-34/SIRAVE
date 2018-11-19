<?php
require_once ('cls_Administrador.php');

/**
 * @author daniel
 * @version 1.0
 * @created 30-Oct.-2018 3:49:31 p. m.
 */
class cls_Oferta
{

	private $id_oferta;
	private $precio;
	private $descripcion;
	private $nombre;
	private $m_cls_Administrador;

	private $db;

	function __construct(){
		$this->db = new Database();
	}

	public function getId_Oferta(){
		return $this->id_oferta;
	}

	public function setId_Oferta($id_oferta){
		$this->id_oferta = $id_oferta;
	}

	public function getNombre_Oferta(){
		return $this->nombre;
	}

	public function setNombre_Oferta($nombrea){
		$this->nombre = $nombre;
	}

	public function getDescripcion_Oferta(){
		return $this->descripcion;
	}

	public function setDescripcion_Oferta($descripcion){
		$this->descripcion = $descripcion;
	}

	public function dar_Alta_Oferta()
	{
	}

	public function dar_Baja_Oferta()
	{
	}

	public function modificar_Datos_Oferta()
	{
	}

	public function mostrar_Listado_Oferta()
	{
		$this->db->query("SELECT * FROM tbl_oferta");
		$filas = $this->db->los_registros();
		return $filas;
	}

}
?>