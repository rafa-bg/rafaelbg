<?php 
get_header();
while(have_posts()) {
the_post();
?>
	

<div class="portada">
	<h1 class="portada__titulo">Servicios</h1>
	<img sizes="600px" srcset="<?php echo get_theme_file_uri('img/portada__luna.png'); ?> 600w, <?php echo get_theme_file_uri('img/portada__luna-hdpi.png') ?> 1200w" alt="" class="portada__luna">
	<picture>
		<source sizes="2560px" srcset="<?php echo get_theme_file_uri('img/fondo-2560.jpg') ?> 2560w, <?php echo get_theme_file_uri('img/fondo-2560-hdpi.jpg') ?> 5120w" media="(min-width: 2000px)">

		<source sizes="1920px" srcset="<?php echo get_theme_file_uri('img/fondo-1920.jpg') ?> 1920w, <?php echo get_theme_file_uri('img/fondo-1920-hdpi.jpg') ?> 3840w" media="(min-width: 992px)">

		<img srcset="<?php echo get_theme_file_uri('img/fondo-992.jpg') ?> 992w, <?php echo get_theme_file_uri('img/fondo-992-hdpi.jpg') ?> 1984w" class="portada__fondo" alt="Rafael//BG">
	</picture>
</div>


<div class="servicios seccion conte conte-fijo">
	<!---->
	<div class="fila servicios__unode">
		<div class="col col-5">
			<img sizes="300px" srcset="<?php echo get_theme_file_uri('img/servico__web.png'); ?> 300w, <?php echo get_theme_file_uri('img/servico__web-hdpi.png') ?> 600w" alt="" class="servicios__icono">
		</div>
		<div class="col col-7 servicios__textowrapper">
			<h1 class="servicios__titulo">
				Sitios Web
			</h1>
			<p class="servicios__parrafo">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dui mi, molestie vitae efficitur a, porttitor ut lorem. Duis eget condimentum mi, at rutrum felis. Proin vel est elementum, sodales turpis a, mattis justo. Duis lobortis turpis finibus augue dignissim, eu iaculis urna tempus.
			</p>
		</div>
	</div>
	<!---->

	<!---->
	<div class="fila servicios__unode">
		<div class="col col-5">
			<img sizes="300px" srcset="<?php echo get_theme_file_uri('img/servico__branding.png'); ?> 300w, <?php echo get_theme_file_uri('img/servico__branding-hdpi.png') ?> 600w" alt="" class="servicios__icono">

		</div>
		<div class="col col-7 servicios__textowrapper">
			<h1 class="servicios__titulo">
				Branding
			</h1>
			<p class="servicios__parrafo">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dui mi, molestie vitae efficitur a, porttitor ut lorem. Duis eget condimentum mi, at rutrum felis. Proin vel est elementum, sodales turpis a, mattis justo. Duis lobortis turpis finibus augue dignissim, eu iaculis urna tempus.
			</p>
		</div>
	</div>
	<!---->

	<!---->
	<div class="fila servicios__unode">
		<div class="col col-5">
			<img sizes="300px" srcset="<?php echo get_theme_file_uri('img/servico__diseno.png'); ?> 300w, <?php echo get_theme_file_uri('img/servico__diseno-hdpi.png') ?> 600w" alt="" class="servicios__icono">
		</div>
		<div class="col col-7 servicios__textowrapper">
			<h1 class="servicios__titulo">
				Diseño Gráfico
			</h1>
			<p class="servicios__parrafo">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dui mi, molestie vitae efficitur a, porttitor ut lorem. Duis eget condimentum mi, at rutrum felis. Proin vel est elementum, sodales turpis a, mattis justo. Duis lobortis turpis finibus augue dignissim, eu iaculis urna tempus.
			</p>
		</div>
	</div>
	<!---->
</div>

<div class="calltoaction">
	<img src="<?php echo get_theme_file_uri('/img/rcirculo.svg') ?>" alt="Rafael BG" class="calltoaction__logo">
	<h1 class="calltoaction__titulo">Hablemos de tu proyecto</h1>
</div>

<?php get_template_part('content/contacto'); ?>

<?php
}
get_footer();
?>