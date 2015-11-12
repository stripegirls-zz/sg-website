<?php
class SiteConfigExtension extends DataExtension {

	private static $db = array (
			'FacebookUsername' => 'Varchar(64)',
			'TwitterUsername' => 'Varchar(64)'
	);

	public function updateCMSFields(FieldList $fields) {
		$fields->addFieldsToTab('Root.SocialMedia', array (
				TextField::create('FacebookUsername','Facebook Username'),
				TextField::create('TwitterUsername','Twitter Username')
		));
	}
	
	public function getSocialMediaLink($media = 'facebook'){
		
		$media = strtolower($media);
		$link = "";
		
		switch($media){
			case "facebook": $link = Config::inst()->get('SiteConfigExtension', 'facebook_absolute_link');
							 $link .= $this->owner->FacebookUsername;
							 break;
			case "twitter": $link = Config::inst()->get('SiteConfigExtension', 'twitter_absolute_link');
							$link .= $this->owner->TwitterUsername;
							break;
			default: $link = "";
		}
 		return $link;
	}
}