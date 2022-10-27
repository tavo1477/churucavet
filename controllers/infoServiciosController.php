<?php 

class InfoServicesController{

	/*=============================================
	MOSTRAR SERVICIOS CON INNER JOIN
	=============================================*/

	static public function ctrMostrarInfoServicios($valor){

		$tabla1 = "servicios";
		$tabla2 = "infoServicios";

		$respuesta = ModeloInfoServices::mdlMostrarInfoServicios($tabla1, $tabla2, $valor);

		return $respuesta;

	}

}
