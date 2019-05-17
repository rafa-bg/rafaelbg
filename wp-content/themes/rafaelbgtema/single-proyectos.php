<?php 
get_header();
?>
<div class="unproyecto seccion conte conte-fijo">
	<div class="fila">
		<div class="col col-6">
			
		</div>
		<div class="col col-6">
			<h1 class="unproyecto__titulo"><?php the_title(); ?></h1>
			<h3 class="unproyecto__categorias">
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

			<div class="unproyecto__intro">
				<?php the_field('proyecto__intro'); ?>
			</div>
			<div class="unproyecto__creditos">
				<?php the_field('proyecto__creditos'); ?>
			</div>
			
		</div>
		<div class="col col-12">
		</div>
	</div>
</div>


<?php
    $portaQuery = new WP_Query(array(              
      'posts_per_page' => 3,
      'post_type' => 'proyectos',
    ));  
?>

<div class="portafoliothumbnails__wrapper--singleproyecto">
	<div class="portafoliothumbnails seccion conte conte-fijo">
		<div class="fila fila--titulovertical">
			<div class="col-titulo titulogeneral__wrapper">
				<h1 class="titulogeneral titulogeneral--blanco"><a href="<?php echo esc_url(site_url('/portafolio')) ?>">¡Aún hay más!</a> <span class="titulogeneral__dash titulogeneral__dash--blanco"></span></h1>
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
						<img src="<?php the_post_thumbnail_url('portafolio-cuadrado'); ?>" class="portafoliothumbnails__img">
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
</div>

<?php
get_footer();
?>