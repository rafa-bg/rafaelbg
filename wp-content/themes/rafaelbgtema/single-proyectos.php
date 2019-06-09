<?php 
get_header();
?>
<div class="unproyecto seccion conte conte-fijo">
	<div class="fila">
		<div class="col col-6">
			<img sizes="<?php echo get_field('proyecto__imagenintro__maxwidth').'px' ?>" srcset="<?php echo get_field('proyecto__imagenintro') ?> <?php echo get_field('proyecto__imagenintro__maxwidth').'w' ?>, <?php echo get_field('proyecto__imagenintro-hdpi') ?> <?php echo (get_field('proyecto__imagenintro__maxwidth')*2).'w' ?>" alt="<?php the_title() ?>" class="unproyecto__imagenintroduccion" style="max-width: <?php echo get_field('proyecto__imagenintro__maxwidth').'px' ?>;">
		</div>

		<div class="col col-6 unproyecto__informaciongeneral">
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
				<?php the_field('proyecto__descripcion') ?>
				<?php if ( get_field('proyecto__url') ) { ?>
				<br><br>
				<a href="<?php the_field('proyecto__url') ?>" class="unproyecto__visitarsitio" target="_blank">Visitar sitio</a>
				<?php
				}?>
			</div>
			<div class="unproyecto__creditos">
				<?php the_field('proyecto__creditos'); ?>
			</div>
			
		</div>
		<div class="col col-12">
		</div>
	</div>
</div>

<div class="compartir">
	<span class="fa-stack fa-lg compartir__icono">
		<i class="fa fa-circle fa-stack-2x"></i>
		<a href="<?php echo 'https://www.facebook.com/sharer/sharer.php?u='.get_the_permalink(); ?>" onclick="window.open(this.href, 'windowName', 'width=672, height=400, left=24, top=24, scrollbars, resizable'); return false;">
	 		<i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
		</a>
	</span>

	<span class="fa-stack fa-lg compartir__icono">
	  <i class="fa fa-circle fa-stack-2x"></i>
	  <a href="<?php echo 'https://api.whatsapp.com/send?text=Rafael//BG - '.get_the_title().'%20-%20'.get_the_permalink(); ?>" class="" target="_blank">
	  	<i class="fab fa-whatsapp fa-stack-1x fa-inverse"></i>
	  </a>
	</span>

	<span class="fa-stack fa-lg compartir__icono">
	  <i class="fa fa-circle fa-stack-2x"></i>
	  <a href="<?php echo 'https://twitter.com/intent/tweet?url='.get_the_permalink().'&amp;text=Rafael//BG - '.get_the_title() ?>">
	  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
		</a>
	</span>
</div>

<?php
	$idDelPost = get_the_id();
    $portaQuery = new WP_Query(array(              
    	'posts_per_page' => 3,
    	'post_type' => 'proyectos',
    	'orderby' => 'rand',
    	'post__not_in' => array($idDelPost),
    ));  
?>

<div class="portafoliothumbnails__wrapper--singleproyecto">
	<div class="portafoliothumbnails conte conte-fijo">
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