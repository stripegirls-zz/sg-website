<?php
/**
 * For Backend Carousel management
 */
class CarouselAdmin extends ModelAdmin {

	private static $menu_title = 'Carousels';

	private static $url_segment = 'carousels';

	private static $managed_models = array(
			'Carousel', 'CarouselItem'
	);
	
}