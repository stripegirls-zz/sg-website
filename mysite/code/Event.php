<?php
/**
 * 
 * For past and upcoimg events
 *
 */
class Event extends DataObject {
	private static $db = array (
			'Title' => 'Varchar(128)',
			'Venue' => 'Varchar(128)',
			'StartDateTime' => 'SS_Datetime',
			'EndDateTime' => 'SS_Datetime',
			'Price' => 'Currency',
			'Description' => 'Text',
			'Agenda' => 'HTMLText',
			'Organizer' => 'Varchar(128)',
			'OrganizerContact' => 'Varchar(128)' 
	);
	private static $has_one = array (
			'Photo' => 'Image',
			'EventListPage' => 'EventListPage' 
	);
	private static $summary_fields = array (
			'Title' => 'Event Title',
			'Venue' => 'Venue',
			'StartDateTime' => 'Starting at',
			'Price' => 'Event Fee',
			'Organizer' => 'Organizer',
			'Link' => 'Link' 
	);
	
	public function searchableFields() {
		return array (
				'Title' => array (
						'filter' => 'PartialMatchFilter',
						'title' => 'Title',
						'field' => 'TextField' 
				),
				'Venue' => array (
						'filter' => 'PartialMatchFilter',
						'title' => 'Venue',
						'field' => 'TextField'
				),
				'Description' => array (
						'filter' => 'PartialMatchFilter',
						'title' => 'Description',
						'field' => 'TextField'
				),
				'Organizer' => array (
						'filter' => 'PartialMatchFilter',
						'title' => 'Organizer',
						'field' => 'TextField'
				)
		);
	}
	public function getCMSFields() {
		$fields = FieldList::create ( TabSet::create ( 'Root' ) );
		$fields->addFieldsToTab ( 'Root.Main', array (
				TextField::create ( 'Title', 'Title of event' ),
				TextField::create ( 'Venue' ),
				$startDateTime = DatetimeField::create ( 'StartDateTime', 'Start Date/Time (yyyy-MM-dd HH:mm)' )->setConfig ( 'datavalueformat', 'yyyy-MM-dd HH:mm' ),
				$endDateTime = DatetimeField::create ( 'EndDateTime', 'End Date/Time (yyyy-MM-dd HH:mm)' )->setConfig ( 'datavalueformat', 'yyyy-MM-dd HH:mm' ),
				CurrencyField::create ( 'Price', 'Event fee' ),
				TextareaField::create ( 'Description', 'Description of event' ),
				TextField::create ( 'Organizer' ),
				TextField::create ( 'OrganizerContact', 'Email or tel number of event organizer' ) 
		) );
		$fields->addFieldToTab ( 'Root.Agenda', HtmlEditorField::create ( 'Agenda' ) );
		$fields->addFieldtoTab ( 'Root.Image', $uploader = UploadField::create ( 'Photo' ) );
		$uploader->setFolderName ( 'event-photos' );
		$uploader->getValidator ()->setAllowedExtensions ( array (
				'jpg',
				'jpeg',
				'gif',
				'png' 
		) );
		$startDateTime->getDateField ()->setConfig ( 'showcalendar', 1 )->setConfig ( 'dateformat', 'yyyy-MM-dd' );
		$endDateTime->getDateField ()->setConfig ( 'showcalendar', 1 )->setConfig ( 'dateformat', 'yyyy-MM-dd' );
		
		return $fields;
	}
	public function Link() {
		return $this->EventListPage ()->Link ( 'show/' . $this->ID );
	}
}