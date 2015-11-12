<?php
/**
 * Extending Siteconfig.
 * 
 */
class SiteConfigExtension extends DataExtension {

	private static $db = array (
			'FacebookUsername' => 'Varchar(64)',
			'TwitterUsername' => 'Varchar(64)'
	);

	/**
	 * Adds social link to the Site configuration
	 *
	 * @param Fieldlist $fields
	 */
	public function updateCMSFields(FieldList $fields) {
		$fields->addFieldsToTab('Root.SocialMedia', array (
				TextField::create('FacebookUsername','Facebook Username'),
				TextField::create('TwitterUsername','Twitter Username')
		));
	}
	
	/**
	 *
	 */
	public function SocialMediaLink($media = 'facebook') {
Debug::dump($media);
		$media = strtolower($media);
		$link = "";
		
		switch($media){
			case "facebook":
				$link = Config::inst()->get('SiteConfigExtension', 'facebook_absolute_link');
				$link .= $this->owner->FacebookUsername;
				break;
			case "twitter":
				$link = Config::inst()->get('SiteConfigExtension', 'twitter_absolute_link');
				$link .= $this->owner->TwitterUsername;
				break;
			default:
				$link = "";
		}
Debug::dump($link);

 		return $link;
	}
}