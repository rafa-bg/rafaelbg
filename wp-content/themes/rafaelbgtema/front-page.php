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


<div class="holahola seccion conte conte-fijo">
	<div class="fila fila--titulovertical">
		<div class="col col-5">
			<div style="height: 630px; width: 100%; background-color: red;"></div>
		</div>
		<div class="col col-1"></div>
		<div class="col col-6">
			<h1 class="holahola__titulo">¡HOLA HOLA!</h1>
			<h3 class="holahola__subtitulo">//ME LLAMO RAFAEL</h3>
			<p class="holahola__parrafo">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras molestie sem ullamcorper dui volutpat ornare. Vivamus scelerisque vitae felis quis pellentesque. Maecenas dapibus metus vel risus volutpat maximus. Cras quis quam eu metus mattis malesuada. Phasellus in mi neque. Integer eget luctus diam. Curabitur nec nulla at nulla ultricies eleifend ut non mauris. Nunc vel mattis orci. Nunc id augue sed lacus rutrum venenatis in at tellus. Nullam lorem tortor, iaculis eget tellus quis, gravida sollicitudin orci. Nulla pulvinar dui nulla, et tempor purus convallis in.
			</p>
			<p class="holahola__parrafo">
				Nulla id mi ut mauris fermentum congue. Morbi eros nibh, sodales non luctus vel, facilisis quis mi. Vivamus placerat massa eu diam elementum ultricies. Etiam in orci semper, convallis ligula ut, rhoncus ipsum. Vivamus orci mauris, rhoncus id augue in, malesuada pretium purus. Nullam finibus orci scelerisque, hendrerit turpis in, vulputate dolor. In pulvinar justo nec est dignissim eleifend. Etiam at ante nisi. Donec non iaculis nisi. Nunc non leo nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque semper porttitor hendrerit. Praesent eget ligula a mi posuere auctor id eu nisl. Phasellus at varius nisl, et iaculis ante.
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
			<h1 class="titulogeneral">¡Ve mi trabajo! <span class="titulogeneral__dash"></span></h1>
		</div>
		<div class="col-contenido fila">
			<?php 
			// empieza el if //
			if ($portaQuery->have_posts()) {
			    // empieza el while //
			     while ($portaQuery ->have_posts()) {              
			         $portaQuery ->the_post();
			?>
			<div class="col col-xl-4">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>
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

<?php get_template_part('content/contacto'); ?>


<?php
get_footer();
?>



