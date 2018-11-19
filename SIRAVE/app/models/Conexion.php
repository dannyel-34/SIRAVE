<?php 

class Conexion{


	public static function Conectar(){

		try {
		
			$conexion = new PDO('mysql:host=localhost;dbname=sirave', 'root', '');

			$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$conexion->exec("SET CHARACTER SET UTF8");
			
			(!isset($conn)) ? print_r("Conectado Exitosamente") : 
					print_r("Error al Conectarse");

		} catch (PDOException $e) {
			die("Error en la conexion: " .$e->getMessage());
			print_r($e->getLine());//Muestra la linea del error
		}

		return $conexion;

	}

	private function db_close($conexion){

		try {
			$this->conexion->close();
		} catch (PDOException $e) {
			print_r('Error: ' .$e->getMessage());
		}

	}

	public function Ejecutar($sql, $conexion){

		try {
			$this->conexion->Conectar();
			$this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$num = $this->conexion->exec($sql);
			$this->db_close($conexion);
			return $num;
		} catch (PDOException $e) {
			die ("Error: " .$e->getMessage());
			print_r($e->getLine());//Muestra la linea del error
		}
	}

	public function Leer($sql, $conexion){
		try {
			$this->conexion->Conectar();
			$this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmt = $this->conexion->query($sql);
			$this->db_close($conexion);
			return $stmt;
		} catch (Exception $e) {
			die ("Error: " .$e->getMessage());
			print_r($e->getLine());//Muestra la linea del error
		}
	}






}


?>