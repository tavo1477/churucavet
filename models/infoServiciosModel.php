<?php 

require_once "conexion.php";

class ModeloInfoServices{

	/*=============================================
	MOSTRAR SERVICIOS CON INNER JOIN
	=============================================*/

	static public function mdlMostrarInfoServicios($tabla1, $tabla2, $valor){

		$stmt = Conexion::conectar()->prepare("SELECT $tabla1.*, $tabla2.* FROM $tabla1 INNER JOIN $tabla2 ON $tabla1.id = $tabla2.tipo_s WHERE ruta = :ruta");

		$stmt -> bindParam(":ruta", $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;

	}
}