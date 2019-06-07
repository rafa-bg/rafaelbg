<?php 
get_header();
?>

<div class="cuatrocerocuatro">
	<h1 class="cuatrocerocuatro__titulo">404</h1>
	<h2 class="cuatrocerocuatro__subtitulo">La pagina solicitada no existe.</h2>	


	<img sizes="600px" srcset="<?php echo get_theme_file_uri('img/cuatrocerocuatro__luna.png'); ?> 600w, <?php echo get_theme_file_uri('img/cuatrocerocuatro__luna-hdpi.png') ?> 1200w" alt="" class="cuatrocerocuatro__luna">
	
	<picture>
		<source sizes="2560px" srcset="<?php echo get_theme_file_uri('img/fondo-2560.jpg') ?> 2560w, <?php echo get_theme_file_uri('img/fondo-2560-hdpi.jpg') ?> 5120w" media="(min-width: 2000px)">
		<source sizes="1920px" srcset="<?php echo get_theme_file_uri('img/fondo-1920.jpg') ?> 1920w, <?php echo get_theme_file_uri('img/fondo-1920-hdpi.jpg') ?> 3840w" media="(min-width: 992px)">
		<img srcset="<?php echo get_theme_file_uri('img/fondo-992.jpg') ?> 992w, <?php echo get_theme_file_uri('img/fondo-992-hdpi.jpg') ?> 1984w" class="cuatrocerocuatro__fondo" alt="Rafael//BG">
	</picture>

</div>
<?php
get_footer();
?>