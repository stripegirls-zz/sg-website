<?php
/** 
 * Event list page listing past events, and upcoming evnets.
 * Initially we can list past and future events on the same page. (we might want one page for past events and another one
 * for future events in the future)
 */
class EventListPage extends Page{
	
	private static $has_many = array(
			'Events' => 'Event'
	);
		
	public function getCMSFields(){
		$fields = parent::getCMSFields();
		$fields->addFieldToTab('Root.Events', GridField::create(
				'Events',
				'Events on this page',
				$this->Events(),
				GridFieldConfig_RelationEditor::create()
		));
		return $fields;
	}
	
}

class EventListPage_Controller extends Page_Controller {
	
	private static $allowed_actions = array(
			'show'
	);
	
	//TO DO: Need to work on filter parts of both PastEvents and UpcomingEvents
	// It is oversimplified at the moment
	
	/**
	 * @param $num how many past events should be displayed on that particular list page
	 * @return a list of past events
	 */
	public function PastEvents($num = 10){
		$now = date('Y-m-d H:i');
		return Event::get()->filter(array(
			'StartDateTime:LessThan' => $now	
		))->sort('StartDateTime', 'DESC')->limit($num);
	}
	/**
	 * @param $num how many future events should be displayed on that particular list page
	 * @return a list of future events
	 */
	public function UpcomingEvents($num = 10){
		$now = date('Y-m-d H:i');
		return Event::get()->filter(array(
			'StartDateTime:GreaterThanOrEqual' => $now
		))->sort('StartDateTime', 'ASC')->limit($num);
	}
	
	public function show(SS_HTTPRequest $request){
		$event = Event::get()->byID($request->param('ID'));
	
		if(!$event){
			return $this->httpError(404, 'That event could not be found.');
		}
	
		return array(
				'Event' => $event,
				'Title' => $event->Title
		);
	}
	
}