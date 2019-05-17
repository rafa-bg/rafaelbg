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
		<div class="portafolio__wrapperimagen">
			<img sizes="1240px" srcset="<?php the_post_thumbnail_url('portafolio-horizontal'); ?> 1240w, <?php the_post_thumbnail_url('portafolio-horizontal-hdpi'); ?> 2480w" alt="<?php the_title(); ?>" class="portafolio__imagen">

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
			<?php
				echo $proyectoImagenLarga;
				echo $proyectoImagenLargaHdpi;
			?>
		</div>
	</div>
		<?php
			}
			// termina el while //
		}
		// termina el if //
		?>		
</div>
<!--
<div class="testimoniales seccion conte conte-fijo">
	<div class="fila fila--titulovertical">
		<div class="col-titulo titulogeneral__wrapper">
			<h1 class="titulogeneral">Mis clientes dicen <span class="titulogeneral__dash"></span></h1>
		</div>
		<div class="col-contenido fila">
			<div style="width: 100%; height: 500px;"></div>
		</div>
	</div>
</div>
-->

<!-- Slider main container -->
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">Slide 1</div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        ...
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
</div>


<?php get_template_part('content/contacto'); ?>

<?php
get_footer();
?>