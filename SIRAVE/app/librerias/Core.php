<?php 

	/*
	Mapear la URL Ingresada en el navegador,
	1-Controlador,
	2-Metodo o (Funcion),
	3-Parametro,
	Ej./VehiculoController/Edit/2
	*/

	class Core{

		protected $controladorActual = 'PaginasController';
		protected $metodoActual = 'index';
		protected $parametros = [];

		//CONSTRUCTOR
		public function __construct(){
			//print_r($this->getUrl());
			
			$url = $this->getUrl();

			//buscar en Controllers si el controller existe.
			if (file_exists('../app/controllers/' . ucwords($url[0]).'.php')) {
				//Si Exisite se setea. como controlador por defecto.
				$this->controladorActual = ucwords($url[0]);

				//Unset Indice.
				//Liberar el controlador actual.
				unset($url[0]);
			}

			//requerimientos el controlador
			require_once '../app/controllers/' . $this->controladorActual . '.php';
			$this->controladorActual = new $this->controladorActual;

			if (isset($url[1])) {

				if (method_exists($this->controladorActual, $url[1])) {
					//Chequeamos el metodo.
					$this->metodoActual = $url[1];
					unset($url[1]);
				}

			}

			echo $this->metodoActual;

			//Obtener el parametro
			$this->parametros = $url ? array_values($url) : [];

			//LLamar callback paremetros array
			call_user_func_array(
				[$this->controladorActual,$this->metodoActual],
				$this->parametros
			);




		}

		public function getUrl(){
			//echo $_GET['url'];

			if(isset($_GET['url'])){
				$url = rtrim($_GET['url'], '/');//Corta los espacios (derecha) de la URL
				//utilizamos est funcion para sea interpreptado como una url.
				$url = filter_var($url,FILTER_SANITIZE_URL);
				$url = explode('/', $url);
				return $url;
			}
		}
	}


?>