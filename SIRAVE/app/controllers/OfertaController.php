<?php 

/**
 * 
 */

class OfertaController extends Controller
{
	
	function __construct()
	{
		$this->vehiculoModelo = $this->modelo('cls_Oferta');
	}

	public function index()
	{
		$this->vista('OfertaView/FormOferta');
	}

	public function mostrarOfertas(){
		$this->vista('OfertaView/mostrarOfertas');
	}
}





?>