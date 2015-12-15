jQuery.noConflict();

(function($) {
	$(document).ready(function(){
		$('.homepage_carousel').slick({
			autoplay: true,
			autoplaySpeed: 4000,
			dots: true,
			arrows: true,
		});
	});
}(jQuery));




