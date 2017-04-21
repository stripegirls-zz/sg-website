<?php
class EventAdmin extends ModelAdmin {

	private static $menu_title = "events";

	private static $url_segment = 'events';

	private static $managed_models = array(
			'Event'
	);

}