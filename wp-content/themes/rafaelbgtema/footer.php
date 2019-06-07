		</div>
		<!--/wrappergeneral-->

		<footer class="footer <?php if ( is_singular('proyectos')) { echo 'footer--oscuro'; } if (is_404()) { echo 'no-footer'; }?>"> 
			<a href="mailto:hola@rafaelbg.com" class="footer__link">hola@rafaelbg.com</a>
			<span class="footer__separador">|</span>
			<a href="tel:5554646711" class="footer__link">55 5464 6711</a>
			<span class="footer__separador">|</span>
			<p class="footer__p">© 2019 Rafael BG, <br> Todos los derechos reservados.</p>
		</footer>

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

		  /************ TWITTER ******************************/
		    window.twttr = (function(d, s, id) {
		    var js, fjs = d.getElementsByTagName(s)[0],
		      t = window.twttr || {};
		    if (d.getElementById(id)) return t;
		    js = d.createElement(s);
		    js.id = id;
		    js.src = "https://platform.twitter.com/widgets.js";
		    fjs.parentNode.insertBefore(js, fjs);

		    t._e = [];
		    t.ready = function(f) {
		      t._e.push(f);
		    };

		    return t;
		  }(document, "script", "twitter-wjs"));
		  /************ TWITTER ******************************/

		  </script>	
	</body>
</html>
