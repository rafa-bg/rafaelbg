<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="user-scalable=yes, initial-scale=1, maximum-scale=2, minimum-scale=1, width=device-width, height=device-height" />

	<meta name="msapplication-TileColor" content="#03181D">
	<meta name="theme-color" content="#03181D">
	<!--social-->
	<meta property="og:url" content="<?php echo get_the_permalink(); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php echo wp_title(); ?>" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<meta property="og:image" content="<?php if( is_singular('proyectos') ) { echo get_the_post_thumbnail_url('','socialthumbnail'); } else { echo get_theme_file_uri('/img/rafaelbgsocialdefault.jpg'); } ?>" />
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">
	<!--/social-->
	
	<?php wp_head(); ?>
</head>
<body <?php body_class()?> >

	<div class="menuprincipal">
		<div class="menuprincipal__wrapperoverflow">
			<img src="<?php echo get_theme_file_uri('img/logo.svg') ?>" class="menuprincipal__logo">
			<ul class="menuprincipal__lista">
				<li class="menuprincipal__vinculo <?php if ( is_front_page() ) { echo 'menuprincipal__vinculo--actual'; } ?>"><a href="<?php if (is_front_page() ) { echo '#portada'; } else { echo esc_url(site_url()); } ?>">Inicio</a></li>
				<li class="menuprincipal__vinculo"><a href="<?php if( is_front_page() ) { echo '#sobremi'; } else { echo esc_url(site_url()).'#sobremi'; } ?>">Sobre mi</a></li>
				<li class="menuprincipal__vinculo <?php if ( is_page('servicios') ) { echo 'menuprincipal__vinculo--actual'; } ?>"><a href="<?php echo esc_url(site_url('/servicios')) ?>">Servicios</a></li>
				<li class="menuprincipal__vinculo <?php if ( is_page('portafolio') OR  is_singular('proyectos') ) { echo 'menuprincipal__vinculo--actual'; } ?>"><a href="<?php echo esc_url(site_url('/portafolio')) ?>">Portafolio</a></li>
				<li class="menuprincipal__vinculo <?php if ( is_page('contacto') ) { echo 'menuprincipal__vinculo--actual'; } ?>"><a href="<?php if( is_page('servicios') OR is_page('portafolio') OR is_front_page() ) { echo '#contacto'; } else { echo esc_url(site_url('/contacto')); } ?>">Contacto</a></li>
			</ul>

			<div class="menuprincipal__footer">
				<div class="menuprincipal__social">
					<a href="https://www.facebook.com/rafaelbg.dyd" target="_blank">
						<i class="fab fa-facebook menuprincipal__social__item"></i>
					</a>
					<a href="https://www.instagram.com/rafael.bg.dyd/" target="_blank">
						<i class="fab fa-instagram menuprincipal__social__item"></i>
					</a>
					<a href="http://m.me/rafaelbg.dyd">
						<i class="fab fa-facebook-messenger menuprincipal__social__item"></i>
					</a>
					<a href="https://api.whatsapp.com/send?phone=525554646711&text=%C2%A1Hola,%20Rafael!%20Quiero%20contarte%20de%20mi%20proyecto.">
						<i class="fab fa-whatsapp menuprincipal__social__item"></i>
					</a>
				</div>

				<a href="mailto:hola@rafaelbg.com" class="menuprincipal__footer__item">hola@rafaelbg.com</a>
				<span class="menuprincipal__footer__separador">|</span>
				<a href="tel:5554646711" class="menuprincipal__footer__item">55 5464 6711</a>
			</div>
		</div>
			<div class="barranavegacion">
				<a href="<?php echo esc_url(site_url()) ?>">
					<img src="<?php echo get_theme_file_uri('img/logo.svg') ?>" class="barranavegacion__logo">
				</a>

				<div class="menucuadrado">
					<span class="menucuadrado__lineas menucuadrado__lineas__arriba"></span>
					<span class="menucuadrado__lineas menucuadrado__lineas__centro"></span>
					<span class="menucuadrado__lineas menucuadrado__lineas__abajo"></span>
				</div>

				<div class="barranavegacion__social">
					<a href="https://www.facebook.com/rafaelbg.dyd" target="_blank">
						<i class="fab fa-facebook barranavegacion__social__item"></i>
					</a>
					<a href="https://www.instagram.com/rafael.bg.dyd/" target="_blank">
						<i class="fab fa-instagram barranavegacion__social__item"></i>
					</a>
					<a href="http://m.me/rafaelbg.dyd" target="_blank">
						<i class="fab fa-facebook-messenger barranavegacion__social__item"></i>
					</a>
					<a href="https://api.whatsapp.com/send?phone=525554646711&text=%C2%A1Hola,%20Rafael!%20Quiero%20contarte%20de%20mi%20proyecto." target="_blank">
						<i class="fab fa-whatsapp barranavegacion__social__item"></i>
					</a>
				</div>
			</div>
	</div>
	<div class="menuprincipal__overlay"></div>
	<!--.wrappergeneral-->
	<div class="wrappergeneral">