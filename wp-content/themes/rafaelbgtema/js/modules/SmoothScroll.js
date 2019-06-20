import $ from 'jquery';
import smoothScroll from 'jquery-smooth-scroll';

class SmoothScroll {
	constructor() {
		this.links = $(".menuprincipal__vinculo a");
		this.smoothscrollgeneral = $(".smoothscrollgeneral");
		this.addSmoothScrolling();
	}

	addSmoothScrolling() {
		this.links.smoothScroll();
		this.smoothscrollgeneral.smoothScroll();
	}
}

export default SmoothScroll;