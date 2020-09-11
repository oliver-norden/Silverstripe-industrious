<?php

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataExtension;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\TextField;

class SiteConfigExtension extends DataExtension {

  private static $db = [
    'FooterContent' => 'HTMLText',
    'TwitterLink' => 'Varchar',
    'FacebookLink' => 'Varchar',
    'InstagramLink' => 'Varchar',
    'GithubLink' => 'Varchar',
  ];

  // Update cms fields is used from extensions
  public function updateCMSFields(FieldList $fields) {

    $fields->addFieldsToTab('Root.Footer', [
      TextField::create('TwitterLink'),
      TextField::create('FacebookLink'),
      TextField::create('InstagramLink'),
      TextField::create('GithubLink'),
      HTMLEditorField::create('FooterContent'),
    ]);
  }
}