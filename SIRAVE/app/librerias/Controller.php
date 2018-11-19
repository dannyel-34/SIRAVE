<?php 

class Controller{

	//Controlador Principla
	//Se encarga de poder cargar los Modelos y las Vistas

	//cargar modelo
	public function modelo($model){
		//carga
		require_once '../app/models/' .$model . '.php';
		//Instanciar el Modelo.
		return new $model();
	}

	//cargar vista
	public function vista($vista, $datos=[]){
		
		//chequeaos si el archivo vista NO Existe.
		if (!file_exists('../app/views/' .$vista . '.php')) {
			die('La Vista No Existe');
		}

		require_once '../app/views/' .$vista . '.php';
	}


}


?>