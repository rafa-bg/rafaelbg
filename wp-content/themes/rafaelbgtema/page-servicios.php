<?php 
get_header();
?>
<div class="portada">
	<h1 class="portada__titulo">Servicios</h1>
</div>

<div class="servicios seccion conte conte-fijo">
	<!---->
	<div class="fila servicios__unode">
		<div class="col col-6">
			<div style="width: 100%; height: 392px; background-color: red;"></div>
		</div>
		<div class="col col-6">
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
		<div class="col col-6">
			<div style="width: 100%; height: 392px; background-color: red;"></div>
		</div>
		<div class="col col-6">
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
		<div class="col col-6">
			<div style="width: 100%; height: 392px; background-color: red;"></div>
		</div>
		<div class="col col-6">
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
get_footer();
?>