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

	<link rel="stylesheet" href="<?php echo $route ?>views/assets/css/plugins/notie.min.css">

	<!-- https://animate.style -->
	<link rel="stylesheet" href="<?php echo $route ?>views/assets/css/plugins/animate.css"  />

	<!--=====================================
	PLUGINS DE JS
	======================================-->

   	<script async src="<?php echo $route ?>views/js/plugins/jquery.min.js"></script>  

   	<script async src="<?php echo $route ?>views/js/plugins/jquery.fancybox.min.js"></script>

   	<script async src="<?php echo $route ?>views/js/plugins/notie.min.js"></script>

   	<script async src="<?php echo $route ?>views/js/plugins/wow.min.js"></script>

   	 <script>
      new WOW().init();
      </script>  

  </head> 

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