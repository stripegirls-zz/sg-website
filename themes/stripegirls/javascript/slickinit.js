jQuery.noConflict();

(function($) {
	$(document).ready(function(){
		$('.homepage_carousel').slick({
			autoplay: true,
			autoplaySpeed: 5000,
			dots: true,
			arrows: true,
		});
	});
}(jQuery));




