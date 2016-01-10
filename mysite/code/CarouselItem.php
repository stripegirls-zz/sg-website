<?php
/**
 * CarouselItem represent one slide in a Carousel
 */
class CarouselItem extends DataObject {
	
	private static $db = array(
			'Title' => 'Varchar(128)',
			'Caption' => 'Text'
	);
	
	private static $has_one = array(
			'SlideImage' => 'Image',
			'HomePage' => 'HomePage'
	);
	
	public function getCMSFields(){
		$fields = FieldList::create(
				TextField::create('Title'),
				TextareaField::create('Caption'),
				$uploader = UploadField::create('SlideImage')
		);
		
		$uploader->setFolderName('carousel-images');
		$uploader->getValidator()->setAllowedExtensions(array(
				'png', 'gif', 'jpg', 'jpeg'
		));
		
		return $fields;
	}
	
	
}