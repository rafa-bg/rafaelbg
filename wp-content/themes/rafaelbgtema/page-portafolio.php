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


<div class="portafolio seccion conte conte-fijo">
	<div class="fila">
		<?php 
		// empieza el if //
		if ($portaQuery->have_posts()) {
		    // empieza el while //
		     while ($portaQuery ->have_posts()) {              
		         $portaQuery ->the_post();
		?>
			<div class="col col-12 portafolio__unode">
				<div style="width: 100%; height: 400px; background-color: red;"></div>
			</div>

		<?php
			}
			// termina el while //
		}
		// termina el if //
		?>		
	</div>
</div>


<?php get_template_part('content/contacto'); ?>

<?php
get_footer();
?>