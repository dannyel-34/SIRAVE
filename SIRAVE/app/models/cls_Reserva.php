<?php
require_once ('cls_Usuario_Identificado.php');


/**
 * @author daniel
 * @version 1.0
 * @created 30-Oct.-2018 3:49:31 p. m.
 */

class cls_Reserva
{

	private $id_reserva;
	private $codigo_reserva;
	private $fecha_entrega;
	private $fecha_devolucion;
	private $plan_reserva;
	private $dias_rentados;
	public $m_cls_Usuario_Identificado;

	function __construct($codigo_reserva, $fecha_entrega, $fecha_devolucion, 
		$plan_reserva, $dias_rentados, $m_cls_Usuario_Identificado)
	{
		$this->$codigo_reserva = $codigo_reserva;
		$this->$fecha_entrega = $fecha_entrega;
		$this->$fecha_devolucion = $fecha_devolucion;
		$this->$plan_reserva = $plan_reserva;
		$this->$dias_rentados = $dias_rentados;
		$this->$m_cls_Usuario_Identificado = $m_cls_Usuario_Identificado;
	}


	public function entregar_Vehiculo()
	{
	}

	public function graba_Reserva()
	{
	}

	/**
	 * 
	 * @param u_identificado
	 * @param u_vehiculo
	 */
	public function reservar_Vehiculo(Identficado $u_identificado, Vehiculo $u_vehiculo)
	{
	}

	public function cancelar_reserva()
	{
	}

	public function vehiculo_Entregado()
	{
	}

	/**
	 * 
	 * @param Fecha
	 */
	public function fecha_cancelacion_valida(date $Fecha)
	{
	}

	public function fecha_entrega_vehiculo_valida()
	{
	}

	public function devolver_vehiculo()
	{
	}

}
?>