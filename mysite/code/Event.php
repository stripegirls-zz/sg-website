<?php
/**
 * 
 * For past and upcoimg events
 *
 */
class Event extends DataObject {
	//Assumption: all events take place on one day, and does not last over days
	private static $db = array(
		'Title' => 'Varchar(128)',
		'Venue' => 'Varchar(128)',
		'Date' => 'Date',
		'StartTime' => 'Time',
		'EndTime' => 'Time',
		'Price' => 'Currency',
		'Description' => 'Text',
		'Agenda' => 'HTMLText',
		'Organizer' => 'Varchar(128)',
		'OrganizerContact' => 'Varchar(128)'
	);
	
	private static $has_one = array(
		'Photo' => 'Image'	
	);
	
	private static $summary_fields = array(
		'Title' => 'Event Title',
		'Venue' => 'Venue',
		'Date' => 'Event Date',
		'StartTime' => 'Starting at',
		'Price' => 'Event Fee',
		'Organizer' => 'Organizer'	
	);
	
	//To do: Fix the searchable fields on backend interface (modeladmin)
	
	public function getCMSFields(){
		$fields = FieldList::create(TabSet::create('Root'));
		$fields->addFieldsToTab('Root.Main',array(
				TextField::create('Title', 'Title of event'),
				TextField::create('Venue'),
				DateField::create('Date')
					->setConfig('showcalendar', true),
				TimeField::create('StartTime', 'Event start time'),
				TimeField::create('EndTime', 'Event end time'),
				CurrencyField::create('Price', 'Event fee'),
				TextareaField::create('Description', 'Description of event'),
				TextField::create('Organizer'),
				TextField::create('OrganizerContact', 'Email or tel number of event organizer')
		));
		$fields->addFieldToTab('Root.Agenda', HtmlEditorField::create('Agenda'));
		$fields->addFieldtoTab('Root.Image', $uploader = UploadField::create('Photo'));
		$uploader->setFolderName('event-photos');
		$uploader->getValidator()->setAllowedExtensions(array('jpg', 'jpeg', 'gif', 'png'));
		return $fields;
	}
}