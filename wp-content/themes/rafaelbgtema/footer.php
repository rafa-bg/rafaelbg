		</div>
		<footer class="footer <?php if ( is_singular('proyectos') ) { echo 'footer--oscuro'; } ?>"> 
			<p class="footer__p">© 2019 Rafael BG, <br> Todos los derechos reservados.</p>
			<span class="footer__separador">|</span>
			<a href="mailto:hola@rafaelbg.com" class="footer__link">hola@rafaelbg.com</a>
			<span class="footer__separador">|</span>
			<a href="tel:5554646711" class="footer__link">55 5464 6711</a>
		</footer>
		<!--/wrappergeneral-->

		<?php wp_footer(); ?>
		<script>
		  var mySwiper = new Swiper ('.swiper-container', {
		    // Optional parameters
		    loop: true,
		    slidesPerView: 2,

		    // If we need pagination
		    pagination: {
		      el: '.swiper-pagination',
		    },

		    // Navigation arrows
		    navigation: {
		      nextEl: '.testimoniales__flecha--derecha',
		      prevEl: '.testimoniales__flecha--izquierda',
		    },
		  })
		  </script>	
	</body>
</html>
