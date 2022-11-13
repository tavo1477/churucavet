<?php

    $valor = $_GET["ruta"];

     $infoServicios = InfoServicesController::ctrMostrarInfoServicios($valor);
   
?>

<!--=====================================
 HEADER BANNER
 ======================================-->

 <div class="about-header">
    
     <div class="about-header__container l-container">
        
        <h3 class="about-header__title"><?php echo $value["servicio"] ?></h3>

        <ul class="breadcrumb">

          <li class="breadcrumb-item"><a href="<?php echo $route?>">Inicio</a></li>
          <li>/</li>
          <li class="breadcrumb-item"><a href="servicios">Servicios</a></li>
          <li>/</li>
          <li class="breadcrumb-item"><?php echo $value["servicio"] ?></li>

          
        </ul>

     </div>

</div>

<!--=====================================
SERVICIO
======================================-->

 <div class="infoservicios-app l-section">
    
    <main class="infoservicios-main l-container">
        
        <aside class="infoservices-aside">

            <h3 class="infoservices-aside__title">Otros servicios</h3>

            <ul class="infoservices-list">

                <?php 

                    $servicios = ServicesController::ctrMostrarServicios();

                 ?>

                 <?php foreach ($servicios as $key => $value): ?>

                    <?php if ($_GET["ruta"] != $value["ruta"]): ?>

                        <li class="infoservices-list__item">
                    
                            <a href="<?php echo $route.$value["ruta"];  ?>"><?php echo $value["servicio"] ?></a>

                        </li>

                    <?php endif ?>  
                     
                 <?php endforeach ?>           
         
            </ul>

            <div class="infoservices-promocion">
                
                <div class="services-promocion__img">
                    
                    <img src="<?php echo $route ?>views/images/promociones/promocion1.jpg" alt="Promociones">

                </div>

            </div>

        </aside>

        <section class="infoservices-descripcion">           

             <div class="infoservices-descripcion__img">
                
                <img src="<?php echo $route.$infoServicios[0]["imagen_s"] ?>" alt="<?php echo $infoServicios[0]["servicio"] ?>">

                <figcaption>

                    <h2 class="descripcion__img"><?php echo $infoServicios[0]["servicio"] ?></h2> 

                    <p class="descripcion_icon"><i class="fa-solid fa-paw"></i></p>                 
                 
                </figcaption>           

             </div> 

            <?php echo $infoServicios[0]["descripcion_s"]  ?> 

                            
            

        </section>

    </main>    
    
 </div>