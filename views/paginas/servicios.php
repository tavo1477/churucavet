 <?php 

$route = ControllerRoute::ctrRoute();

$servicios = ServicesController::ctrMostrarServicios();

?>

 <!--=====================================
 SERVICES BANNER
 ======================================-->

 <div class="services-header">
    
     <div class="services-header__container l-container">
        
        <h3 class="services-header__title">Servicios</h3>

        <ul class="breadcrumb">

          <li class="breadcrumb-item"><a href="<?php echo $route?>">Inicio</a></li>
          <li>/</li>
          <li class="breadcrumb-item">Servicios</li>
          
        </ul>

     </div>

</div>

<!--=====================================
 MÁS SERVICIOS
 ======================================-->

<section class="servicios l-section">

    <h2 class="servicios-title center-content">Nuestros servicios</h2>

    <div class="servicios-container l-container">

        <?php foreach ($servicios as $key => $value): ?>   
       
            <div class="servicios-item">

                <div class="servicios-item__img">
                    
                    <img src="<?php echo $route.$value["imagen"] ?>" alt="">

                    <div class="descripcion-image">

                        <i class="fa-solid fa-paw"></i>

                    </div>                

                </div> 

                <a href="<?php echo $value["ruta"] ?>">

                    <h3 class="servicios-item__title"><?php echo $value["servicio"] ?></h3>

                </a>  

                <p class="servicios-item__description"><?php echo $value["descripcion"] ?></p>          

            </div>

        <?php endforeach ?>    

    </div>

</section>

<?php include "modulos/veterinarios.php"; ?>
