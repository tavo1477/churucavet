<?php 

require_once "controllers/templateController.php";
require_once "controllers/routeController.php";

require_once "controllers/servicesController.php";
require_once "models/servicesModel.php";

require_once "controllers/infoServiciosController.php";
require_once "models/infoServiciosModel.php";

require_once "controllers/correoControlador.php";
require_once "extensiones/vendor/autoload.php";

$plantilla = new ControllerTemplate();
$plantilla -> ctrTemplate();