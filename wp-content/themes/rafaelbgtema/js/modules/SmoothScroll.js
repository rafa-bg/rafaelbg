import $ from 'jquery';
import smoothScroll from 'jquery-smooth-scroll';

class SmoothScroll {
	constructor() {
		this.links = $(".menuprincipal__vinculo a");
		this.addSmoothScrolling();
	}

	addSmoothScrolling() {
		this.links.smoothScroll();
	}
}

export default SmoothScroll;