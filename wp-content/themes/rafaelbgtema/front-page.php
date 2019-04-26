<?php 
get_header();
?>

<div class="portada">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 520" class="portada__logo">
	  <g>
	    <circle cx="240" cy="248.7" r="239.08" fill="#d50057"/>
	    <path d="M369.34 316.25c-3.97-24.81-6.04-50.25-6.04-76.18 0-25.93 2.07-51.37 6.04-76.18L87.19 1s.01 59.77.01 79.69c0 79.69 0 79.69 69.02 119.54 9.07 5.24 69 39.85 69 39.85l-69 39.85C87.2 319.78 87.21 319.78 87.2 399.47c0 19.92-.01 79.69-.01 79.69l138.04-79.7C266.57 470.92 343.82 519 432.32 519c6.78 0 13.48-.3 20.12-.85-42.09-58.77-71.18-127.46-83.1-201.9z" fill="#fff"/>
	  </g>
	</svg>
	<img src="<?php echo get_theme_file_uri('img/rcirculo__titulo.svg'); ?>" alt="Rafael Bg" class="portada__nombre">
</div>

<div class="portafoliothumbnails conte conte-fijo">
	<div class="fila fila--titulovertical">
		<div class="col-titulo titulogeneral__wrapper">
			<h1 class="titulogeneral">¡Ve mi trabajo! <span class="titulogeneral__dash"></span></h1>
		</div>
		<div class="col-contenido fila">
			<div class="col col-xl-4">
				<div class="portafoliothumbnails__thumb"></div>
			</div>
			<div class="col col-xl-4">
				<div class="portafoliothumbnails__thumb"></div>
			</div>
			<div class="col col-xl-4">
				<div class="portafoliothumbnails__thumb"></div>
			</div>
		</div>
	</div>
</div>


<div class="contacto conte conte-fijo">
	<div class="fila fila--titulovertical">
		<div class="col-titulo titulogeneral__wrapper">
			<h1 class="titulogeneral">¡Mándame un mensaje!<span class="titulogeneral__dash"></span></h1>
		</div>
		<div class="col-contenido fila">
			<div class="col col-xl-7">
				<form action="">
					<div class="formulario__wrapper">
						<label class="formulario__label" for="nombre">Nombre</label>
						<input id="nombrecompleto" name="nombre" type="text" class="formulario__input" autocomplete="off">
					</div>
					<div class="formulario__wrapper">
						<label class="formulario__label" for="correoelectronico">Correo Electrónico</label>
						<input id="correoelectronico" name="correoelectronico" type="email" class="formulario__input" autocomplete="off">
					</div>
					<div class="formulario__wrapper">
						<label class="formulario__label" for="telefono">Teléfono</label>
						<input id="telefono" name="telefono" type="tel" class="formulario__input" autocomplete="off">
					</div>
					<div class="formulario__wrapper">
						<label class="formulario__label" for="mensaje">Mensaje</label>
						<textarea id="mensaje" name="mensaje" class="formulario__textarea"></textarea>
					</div>
					<input type="submit" class="formulario__boton">
				</form>
			</div>
			<div class="col col-xl-5">
				<div style="background-color: red; width: 100%; height: 200px;"></div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
?>



