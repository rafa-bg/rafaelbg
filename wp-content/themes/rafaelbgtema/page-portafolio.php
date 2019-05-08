<?php 
get_header();
?>
<div class="portada">
	<h1 class="portada__titulo">Portafolio</h1>
</div>

<?php
    $portaQuery = new WP_Query(array(              
      'posts_per_page' => -1,
      'post_type' => 'proyectos',
    ));  
?>


<div class="portafolio seccion">
	<?php 
	// empieza el if //
	if ($portaQuery->have_posts()) {
		// empieza el while //
		while ($portaQuery ->have_posts()) {              
		    $portaQuery ->the_post();
	?>
	<div class="portafolio__unode">
		<div class="portafolio__imagen"></div>
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

<?php get_template_part('content/contacto'); ?>

<?php
get_footer();
?>