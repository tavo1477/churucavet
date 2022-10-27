<?php 

require_once "conexion.php";

class ServicesModel{

	/*=============================================
	MOSTRAR SERVICIOS
	=============================================*/

	static public function mdlMostrarServicios($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;

	}	
	
}