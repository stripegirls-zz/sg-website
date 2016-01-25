<?php
/**
 * CarouselItem represent one slide in a Carousel
 */
class CarouselItem extends DataObject {
	
	private static $db = array(
			'Title' => 'Varchar(128)',
			'Caption' => 'Text',
			'SortOrder'=>'Int'
	);
	
	private static $has_one = array(
			'SlideImage' => 'Image',
			'HomePage' => 'HomePage'
	);
	
	private static $summary_fields = array(
			'SlideImage.CMSThumbnail' => 'Slide Image',
			'Title' => 'Title',
			'Caption' => 'Caption',
	);
	
	public static $default_sort='SortOrder';
	
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