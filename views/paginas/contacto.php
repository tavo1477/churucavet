 <!--=====================================
 HEADER BANNER
 ======================================-->

 <div class="about-header">
    
     <div class="about-header__container l-container">
        
        <h3 class="about-header__title">Contacto</h3>

        <ul class="breadcrumb">

          <li class="breadcrumb-item"><a href="<?php echo $route?>">Inicio</a></li>
          <li>/</li>
          <li class="breadcrumb-item">Contacto</li>
          
        </ul>

     </div>

</div>

 <!--=====================================
 CONTACTO
 ======================================-->

 <div class="contacto-map">
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.7690599682974!2d-83.91079498574949!3d9.869732677972939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0df78f98e3da7%3A0x86711fa812723e74!2sChurucavet%20-%20Clinica%20Veterinaria%20y%20Hotel!5e0!3m2!1ses!2scr!4v1666884429662!5m2!1ses!2scr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

 </div> 

<div class="contacto-app">
    
    <main class="contacto-main">

        <aside class="contacto-horario">            

            <h3 class="contacto-horario__title center-content">Ponte en contacto con nosotros</h3>

            <div class="contacto-info center-content">

              <div class="contacto-info__item">
                  
                  <i class="fa-solid fa-location-dot"></i>

                  <h3 class="contacto-info__item--desc"> 400 oeste del parque de San Rafael de Oreamuno, Cartago</h3>

              </div> 

              <div class="contacto-info__item">
                  
                  <i class="fa-solid fa-phone"></i>

                  <h3 class="contacto-info__item--desc">(+506) 2551-6685</h3>

                  <h3 class="contacto-info__item--desc">8539-8094</h3>

              </div> 

              <div class="contacto-info__item">
                  
                  <i class="fa-regular fa-envelope"></i>

                  <h3 class="contacto-info__item--desc">info@churucavet.com</h3>

                  <h3 class="contacto-info__item--desc">https://churucavet.com</h3>

              </div>                 

            </div> 

            <div class="horario-atencion">
                
                <h3 class="horario-atencion__title center-content">Horario de atención</h3>

                <div class="horario-atencion__block">

                    <div class="horario-atencion__block--item">
                        
                        <i class="fa-regular fa-clock"></i>
                        <span class="block-time">Lunes - Sábado : 9 A.M. - 5 P.M.</span>

                    </div>

                    <div class="horario-atencion__block--item">
                        
                        <i class="fa-regular fa-clock"></i>
                        <span class="block-time">Domingo: Cerrado</span>

                    </div>                                  

                </div>

            </div> 

            <div class="redes-sociales">
                
                <h3 class="redes-sociales__title center-content">Síganos en nuestras redes sociales</h3>

                <div class="redes-sociales__block">
                    
                    <div class="redes-sociales__block--item">
                        
                        <i class="fa-brands fa-facebook-f"></i>
                        <a href="https://www.facebook.com/profile.php?id=100063596321136" target="_blank"><span class="block-red">Facebook</span></a>

                    </div>

                    <div class="redes-sociales__block--item">
                        
                        <i class="fa-brands fa-instagram"></i>
                        <a href="https://www.instagram.com/churucavetclinica_/" target="_blank"><span class="block-red">Instagram</span></a>

                    </div>


                </div>

            </div>                   

        </aside>

        <section class="contacto-formulario">

            <h3 class="contacto-formulario__title center-content">Formulario de contacto</h3>

            <form method="post">            
                 
                <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>
                 
                 <input type="email" id="email" name="email" placeholder="Tu email" required> 

                 <input type="text" id="telefono" name="telefono" placeholder="Tu teléfono" required>

                 <select name="servicios" id="servicios" required>

                    <option value="">Escoge tu servicio</option>
                    <option value="Consulta Médica">Consulta Médica</option>
                    <option value="Vacunación">Vacunación</option>                     
                    <option value="Odontología">Odontología</option>
                    <option value="Eutanasia">Eutanasia</option>
                    <option value="Cremación">Cremación</option>
                    <option value="Peluquería">Peluquería</option>
                    <option value="Cirugías">Cirugías</option>
                    <option value="Hospitalización">Hospitalización</option>
                    <option value="Servicio a domicilio">Servicio a domicilio</option>
                    <option value="OxigenoTerapia">OxigenoTerapia</option>


                 </select>

                 <textarea id="mensaje" name="mensaje" cols="40" rows="10" placeholder="Tu mensaje" required></textarea>             
                 <div class="button-link center-content">
                   
                   <button type="submit" name="submit" class="button-primary">ENVIAR</button>  

                 </div>   

                 <?php 

                $enviarCorreo = CorreoControlador::ctrEnviarCorreo();

                if ($enviarCorreo != "") {
                    
                    echo '<script>
                        if ( window.history.replaceState ) {
                            window.history.replaceState( null, null, window.location.href );
                        }
                    </script>';

                    if($enviarCorreo == "ok"){

                        echo '<script>
                            notie.alert({
                                type: 1,
                                text: "El mensaje ha sido enviado correctamente, espere muy pronto una respuesta",
                                time: 10
                            })
                        </script>';

                    }

                    if($enviarCorreo == "error"){

                        echo '<script>
                            notie.alert({
                                type: 3,
                                text: "No se pudo enviar el mensaje, inténtelo nuevamente",
                                time: 10
                            })
                        </script>';

                    }

                    if ($enviarCorreo == "error-captcha") {
                    
                    echo '<script>

                        notie.alert({
                            type: 3,
                            text: "Captcha inválido, inténtalo de nuevo",
                            time: 10

                        })

                    </script>';
                }

                    if($enviarCorreo == "error-sintaxis"){

                        echo '<script>
                            notie.alert({
                                type: 3,
                                text: "Error, no se permiten caracteres especiales, inténtelo nuevamente",
                                time: 10
                            })
                        </script>';

                    }

                }

             ?>                     

          </form>            
           
        </section>        

    </main>

</div>