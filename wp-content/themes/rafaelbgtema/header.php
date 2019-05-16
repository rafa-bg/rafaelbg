<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />
	<meta name="msapplication-TileColor" content="#03181D">
	<meta name="theme-color" content="#03181D">

	<?php wp_head(); ?>
</head>
<body <?php body_class()?> >

	<div class="menuprincipal">
		<img src="<?php echo get_theme_file_uri('img/logo.svg') ?>" class="menuprincipal__logo">

		<ul class="menuprincipal__lista">
			<li class="menuprincipal__vinculo"><a href="<?php echo esc_url(site_url()) ?>">Inicio</a></li>
			<li class="menuprincipal__vinculo"><a href="<?php echo esc_url(site_url()) ?>">Sobre mi</a></li>
			<li class="menuprincipal__vinculo"><a href="<?php echo esc_url(site_url('/servicios')) ?>">Servicios</a></li>
			<li class="menuprincipal__vinculo"><a href="<?php echo esc_url(site_url('/portafolio')) ?>">Portafolio</a></li>
			<li class="menuprincipal__vinculo"><a href="<?php echo esc_url(site_url('/contacto')) ?>">Contacto</a></li>
		</ul>

		<div class="menuprincipal__footer">
			<div class="menuprincipal__social">
				<a href="#">
					<i class="fab fa-facebook menuprincipal__social__item"></i>
				</a>
				<a href="#">
					<i class="fab fa-instagram menuprincipal__social__item"></i>
				</a>
				<a href="#">
					<i class="fab fa-facebook-messenger menuprincipal__social__item"></i>
				</a>
				<a href="#">
					<i class="fab fa-whatsapp menuprincipal__social__item"></i>
				</a>
			</div>

			<a href="#" class="menuprincipal__footer__item">hola@rafaelbg.com</a>
			<span class="menuprincipal__footer__separador">|</span>
			<a href="#" class="menuprincipal__footer__item">55 5464 6711</a>
		</div>
		
			<div class="barranavegacion">
				<img src="<?php echo get_theme_file_uri('img/logo.svg') ?>" class="barranavegacion__logo">

				<div class="menucuadrado">
					<span class="menucuadrado__lineas menucuadrado__lineas__arriba"></span>
					<span class="menucuadrado__lineas menucuadrado__lineas__centro"></span>
					<span class="menucuadrado__lineas menucuadrado__lineas__abajo"></span>
				</div>

				<div class="barranavegacion__social">
					<a href="#">
						<i class="fab fa-facebook barranavegacion__social__item"></i>
					</a>
					<a href="#">
						<i class="fab fa-instagram barranavegacion__social__item"></i>
					</a>
					<a href="#" target="_blank">
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