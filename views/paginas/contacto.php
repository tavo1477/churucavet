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

<div class="contacto-app l-section">
    
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

            <div class="contacto-map">
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.7690599682974!2d-83.91079498574949!3d9.869732677972939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0df78f98e3da7%3A0x86711fa812723e74!2sChurucavet%20-%20Clinica%20Veterinaria%20y%20Hotel!5e0!3m2!1ses!2scr!4v1666884429662!5m2!1ses!2scr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>         

        </aside>

        <section class="contacto-formulario">

            <h3 class="contacto-formulario__title center-content">Formulario de contacto</h3>

            <form method="post">            
                 
                <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>
                 
                 <input type="email" id="email" name="email" placeholder="Tu email" required> 

                 <input type="text" id="telefono" name="telefono" placeholder="Tu teléfono" required>

                 <select name="servicios" id="servicios">

                    <option value="">Escoge tu servicio</option>
                    <option value="consulta-medica">Consulta Médica</option>
                    <option value="vacunacion">Vacunación</option>                     
                    <option value="odontologia">Odontología</option>
                    <option value="eutanasia">Eutanasia</option>
                    <option value="cremacion">Cremación</option>
                    <option value="peluqueria">Peluquería</option>
                    <option value="cirugias">Cirugías</option>
                    <option value="hospitalizacion">Hospitalización</option>
                    <option value="servicio-domicilio">Servicio a domicilio</option>
                    <option value="oxigenoterapia">OxigenoTerapia</option>


                 </select>

                 <textarea id="mensaje" name="mensaje" cols="40" rows="10" placeholder="Tu mensaje" required></textarea>

                 <div class="button-link center-content">
                   
                   <button type="submit" name="submit" class="button-primary">ENVIAR</button>  

                 </div>              

          </form>           
           
        </section>        

    </main>

</div>