<?php
/**
 *  Homepage with a carousel on the top of the page
 */
class HomePage extends Page {
	
	private static $has_many = array(
			'CarouselSlides' => 'CarouselItem' 
	);
	
	public function getCMSFields(){
		$fields = parent::getCMSFields();
		
		$conf=GridFieldConfig_RelationEditor::create(10);
		$conf->addComponent(new GridFieldSortableRows('SortOrder'));
		
		$fields->addFieldToTab('Root.Carousel', new GridField(
				'CarouselSlides', 
				'Carousel slides', 
				$this->CarouselSlides(), 
				$conf)
		);
				
		return $fields;
	}
    
}

class HomePage_Controller extends Page_Controller {
	/**
	 * @see Page_Controller::init()
	 * make use of jquery carousel plugin slick (http://kenwheeler.github.io/slick/)
	 */
    public function init() {
    	parent::init();
    	Requirements::css("{$this->ThemeDir()}/css/slick.css");
    	Requirements::css("{$this->ThemeDir()}/css/slick-theme.css");
    	Requirements::css("{$this->ThemeDir()}/css/slick-custom.css");
    	Requirements::javascript("//code.jquery.com/jquery-migrate-1.2.1.min.js");
    	Requirements::javascript("{$this->ThemeDir()}/javascript/slick.min.js");
    	Requirements::javascript("{$this->ThemeDir()}/javascript/slickinit.js");
    }
}
