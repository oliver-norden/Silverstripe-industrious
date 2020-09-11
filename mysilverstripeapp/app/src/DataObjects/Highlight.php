<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\CMS\Model\SiteTree;
use BucklesHusky\FontAwesomeIconPicker\Forms\FAPickerField;
use SilverStripe\Forms\TreeDropdownField;

class Highlight extends DataObject {

  private static $db = [
    'Title' => 'Varchar',
    'Content' => 'Text',
    'Icon' => 'Varchar',
  ];

  private static $has_one = [
    'Page' => HomePage::class,
    'LinkToPage' => SiteTree::class,
  ];

  public function getCMSFields() {
    $fields = parent::getCMSFields();

    $fields->addFieldToTab('Root.Main', FAPickerField::create('Icon'));
    $fields->addFieldToTab('Root.Main', TreeDropdownField::create('LinkToPageID', 'Linked page', SiteTree::class), 'Icon');

    // Remove field that shows which page the highlight belongs
    $fields->removeFieldFromTab('Root.Main', 'PageID');

    return $fields;
  }
}