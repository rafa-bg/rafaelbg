<?php 
get_header();
while(have_posts()) {
the_post();
?>
	

<div class="portada">
	<h1 class="portada__titulo">Servicios</h1>
	<img sizes="600px" srcset="<?php echo get_theme_file_uri('img/portada__luna.png'); ?> 600w, <?php echo get_theme_file_uri('img/portada__luna-hdpi.png') ?> 1200w" alt="" class="portada__luna">
</div>


<div class="servicios conte conte-fijo mt120 mb120">
	<!---->
	<div class="fila servicios__unode">
		<div class="col col-12 col-md-5 col-lg-5 servicios__imagenwrapper">
			<img src="<?php echo get_theme_file_uri('img/servico__web.svg'); ?>" alt="Sitios Web" class="servicios__icono servicios__icono--web wow fadeIn">
		</div>
		<div class="col col-0 col-lg-1"></div>
		<div class="col col-12 col-md-7 col-lg-6 servicios__textowrapper">
			<h1 class="servicios__titulo">
				Sitios Web
				<span class="servicios__titulodash"></span>
			</h1>
			<p class="servicios__parrafo">
				<strong>Seguramente para este punto ya sabes lo importante que estar presente en internet.</strong> Ya sea que necesites mostrarle al mundo lo que haces o requieras una plataforma donde puedas comunicarte continuamente con tu público, necesitas un espacio que sea exclusivamente tuyo. Y es mucho mejor si es uno hecho justo a tu medida: con las funciones y características que realmente necesitas.
			</p>
		</div>
	</div>
	<!---->

	<!---->
	<div class="fila servicios__unode">
		<div class="col col-12 col-md-5 col-lg-5 servicios__imagenwrapper">
			<img src="<?php echo get_theme_file_uri('img/servico__marca.svg'); ?>" alt="Diseño de Marca" class="servicios__icono servicios__icono--marca wow fadeIn">
		</div>
		<div class="col col-0 col-lg-1"></div>
		<div class="col col-12 col-md-7 col-lg-6 servicios__textowrapper">
			<h1 class="servicios__titulo">
				Diseño de Marca
				<span class="servicios__titulodash"></span>
			</h1>
			<p class="servicios__parrafo">
				<strong>Una marca es muchísimo más que un logo.</strong> Es todo un sistema que va más allá de las formas, la tipografía o los colores: es una herramienta para mostrarle al mundo cómo quieres ser percibido y recordado. Un logo <em>podría</em> ser cualquier cosa, pero una marca sólo se logra mediante un estudio de los requerimientos y las necesidades de cada caso. Para ello se requiere un entendimiento profundo de los valores que deseas reflejar, así como de las emociones que deseas provocar en tu público. 
			</p>
		</div>
	</div>
	<!---->

	<!---->
	<div class="fila servicios__unode">
		<div class="col col-12 col-md-5 col-lg-5 servicios__imagenwrapper">
			<img src="<?php echo get_theme_file_uri('img/servico__editorial.svg'); ?>" alt="Diseño Editorial" class="servicios__icono servicios__icono--editorial wow fadeIn">
		</div>
		<div class="col col-0 col-lg-1"></div>
		<div class="col col-12 col-md-7 col-lg-6 servicios__textowrapper">
			<h1 class="servicios__titulo">
				Diseño Editorial
				<span class="servicios__titulodash"></span>
			</h1>
			<p class="servicios__parrafo">
				La labor de organizar texto en una página puede que exista desde hace cientos de años, pero no por ello deja de ser vigente. Aún con la adopción cada vez mayor de los medios digitales, el diseño editorial sigue siendo una parte importante del diseño gráfico. <strong>No se trata solamente de rellenar un espacio con información</strong>, sino de hacerlo de manera que ayude a comunicar de forma visual lo que se presenta al lector.
			</p>
		</div>
	</div>
	<!---->
</div>
<?php get_template_part('content/calltoaction'); ?>
<?php get_template_part('content/contacto'); ?>

<?php
}
get_footer();
?>