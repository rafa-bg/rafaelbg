<div class="contacto seccion conte conte-fijo">
	<div class="fila fila--titulovertical">
		<div class="col-titulo titulogeneral__wrapper">
			<h1 class="titulogeneral">¡Mándame un mensaje!<span class="titulogeneral__dash"></span></h1>
		</div>
		<div class="col-contenido fila">
			<div class="col col-xl-7 contacto__formularioycopywrapper">
				<p class="contacto__parrafo">
					¿Te gustó mi trabajo? ¡Ponte en contacto! 😉
					<br><br>
					Cuéntame tus ideas. Manda un mensaje usando el formulario de contacto que esta debajo. 
				</p>
				<form id="formulario" action="">
					<div class="formulario__wrapper">
						<label class="formulario__label" for="nombre">Nombre</label>
						<input id="nombrecompleto" name="nombre" type="text" class="formulario__input" autocomplete="off">
					</div>

					<div class="formulario__wrapperparados">
						<div class="formulario__wrapper formulario__wrapper--dos">
							<label class="formulario__label" for="correoelectronico">Correo Electrónico</label>
							<input id="correoelectronico" name="correoelectronico" type="email" class="formulario__input" autocomplete="off">
						</div>
						<div class="formulario__wrapper formulario__wrapper--dos">
							<label class="formulario__label" for="telefono">Teléfono</label>
							<input id="telefono" name="telefono" type="tel" class="formulario__input" autocomplete="off">
						</div>
					</div>

					<div class="formulario__wrapper">
						<label class="formulario__label" for="mensaje">Mensaje</label>
						<textarea id="mensaje" name="mensaje" class="formulario__textarea"></textarea>
					</div>

					<div class="formulario__recapchayboton">
						<div>
							<div class="g-recaptcha" data-sitekey="6LeVfqAUAAAAAGkY5xuz1v6wb-Qj_fo-JMapJbhz"></div>
							<input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha" id="hiddenRecaptcha">
						</div>
						<input type="submit" class="formulario__boton">
					</div>

				</form>
			</div>
			<div class="col col-xl-5 contacto__imagenwrapper">
				<img sizes="600px" srcset="<?php echo get_theme_file_uri('/img/piramides.png'); ?> 600w, <?php echo get_theme_file_uri('/img/piramides-hdpi.png') ?> 1200w" alt="Deja de ver el alt, ponte en contacto" class="contacto__piramide">
				<img sizes="600px" srcset="<?php echo get_theme_file_uri('/img/piramides--sombra.png'); ?> 600w, <?php echo get_theme_file_uri('/img/piramides--sombra-hdpi.png') ?> 1200w" alt="Deja de ver el alt, ponte en contacto" class="contacto__piramide--sombra">


			</div>
		</div>
	</div>
</div>