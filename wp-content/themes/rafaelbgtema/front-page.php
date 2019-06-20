<?php 
get_header();
?>

<div id="portada" class="portada portada--portadaprincipal">
	<img src="<?php echo get_theme_file_uri('img/logocompleto.svg'); ?>" alt="RAFAEL//BG" class="portada__logo">
	<img src="<?php echo get_theme_file_uri('/img/portada__circulos') ?>" alt="Rafaelbg" class="portada__circulos">
</div>


<div class="holahola conte conte-fijo mt90-xl mt75-lg mt45-sm mt15 mb120-xl mb75-lg mb60">
	<div class="holahola__ancla" id="sobremi"></div>
	<div class="fila fila--titulovertical">
		<div class="col col-xl-5 col-lg-6 holahola__fotowrapper">
			<img class="holahola__foto wow fadeIn lazyload" data-src="<?php echo get_theme_file_uri('img/provicional.jpg') ?>" alt="Hi, my name is (What?) My name is (Who?)" data-wow-offset="100">
		</div>
		<div class="col col-xl-1 col-lg-0 col-md-0"></div>
		<div class="col col-xl-6 col-lg-6 holahola__info">
			<h1 class="holahola__titulo">¡HOLA, HOLA!</h1>
			<h3 class="holahola__subtitulo">//ME LLAMO RAFAEL <span class="holahola__dash"></span></h3>
			<p class="holahola__parrafo">
				<strong>Tengo 28 años y soy de la Ciudad de México.</strong>  Estudié la carrera de diseño gráfico y decidí aplicar mis conocimientos al área de páginas web. Me di cuenta que para lograr cualquier diseño que quisiera tenía que aprender a escribir mi propio código, <strong>así que lo hice.</strong>
			</p>
			<p class="holahola__parrafo">
				Después de estar varios años en agencias creativas, decidí trabajar por mi cuenta. Es muy importante para mi tener un trato cercano con el cliente. Quiero entender tus necesidades y ofrecerte soluciones a la medida.
			</p>
			<p class="holahola__parrafo">
				Tal vez estés pensando en emprender un nuevo negocio o necesitas ayuda para tu próximo proyecto. En todo caso, quiero que sepas que <strong><a href="<?php echo esc_url(site_url('/servicios')) ?>">estás en el lugar correcto.</a></strong> Mi objetivo es ayudar a las pequeñas y medianas empresas a comunicarse de forma efectiva al público.
			</p>
			<p class="holahola__parrafo">
				Aquí podrás ver <strong><a href="<?php echo esc_url(site_url('/portafolio')) ?>">varios casos en los que he participado.</a></strong> Cuando estés listo para dar el siguiente paso, <strong><a href="#contacto" class="smoothscrollgeneral">ponte en contacto.</a></strong> Hablemos de lo que tienes en mente para que podamos encontrar la mejor solución.
			</p>
		</div>
	</div>
</div>

<?php
    $portaQuery = new WP_Query(array(              
      'posts_per_page' => 3,
      'post_type' => 'proyectos',
    ));  
?>

<div class="portafoliothumbnails seccion conte conte-fijo">
	<div class="fila fila--titulovertical">
		<div class="col-titulo titulogeneral__wrapper">
			<h1 class="titulogeneral"><a href="<?php echo esc_url(site_url('/portafolio')) ?>">¡Ve mi trabajo!</a> <span class="titulogeneral__dash"></span></h1>
		</div>
		<div class="col-contenido fila">
			<?php 
			// empieza el if //
			if ($portaQuery->have_posts()) {
			    // empieza el while //
			     while ($portaQuery ->have_posts()) {              
			         $portaQuery ->the_post();
			?>
			<div class="col col-lg-4 portafoliothumbnails__unode">
				<div class="portafoliothumbnails__wrapper">
					<a href="<?php the_permalink(); ?>">
						<img class="portafoliothumbnails__img wow fadeIn lazyload" data-srcset="<?php the_post_thumbnail_url('portafolio-horizontal'); ?> 1240w, <?php the_post_thumbnail_url('portafolio-horizontal-hdpi'); ?> 2480w"  data-wow-offset="100">
					</a>
				</div>
			</div>
			<?php
				}
				// termina el while //
			}
			// termina el if //
			?>
		</div>
	</div>
</div>

<?php get_template_part('content/calltoaction'); ?>

<?php get_template_part('content/contacto'); ?>


<?php
get_footer();
?>