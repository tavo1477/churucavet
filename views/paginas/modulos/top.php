<!--=====================================
HEADER
 ======================================-->

<nav>
		<div class="logo">

			<img src="<?php echo $route?>views/images/logo-churucavet.png" alt="Logo Churucavet">

		</div>

		<button type="button" class="btn-hamburger" data-action="nav-toggle">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</button>
		<ul class="nav-menu">

			<li class="nav-item">

				<a href="<?php echo $route?>">Inicio</a>

			</li>


			<li class="nav-item">

				<a href="acerca-de-la-clinica">Acerca de la clínica</a>

			</li>

			<li class="nav-item">

				<a href="servicios">Servicios</a>

			</li>

			<li class="nav-item dropdown">

				<a href="#" data-action="dropdown-toggle">Descargables <i class="fa-solid fa-chevron-down"></i></a>

				<div class="dropdown-menu">

					<a class="dropdown-item" href="#">Cuidados PostOperatorios </a>

					
				</div>

			</li>

			<li class="nav-item">

				<a href="contacto">Contacto</a>

			</li>

		</ul>
	</nav>