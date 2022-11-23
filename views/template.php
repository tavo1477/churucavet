<?php 

$route = ControllerRoute::ctrRoute();

?>

<!DOCTYPE html>

<html lang="es">

<head>
	
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Clínica Veterinaria Churucavet | San Rafael Oreamuno Cartago </title>

	<meta name="title" content="Clínica Veterinaria Churucavet | San Rafael Oreamuno Cartago">

	<meta name="description" content="Estamos ubicados en San Rafael de Oreamuno, Cartago, te ofrecemos servicios para el cuidado de tu mascota, con un excelente equipo de trabajo, conoce más.">

	<meta name="keywords" content="Clínica Veterinaria Churucavet, San Rafael Oreamuno Cartago, servicios veterinarios, vacunación, peluqueria, Servicio a domicilio, Cirugías, OxigenoTerapia">

	<meta http-equiv="content-language" content="es">

	<meta name=”robots” content=”index, follow”>

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $route ?>views/images/apple-icon-180x180.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $route ?>views/images/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $route ?>views/images/favicon-16x16.png" />

	<!--=====================================
	OPENGRAPH FACEBOOK
	======================================-->

	<meta property="og:type" content="business.business">
	<meta property="og:title" content="Clínica veterinaria Churucavet en Cartago, Costa Rica">
	<meta property="og:url" content="https://www.facebook.com/profile.php?id=100063596321136">
	<!-- <meta property="og:image" content="http://mediconsultingcr.com/facebook-image.png"> -->	
	<meta property="og:locale" content="es_CR" />

	<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "Veterinario",
		  "name": "Dr. Gustavo Andrés Canales Obando",
		  "image": "",
		  "@id": "",
		  "url": "https://churucavet.com",
		  "telephone": "8539-8094",
		  "address": {
		    "@type": "PostalAddress",
		    "streetAddress": "San Rafael",
		    "addressLocality": "Oreamuno",
		    "postalCode": "30701",
		    "addressCountry": "CR"
		  }  
		}
	</script>	

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

		if($_GET["ruta"] == "dr-gustavo-canales"){

			include "paginas/dr-gustavo-canales.php";
		
		}

		if($_GET["ruta"] == "osdranick-ramirez-groomista"){

			include "paginas/osdranick-ramirez-groomista.php";
		
		}

		if($_GET["ruta"] == "contacto"){

			include "paginas/contacto.php";
		
		}
		
	} else {

		include "paginas/inicio.php";

	}	

	/*=============================================
	Módulos fijos inferiores
	=============================================*/	

	include "paginas/modulos/footer.php";

	?>

 
	<!--=====================================
	JAVASCRIPT PERSONALIZADO
	======================================-->

	<script async src="<?php echo $route ?>views/js/menu.js"></script>
	<script async src="<?php echo $route ?>views/js/slider.js"></script>
	<script async src="<?php echo $route ?>views/js/conteo-clientes.js"></script>
	<script async src="<?php echo $route ?>views/js/galeria.js"></script>

</body>

</html>