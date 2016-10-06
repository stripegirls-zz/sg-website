<?php

global $project;
$project = 'mysite';

if(defined('SS_DATABASE_NAME') && SS_DATABASE_NAME) {
	$database = SS_DATABASE_NAME;
} else {
	$database = 'SS_stripegirls';
}

require_once('conf/ConfigureFromEnv.php');

// Set the site locale
i18n::set_locale('en_US');
