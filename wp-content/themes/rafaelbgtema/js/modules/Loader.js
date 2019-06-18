import $ from 'jquery';
import WOW from "wow.js";

class Loader {
	constructor() {
		this.ventana = $(window);
		this.loader = $('#loader')
		this.events();
	}

	events() {
		this.ventana.on('load', this.desapareceLoader.bind(this));
		/**/
	}

	desapareceLoader() {
		this.loader.delay(500).fadeOut('slow');
		this.cargaWow();
		
	}

	cargaWow() {
		new WOW().init();
	}
}

export default Loader;