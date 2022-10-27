<?php 

class ServicesController{

	/*=============================================
	MOSTRAR SERVICIOS
	=============================================*/

	static public function ctrMostrarServicios(){

		$tabla = "servicios";

		$respuesta = ServicesModel::mdlMostrarServicios($tabla);

		return $respuesta;

	}	

}