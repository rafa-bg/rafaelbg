<?php 
get_header();
while(have_posts()) {
the_post();
?>
	

<div class="portada">
	<h1 class="portada__titulo">Servicios</h1>
	<img src="<?php echo get_theme_file_uri('img/luna.png'); ?>" alt="RAFAEL//BG" class="portada__luna">
	<img src="<?php echo get_theme_file_uri('/img/fondo-1920.jpg') ?>" alt="Rafaelbg" class="portada__fondo">
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