<?php 
get_header();
?>
<div class="portada">
	<h1 class="portada__titulo">Portafolio</h1>
	<img sizes="650px" srcset="<?php echo get_theme_file_uri('img/portada__icosaedro.png'); ?> 650w, <?php echo get_theme_file_uri('img/portada__icosaedro-hdpi.png') ?> 1300w" alt="" class="portada__icosaedro">
	<picture>
		<source sizes="2560px" srcset="<?php echo get_theme_file_uri('img/fondo-2560.jpg') ?> 2560w, <?php echo get_theme_file_uri('img/fondo-2560-hdpi.jpg') ?> 5120w" media="(min-width: 2000px)">

		<source sizes="1920px" srcset="<?php echo get_theme_file_uri('img/fondo-1920.jpg') ?> 1920w, <?php echo get_theme_file_uri('img/fondo-1920-hdpi.jpg') ?> 3840w" media="(min-width: 992px)">

		<img srcset="<?php echo get_theme_file_uri('img/fondo-992.jpg') ?> 992w, <?php echo get_theme_file_uri('img/fondo-992-hdpi.jpg') ?> 1984w" class="portada__fondo" alt="Rafael//BG">
	</picture>
</div>

<?php
    $portaQuery = new WP_Query(array(              
      'posts_per_page' => -1,
      'post_type' => 'proyectos',
    ));  
?>


<div class="portafolio mt90-xl mt60-lg mt30-sm mt15">
	<?php 
	// empieza el if //
	if ($portaQuery->have_posts()) {
		// empieza el while //
		while ($portaQuery ->have_posts()) {              
		    $portaQuery ->the_post();
	?>
	<div class="portafolio__unode">
		<div class="portafolio__wrapperimagen">
			<a href="<?php the_permalink() ?>">
				<img srcset="<?php the_post_thumbnail_url('portafolio-horizontal'); ?> 1240w, <?php the_post_thumbnail_url('portafolio-horizontal-hdpi'); ?> 2480w" class="portafolio__imagen wow fadeIn" data-wow-offset="100">
			</a>
		</div>
		<div class="portafolio__informacion">
			<h1 class="portafolio__titulo">
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?></h1>
				</a>
			<h3 class="portafolio__categorias">
				<?php
				$terms = get_the_terms( $post->ID , 'servicios' );
				$output = '';
				$separator = ', ';
				if($terms) {
					foreach ( $terms as $term ) {
					$output.= $term->name.$separator;
				}
					echo '//'.trim($output, $separator);
				}
				?>
			</h3>
			<p class="portafolio__descripcion">
				<?php the_field('proyecto__descripcion') ?>
			</p>
		</div>
	</div>
	<?php
		}
	// termina el while //
	}
		// termina el if //
	?>		
</div>

<div class="testimoniales seccion conte conte-fijo" style="padding: 0;">
	<div class="fila--titulovertical">
		<div class="col-titulo titulogeneral__wrapper">
			<h1 class="titulogeneral">Testimoniales <span class="titulogeneral__dash"></span></h1>
		</div>
		<div class="col-contenido testimoniales__slider">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<!--slides--->
					<div class="testimoniales__wrapper swiper-slide">
						<div class="testimoniales__unode">
							<i class="fas fa-quote-left testimoniales__icono"></i>
							<div class="testimoniales__cita">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dui mi, molestie vitae efficitur a, porttitor ut lorem. Duis eget condimentum mi, at rutrum felis. Proin vel est elementum, sodales turpis a, mattis justo. Duis lobortis turpis finibus augue dignissim, eu iaculis urna.
							</div>
							<div class="testimoniales__datos">
								<div class="testimoniales__nombreyquees">
									<h3 class="testimoniales__nombre">
										Julieta Martínez
									</h3>
									<h3 class="testimoniales__quees">
										// Inspira Soul
									</h3>
								</div>
								<img src="<?php echo get_theme_file_uri('/img/testimonial__jm.jpg') ?>" alt="" class="testimoniales__foto">
							</div>
							
						</div>
					</div>
					<!--slides--->
					<div class="testimoniales__wrapper swiper-slide">
						<div class="testimoniales__unode">
							<i class="fas fa-quote-left testimoniales__icono"></i>
							<div class="testimoniales__cita">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dui mi, molestie vitae efficitur a, porttitor ut lorem. Duis eget condimentum mi, at rutrum felis. Proin vel est elementum, sodales turpis a, mattis justo. Duis lobortis turpis finibus augue dignissim, eu iaculis urna.
							</div>
							<div class="testimoniales__datos">
								<div class="testimoniales__nombreyquees">
									<h3 class="testimoniales__nombre">
										Violeta Martinez
									</h3>
									<h3 class="testimoniales__quees">
										// Diseñadora Gráfica
									</h3>
								</div>
								<img src="<?php echo get_theme_file_uri('/img/testimonial__vm.jpg') ?>" alt="" class="testimoniales__foto">
							</div>
							
						</div>
					</div>
					<!--slides--->
					<div class="testimoniales__wrapper swiper-slide">
						<div class="testimoniales__unode">
							<i class="fas fa-quote-left testimoniales__icono"></i>
							<div class="testimoniales__cita">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dui mi, molestie vitae efficitur a, porttitor ut lorem. Duis eget condimentum mi, at rutrum felis. Proin vel est elementum, sodales turpis a, mattis justo. Duis lobortis turpis finibus augue dignissim, eu iaculis urna.
							</div>
							<div class="testimoniales__datos">
								<div class="testimoniales__nombreyquees">
									<h3 class="testimoniales__nombre">
										Lorena Leo Nava
									</h3>
									<h3 class="testimoniales__quees">
										// Agencia LOCA
									</h3>
								</div>
								<img src="<?php echo get_theme_file_uri('/img/testimonial__lln.jpg') ?>" alt="" class="testimoniales__foto">
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!--navegacion-->
			<span class="testimoniales__flecha testimoniales__flecha--izquierda"></span>
			<span class="testimoniales__flecha testimoniales__flecha--derecha"></span>
			<!--navegacion-->
			<!-- If we need pagination -->
			 <div class="swiper-pagination"></div>
			<!---->
		</div>
	</div>
</div>

<?php get_template_part('content/calltoaction'); ?>
<?php get_template_part('content/contacto'); ?>

<?php
get_footer();
?>