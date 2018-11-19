<?php

//Clase conectarse a la Base de datos y Ejecutar consultas PDO
class Database{

	private $db_host = DB_HOST;
	private $db_usuario = DB_USUARIO;
	private $db_password = DB_PASSWORD;
	private $db_nombre = DB_NOMBRE;

	private $dbh; //database handler: Manejador de BD
	private $stmt;//statement
	private $error;

	public function __construct(){
		//configurar Conexion
		$dsn = 'mysql:host=' . $this->db_host . ';dbname=' .$this->db_nombre;

		$opciones = array(
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		);

		//Crear una Instancia de PDO
		try {
			$this->dbh = new PDO($dsn, $this->db_usuario, $this->db_password, $opciones);
			$this->dbh->exec('set names utf8');
		} catch (PDOException $e) {
			$this->error = $e->getMessage();
			print_r($this->error);
		}
	}


	public function query($sql){
		$this->stmt = $this->dbh->prepare($sql);
	}

	//PARAMETRIZAMOS la sentencia SQL,
	//De Acuerdo Si es de algun tipo de datos.
	public function bind($parametro, $valor, $tipo=null){
		if (is_null($tipo)) {
			switch (true) {
				case is_int($valor):
					$tipo = PDO::PARAM_INT;
				break;
				case is_bool($valor):
					$tipo = PDO::PARAM_BOOL;
				break;
				case is_null($valor):
					$tipo = PDO::PARAM_NULL;
				break;			
				default:
					$tipo = PDO::PARAM_STR;
				break;
			}
		}

		$this->stmt->bindValue($parametro, $valor, $tipo);
	}

	//Ejecutar consulta
	public function Ejecutar(){
		try {
			$this->stmt->execute();
			return $this->stmt->fetch(PDO::FETCH_OBJ);
		} catch (PDOException $e) {
			die ("Error: " .$e->getMessage());
			print_r($e->getLine());//Muestra la linea del error
		}
	}

	public function registros(){
		try {
			$this->stmt->execute();
			return $this->stmt->fetchAll(PDO::FETCH_OBJ);
		} catch (PDOException $e) {
			die ("Error: " .$e->getMessage());
			print_r($e->getLine());//Muestra la linea del error
		}
	}

	//Un solo registro.
	public function registro(){
		try {
			$this->stmt->execute();
			return $this->stmt->fetch(PDO::FETCH_OBJ);
		} catch (PDOException $e) {
			die ("Error: " .$e->getMessage());
			print_r($e->getLine());//Muestra la linea del error
		}
	}

	//OBtener la cantidad de filas con el metodo rowCount
	public function Operacion(){
		try {
			return $this->stmt->rowCount();
		} catch (PDOException $e) {
			
		}
	}



}