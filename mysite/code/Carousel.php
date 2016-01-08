<?php
/**
 * Carousel which is a container which can hold several CarouselItems (slides)
 */
class Carousel extends DataObject {
	
	private static $db = array(
			'Name' => 'Varchar(64)'
	);
	
	private static $has_many = array(
			'Slides' => 'CarouselItem'
	);
	
	public function getCMSFields(){
		$fields = FieldList::create(TabSet::create('Root'));
		$fields->addFieldToTab('Root.Main', TextField::create('Name', 'Name of carousel'));
		$fields->addFieldToTab('Root.Main', GridField::create(
			'Slides',
			'Slides in this carousel',
			$this->Slides(),
			GridFieldConfig_RelationEditor::create()	
		));
		return $fields;
	}
}