<?php 
get_header();
?>

<div id="portada" class="portada portada--portadaprincipal">
	<img src="<?php echo get_theme_file_uri('img/logocompleto.svg'); ?>" alt="RAFAEL//BG" class="portada__logo">
	<img src="<?php echo get_theme_file_uri('/img/portada__circulos') ?>" alt="Rafaelbg" class="portada__circulos">
	<picture>
		<source sizes="2560px" srcset="<?php echo get_theme_file_uri('img/fondo-2560.jpg') ?> 2560w, <?php echo get_theme_file_uri('img/fondo-2560-hdpi.jpg') ?> 5120w" media="(min-width: 2000px)">

		<source sizes="1920px" srcset="<?php echo get_theme_file_uri('img/fondo-1920.jpg') ?> 1920w, <?php echo get_theme_file_uri('img/fondo-1920-hdpi.jpg') ?> 3840w" media="(min-width: 997px)">

		<img srcset="<?php echo get_theme_file_uri('img/fondo-992.jpg') ?> 992w, <?php echo get_theme_file_uri('img/fondo-992-hdpi.jpg') ?> 1984w" class="portada__fondo" alt="Rafael//BG">
	</picture>
</div>


<div class="holahola conte conte-fijo mt90-xl mt75-lg mt45-sm mt15 mb90-xl mb75-lg mb60">
	<div class="holahola__ancla" id="sobremi"></div>
	<div class="fila fila--titulovertical">
		<div class="col col-xl-5 col-lg-6 holahola__fotowrapper">
			<img src="<?php echo get_theme_file_uri('img/provicional.jpg') ?>" alt="Hi, my name is (What?) My name is (Who?)" class="holahola__foto">
		</div>
		<div class="col col-xl-1 col-lg-0 col-md-0"></div>
		<div class="col col-xl-6 col-lg-6 holahola__info">
			<h1 class="holahola__titulo">¡HOLA, HOLA!</h1>
			<h3 class="holahola__subtitulo">//ME LLAMO RAFAEL <span class="holahola__dash"></span></h3>
			<p class="holahola__parrafo">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras molestie sem ullamcorper dui volutpat ornare. Vivamus scelerisque vitae felis quis pellentesque. Maecenas dapibus metus vel risus volutpat maximus. Cras quis quam eu metus mattis malesuada. Phasellus in mi neque. Integer eget luctus diam. Curabitur nec nulla at nulla ultricies eleifend ut non mauris. Nunc vel mattis orci.
			</p>
			<p class="holahola__parrafo">
				Nulla id mi ut mauris fermentum congue. Morbi eros nibh, sodales non luctus vel, facilisis quis mi. Vivamus placerat massa eu diam elementum ultricies. Etiam in orci semper, convallis ligula ut, rhoncus ipsum. Vivamus orci mauris, rhoncus id augue in, malesuada pretium purus. Nullam finibus orci scelerisque, hendrerit turpis in, vulputate dolor. In pulvinar justo nec est dignissim eleifend. Etiam at ante nisi. Donec non iaculis nisi. Nunc non leo nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque semper porttitor hendrerit.
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
						<img srcset="<?php the_post_thumbnail_url('portafolio-horizontal'); ?> 1240w, <?php the_post_thumbnail_url('portafolio-horizontal-hdpi'); ?> 2480w" class="portafoliothumbnails__img">
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