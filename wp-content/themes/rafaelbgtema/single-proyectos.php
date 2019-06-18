<?php 
get_header();
while(have_posts()) {
the_post();
?>
<div class="unproyecto seccion conte conte-fijo">
	<div class="fila">
		<div class="col col-lg-6">
			<img sizes="<?php echo get_field('proyecto__imagenintro__maxwidth').'px' ?>" srcset="<?php echo get_field('proyecto__imagenintro') ?> <?php echo get_field('proyecto__imagenintro__maxwidth').'w' ?>, <?php echo get_field('proyecto__imagenintro-hdpi') ?> <?php echo (get_field('proyecto__imagenintro__maxwidth')*2).'w' ?>" alt="<?php the_title() ?>" class="unproyecto__imagenintroduccion wow slideInLeft" style="max-width: <?php echo get_field('proyecto__imagenintro__maxwidth').'px' ?>;">
		</div>

		<div class="col col-lg-6 unproyecto__informaciongeneral">
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
	</div>
</div>
<div class="conte conte-fijo unproyecto__contenido">
	<div class="fila">
				<?php
				//aca van los proyectos
				$medarcade = 33;
				$rcastillo = 32;
				$olzaba = 31;
				$agencialoca = 30;
				$inspirasoul = 29;

				if ( get_the_id() == $medarcade ) {
					get_template_part('portafolio/medarcade');
				}

				if ( get_the_id() == $rcastillo ) {
					get_template_part('portafolio/rcastillo');
				}

				if ( get_the_id() == $olzaba ) {
					get_template_part('portafolio/olzaba');
				}

				if ( get_the_id() == $agencialoca ) {
					get_template_part('portafolio/agencialoca');
				}

				if ( get_the_id() == $inspirasoul ) {
					get_template_part('portafolio/inspirasoul');
				}
				///aca van los proyectos
				?>
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
				<div class="col col-lg-4 portafoliothumbnails__unode">
					<div class="portafoliothumbnails__wrapper">
						<a href="<?php the_permalink(); ?>">
							<img class="portafoliothumbnails__img wow fadeIn lazyload" data-srcset="<?php the_post_thumbnail_url('portafolio-horizontal'); ?> 1240w, <?php the_post_thumbnail_url('portafolio-horizontal-hdpi'); ?> 2480w" data-wow-offset="100">
						</a>
					</div>
				</div>
				<?php
					}
					// termina el while //
				}
				// termina el if //
				wp_reset_postdata();

				?>


			</div>
		</div>
	</div>
</div>

<?php
}
get_footer();
?>