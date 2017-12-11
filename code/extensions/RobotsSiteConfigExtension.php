<?php

use SilverStripe\ORM\DataExtension;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\TextareaField;

class RobotsSiteConfigExtension extends DataExtension 
{

	private static $db = [
		'AllowCrawl' => 'Boolean',
		'RobotsContent' => 'Text',
	];
	
	public function updateCMSFields(FieldList $fields) 
	{

		$fields->addFieldToTab('Root.Robots', CheckboxField::create('AllowCrawl','Allow Crawl'));
		$fields->addFieldToTab('Root.Robots', TextareaField::create('RobotsContent','Robots Content'));

	}

}
