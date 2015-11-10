<?php
class SiteConfigExtension extends DataExtension {

	private static $db = array (
			'FacebookAccount' => 'Varchar',
			'TwitterAccount' => 'Varchar'
	);

	public function updateCMSFields(FieldList $fields) {
		$fields->addFieldsToTab('Root.SocialMedia', array (
				TextField::create('FacebookAccount','Facebook Account'),
				TextField::create('TwitterAccount','Twitter Account')
		));
	}
}