<?php 
get_header();
?>
<div class="singleproyecto" style="height: 500vh; width: 100%; background-color: red;">
	
</div>


<?php
    $portaQuery = new WP_Query(array(              
      'posts_per_page' => 3,
      'post_type' => 'proyectos',
    ));  
?>

<div class="portafoliothumbnails__wrapper--singleproyecto">
	<div class="portafoliothumbnails conte conte-fijo">
		<div class="fila fila--titulovertical">
			<div class="col-titulo titulogeneral__wrapper">
				<h1 class="titulogeneral titulogeneral--blanco">¡Aún hay más! <span class="titulogeneral__dash titulogeneral__dash--blanco"></span></h1>
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
</div> 	

<?php
get_footer();
?>