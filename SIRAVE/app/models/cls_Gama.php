<?php
require_once ('cls_Administrador.php');

/**
 * @author daniel
 * @version 1.0
 * @created 30-Oct.-2018 3:49:31 p. m.
 */
class cls_Gama
{

	private $id_gama;
	private $nombre_gama;
	private $descripcion_gama;
	private $precio;
	private $tipo_gama;

	private $db;
	

	function __construct()
	{
		$this->db = new DataBase();	
	}

	function __destruct()
	{
	}

	public function getId_Gama(){
		return $this->id_gama;
	}

	public function setId_Gama($id_gama){
		$this->id_gama = $id_gama;
	}

	public function getNombre_Gama(){
		return $this->nombre_gama;
	}

	public function setNombre_Gama($nombre_gama){
		$this->nombre_gama = $nombre_gama;
	}

	public function getDescripcion_Gama(){
		return $this->descripcion_gama;
	}

	public function setDescripcion_Gama($descripcion_gama){
		$this->descripcion_gama = $descripcion_gama;
	}

	public function getPrecio_Gama(){
		return $this->precio;
	}

	public function setPrecio_Gama($precio_gama){
		$this->precio = $precio_gama;
	}

	public function getTipo_Gama(){
		return $this->tipo_gama;
	}

	public function setTipo_Gama($tipo_gama){
		$this->tipo_gama = $tipo_gama;
	}

	public function dar_Alta_Gama(){

	}

	public function dar_Baja_Gama(){

	}

	public function modficar_datos_Gama(){

	}

	public function mostrar_listado_Gamas(){
		$this->db->query("SELECT * FROM tbl_gama");
		$filas = $this->db->los_registros();
		return $filas;
	}

}
?>