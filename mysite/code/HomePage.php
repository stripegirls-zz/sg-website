<?php
/**
 *  Homepage with a carousel on the top of the page
 */
class HomePage extends Page
{
	/**
	 * Get Homepage Carousel slide items
	 */
    public function CarouselSlides($name){
    	$carousel = Carousel::get()->filter(array(
    			'Name' => $name
    	))->first();
    	
    	if($carousel){
    		return $carousel->Slides();
    	}
    }
}

class HomePage_Controller extends Page_Controller
{
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
