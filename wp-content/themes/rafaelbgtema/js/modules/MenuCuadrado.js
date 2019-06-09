import $ from 'jquery';

class MenuCuadrado {
	constructor() {
		this.menucuadradotrigger = $('.menucuadrado');
		this.bloquedemenu = $('.menuprincipal');
		this.menuoverlay = $('.menuprincipal__overlay');
		this.links = $(".menuprincipal__vinculo a");
		this.events();
	}

	events() {
		this.menucuadradotrigger.click(this.sevuelvequis.bind(this));
		this.menucuadradotrigger.click(this.deslizaelmenu.bind(this));
		this.menucuadradotrigger.click(this.apareceoverlay.bind(this));
		this.menuoverlay.click(this.sevuelvequis.bind(this));
		this.menuoverlay.click(this.deslizaelmenu.bind(this));
		this.menuoverlay.click(this.apareceoverlay.bind(this));
		this.links.click(this.sevuelvequis.bind(this));
		this.links.click(this.deslizaelmenu.bind(this));
		this.links.click(this.apareceoverlay.bind(this));
	}

	sevuelvequis() {
		this.menucuadradotrigger.toggleClass('menucuadrado--sevuelveequis');
	}

	deslizaelmenu() {
		this.bloquedemenu.toggleClass('menuprincipal--abierto');
	}

	apareceoverlay() {
		this.menuoverlay.toggleClass('menuprincipal__overlay--visible')
	}
}

export default MenuCuadrado;