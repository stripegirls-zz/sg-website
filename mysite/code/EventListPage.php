<?php
/** 
 * Event list page listing past events, and upcoming evnets.
 * We can make one list page for past events, and another page for future events.
 * When a future event finishes, admin will shift the event from upcoming events page to past events page.
 */
class EventListPage extends Page{
	
	private static $has_many = array(
			'Events' => 'Event'
	);
}

class EventListPage_Controller extends Page_Controller {
	/**
	 * @param $num how many past events should be displayed on that particular list page
	 * @return a list of past events
	 */
	public function PastEvents($num = 10){
// 		return Event::get()->filter(array(
// 			'Date:LessThan' => 'Today'	
// 		))->sort('Date', 'DESC')->limit($num);
// To do: find out how to get 'Today' value
	}
	/**
	 * @param $num how many future events should be displayed on that particular list page
	 * @return a list of future events
	 */
	public function UpcomingEvents($num = 10){
// 		return Event::get()->filter(array(
// 			'Date:GreaterThanOrEqual' => 'Today'
// 		))->sort('Date', 'ASC')->limit($num);
// To do: find out how to get 'Today' value
	}
	
}