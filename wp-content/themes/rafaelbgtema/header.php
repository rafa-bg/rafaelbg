<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />


	<?php wp_head(); ?>
</head>
<body <?php body_class()?> >
	<div class="menuprincipal">
		<ul class="menuprincipal__lista">
			<li class="menuprincipal__vinculo"><a href="#">Inicio</a></li>
			<li class="menuprincipal__vinculo"><a href="#">Sobre mi</a></li>
			<li class="menuprincipal__vinculo"><a href="#">Servicios</a></li>
			<li class="menuprincipal__vinculo"><a href="#">Portafolio</a></li>
			<li class="menuprincipal__vinculo"><a href="#">Contacto</a></li>
		</ul>

		<div class="menuprincipal__footer">
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
					<a href="#">
						<i class="fab fa-facebook-messenger barranavegacion__social__item"></i>
					</a>
					<a href="#">
						<i class="fab fa-whatsapp barranavegacion__social__item"></i>
					</a>
				</div>
			</div>
	</div>
	<div class="menuprincipal__overlay"></div>