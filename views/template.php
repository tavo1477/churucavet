<?php 

$route = ControllerRoute::ctrRoute();

?>

<!DOCTYPE html>

<html lang="es">

<head>
	
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Churucavet - Clínica veterinaria y hotel</title>

	<!--=====================================
    HOJAS DE ESTILO PERSONALIZADAS
    ======================================-->

	<link rel="stylesheet" href="<?php echo $route ?>views/assets/css/styles.css" async>

	<!--=====================================
	PLUGINS DE CSS
	======================================-->

	<script src="https://kit.fontawesome.com/ac222f5566.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="<?php echo $route ?>views/assets/css/plugins/jquery.fancybox.min.css">

	<!--=====================================
	PLUGINS DE JS
	======================================-->

   	<script async src="<?php echo $route ?>views/js/plugins/jquery.min.js"></script>  

   	<script async src="<?php echo $route ?>views/js/plugins/jquery.fancybox.min.js"></script>
   	
   	<!--https://docs.muuri.dev/getting-started.html -->
   	<script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>
	<script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>  

<body>

	<?php
	
	/*=============================================
	Módulos fijos superiores
	=============================================*/		

	include "paginas/modulos/top.php";

	/*=============================================
	Navegar entre páginas
	=============================================*/	

	if(isset($_GET["ruta"])){

		$rutasServicios = ServicesController::ctrMostrarServicios();

		foreach ($rutasServicios as $key => $value) {
			
			if ($_GET["ruta"] == $value["ruta"]) {
				
				include "paginas/modulos/info-servicios.php";

			}

		}

		if ($_GET["ruta"] == "acerca-de-la-clinica") {
			
			include "paginas/acerca-de-la-clinica.php";

		}

		if($_GET["ruta"] == "servicios"){

			include "paginas/servicios.php";
		
		}		

		if($_GET["ruta"] == "contacto"){

			include "paginas/contacto.php";
		
		}

	} else {

		include "paginas/inicio.php";
	}

	// if (isset($_GET["ruta"])) {

	// 	if ($_GET["ruta"] == "inicio" ||
	//         $_GET["ruta"] == "acerca-de-la-clinica" ||
	//         $_GET["ruta"] == "servicios" ||
	//         $_GET["ruta"] == "promociones" ||	              
	//         $_GET["ruta"] == "contacto"){

	// 		include "paginas/".$_GET["ruta"].".php";

	// 	} else {

	// 		include "paginas/404.php";
		
	// 	}

	// } else {

	// 	include "paginas/inicio.php";
		
	// }

	/*=============================================
	Módulos fijos inferiores
	=============================================*/	

	include "paginas/modulos/footer.php";

	?>

 
	<!--=====================================
	JAVASCRIPT PERSONALIZADO
	======================================-->

	<script async src="<?php echo $route ?>views/js/slider.js"></script>
	<script async src="<?php echo $route ?>views/js/conteo-clientes.js"></script>
	<script async src="<?php echo $route ?>views/js/galeria.js"></script>

</body>

</html>